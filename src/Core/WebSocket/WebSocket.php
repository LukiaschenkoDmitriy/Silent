<?php declare(strict_types=1);

namespace Silent\Core\WebSocket;

use Silent\Core\Command\CDP\CDPCommandInterface;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use WebSocket\Client;

class WebSocket implements WebSocketInterface {
    private Client $wsClient;
    private int $id = 0;
    public function __construct(
        private string $wsUrl,
        private Serializer $serializer,
    ) {
        $this->wsClient = new Client($wsUrl, ["timeout" => 10]);
    }

    public function execute(CDPCommandInterface $command): mixed
    {
        $params = $command->transformParams($this->serializer->normalize($command, "json", [
            AbstractObjectNormalizer::SKIP_NULL_VALUES => true
        ]));

        $this->wsClient->send(json_encode(["id" => $this->id++, "method" => $command->command(), "params" => $params]));

        $response = json_decode($this->wsClient->receive(), true);

        $result = $command->transformResult($response["result"]);

        if ($command->result() == null) {
            return $result;
        }

        return $this->serializer->denormalize($result, $command->result());
    }

    public function close(): void
    {
        $this->wsClient->close();
    }
}