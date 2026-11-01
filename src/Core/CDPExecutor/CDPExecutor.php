<?php declare(strict_types=1);

namespace Silent\Core\CDPExecutor;

use Silent\Core\Command\CDP\CDPCommandInterface;
use Silent\Core\Command\Chromium\CDP\SendWithoutResultCommand;
use Silent\Core\Command\Chromium\CDP\SendWithResultCommand;
use Silent\Core\HttpExecutor\HttpExecutorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;

class CDPExecutor implements CDPExecutorInterface {
    public function __construct(private HttpExecutorInterface $httpExecutor, private string $sessionId) {}
    public function execute(CDPCommandInterface $command, bool $withoutResult = false): mixed {
        if ($command->webSocketCommand()) {
            throw new \Exception(sprintf("Command '%s' only available for webscoket connection. Use WebDriver->executeWS instead Webdriver->executeCDP", static::class));
        }

        $serializer = $this->httpExecutor->serializer();

        $params = $command->transformParams($serializer->normalize($command, "json", [
            AbstractObjectNormalizer::SKIP_NULL_VALUES => true
        ]));

        if ($withoutResult) {
            $this->httpExecutor->execute(new SendWithoutResultCommand($command->command(), $params, $this->sessionId));
            return null;
        }

        $response = $this->httpExecutor->execute(new SendWithResultCommand($command->command(), $params, $this->sessionId));

        $result = $command->transformResult($response);

        if ($command->result() == null) {
            return $result;
        }

        return $serializer->denormalize($result, $command->result());
    }
}