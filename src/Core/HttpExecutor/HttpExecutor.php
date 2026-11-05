<?php declare(strict_types=1);

namespace Silent\Core\HttpExecutor;

use Silent\Core\Command\W3C\Events\W3CommandEvent;
use Silent\Core\Command\W3C\Events\W3CommandResultEvent;
use Silent\Core\Command\W3C\W3CCommandInterface;
use Silent\Core\HttpExecutor\Events\GetEncodersEvent;
use Silent\Core\HttpExecutor\Events\GetNormalizersEvent;
use Silent\Core\Normalizer\Actions\ActionsNormalizer;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AttributeLoader;
use Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HttpExecutor implements HttpExecutorInterface {
    private const DEFAULT_HTTP_HEADERES = [
        "Content-Type" => "application/json;charset=UTF-8",
        "Accept" => "application/json"
    ];
    private HttpClientInterface $client;
    private Serializer $serializer;
    private EventDispatcherInterface $dispatcher;
    private ValidatorInterface $validator;

    public function __construct(string $url, array $headers = [])
    {
        $this->serializer = new Serializer($this->normalizers(), $this->encoders());
        $this->client = HttpClient::createForBaseUri($url, ["headers" => $headers ?? static::DEFAULT_HTTP_HEADERES]);
        $this->validator = $this->getValidator();
    }

    public function setEventDispatcher(EventDispatcherInterface $dispatcher): void {
        $this->dispatcher = $dispatcher;
    }

    public function getValidator(): ValidatorInterface
    {
        return Validation::createValidatorBuilder()->enableAttributeMapping()->getValidator();
    }

    public function execute(W3CCommandInterface $command): mixed 
    {
        if (isset($this->validator)) {
            $violations = $this->validator->validate($command);

            if (count($violations) > 0) {
                $exceptions = [];
                foreach ($violations as $violation) {
                    $exceptions[] = sprintf("%s: %s", $violation->getPropertyPath(), $violation->getMessage());
                }

                if (count($exceptions) > 0) {
                    throw new \InvalidArgumentException("\n\n" . implode("\n", $exceptions));
                }
            }
        }

        $unpackedParams = $command->transformParams($this->serializer->normalize($command, "json", $command->skipNullValue() ? [
            AbstractObjectNormalizer::SKIP_NULL_VALUES => true
        ]: []));

        if (isset($this->dispatcher)) {
            $unpackedParams = $this->dispatcher->dispatch(new W3CommandEvent($command, $unpackedParams))->params;
        }

        $response = $this->client->request($command->method(), $command->url(), [
            "json" => $unpackedParams
        ]);

        if ($response->getStatusCode() != 200) {
            $json = $this->serializer->decode($response->getContent(false), "json");

            if ($command->exception() !== null) {
                throw $command->exception();
            }

            throw new HttpExecutorException($json["value"]["message"], $json["value"]["error"]);
        }

        $json = $command->transformResult($this->serializer->decode($response->getContent(), "json"));

        if ($command->result() == null) {
            if (isset($this->dispatcher)) {
                $json = $this->dispatcher->dispatch(new W3CommandResultEvent($command, $json))->result;
            }

            return $json;
        }

        $result = $this->serializer->denormalize($json, $command->result(), "json", [
            AbstractObjectNormalizer::SKIP_NULL_VALUES => true
        ]);

        if (isset($this->dispatcher)) {
            $result = $this->dispatcher->dispatch(new W3CommandResultEvent($command, $result))->result;
        }

        return $result;
    }

    public function getClient(): HttpClientInterface
    {
        return $this->client;
    }

    public function serializer(): Serializer
    {
        return $this->serializer;
    }

    public function normalizers(): array
    {
        $factory = new ClassMetadataFactory(new AttributeLoader());
        $nameConverter = new MetadataAwareNameConverter($factory);
        $extractor = new PropertyInfoExtractor([], [new PhpDocExtractor(), new ReflectionExtractor()]);

        $normalizers = [
            ...ActionsNormalizer::getActionsNormalizers(),
            new BackedEnumNormalizer(),
            new ArrayDenormalizer(),
            new ObjectNormalizer($factory, $nameConverter, null, $extractor)
        ];

        if (isset($this->dispatcher)) {
            $normalizers = $this->dispatcher->dispatch(new GetNormalizersEvent(static::class, $normalizers))->normalizers;
        }

        return $normalizers;
    }

    public function encoders(): array
    {
        $encoders = [new JsonEncoder()];

        if (isset($this->dispatcher)) {
            $encoders = $this->dispatcher->dispatch(new GetEncodersEvent(static::class, $encoders))->encoders;
        }

        return $encoders;
    }
}