<?php declare(strict_types=1);

namespace Silent\Core\HttpExecutor;

use Silent\Core\Command\W3C\W3CCommandInterface;
use Symfony\Component\Serializer\Encoder\DecoderInterface;
use Symfony\Component\Serializer\Encoder\EncoderInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Contracts\HttpClient\HttpClientInterface;

interface HttpExecutorInterface {
    public function getClient(): HttpClientInterface;
    public function executeW3C(W3CCommandInterface $command): mixed;
    public function serializer(): Serializer;
    /**
     * Summary of normalizers
     * @return array<NormalizerInterface&DenormalizerInterface>
     */
    public function normalizers(): array;
    /**
     * Summary of encoders
     * @return array<EncoderInterface&DecoderInterface>
     */
    public function encoders(): array;
}