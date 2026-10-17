<?php declare(strict_types=1);

namespace Silent\Core\HttpExecutor;

use Silent\Core\Command\W3C\W3CCommandInterface;
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
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HttpExecutor {
    private const DEFAULT_HTTP_HEADERES = [
        "Content-Type" => "application/json;charset=UTF-8",
        "Accept" => "application/json"
    ];
    private HttpClientInterface $client;
    private Serializer $serializer;

    public function __construct(string $url, array $headers = [])
    {
        $this->serializer = $this->getSerializer();
        $this->client = HttpClient::createForBaseUri($url, ["headers" => $headers ?? static::DEFAULT_HTTP_HEADERES]);
    }

    public function executeW3C(W3CCommandInterface $command): mixed 
    {
        $unpackedParams = $command->transformParams($this->serializer->normalize($command, "json", $command->skipNullValue() ? [
            AbstractObjectNormalizer::SKIP_NULL_VALUES => true
        ]: []));

        $response = $this->client->request($command->method(), $command->url(), [
            "json" => $unpackedParams
        ]);

        if ($response->getStatusCode() != 200) {
            $json = $this->serializer->decode($response->getContent(false), "json");
            throw new HttpExecutorException($json["value"]["message"], $json["value"]["error"]);
        }

        $json = $command->transformResult($this->serializer->decode($response->getContent(), "json"));

        if ($command->result() == null) {
            return $json;
        }

        return $this->serializer->denormalize($json, $command->result(), "json", [
            AbstractObjectNormalizer::SKIP_NULL_VALUES => true
        ]);
    }

    private function getSerializer(): Serializer
    {
        $factory = new ClassMetadataFactory(new AttributeLoader());
        $nameConverter = new MetadataAwareNameConverter($factory);
        $extractor = new PropertyInfoExtractor([], [new PhpDocExtractor(), new ReflectionExtractor()]);

        return new Serializer([
            ...ActionsNormalizer::getActionsNormalizers(), new BackedEnumNormalizer(), new ArrayDenormalizer(), 
            new ObjectNormalizer($factory, $nameConverter, null, $extractor)
        ],[new JsonEncoder()]);
    }
}