<?php

declare(strict_types=1);

namespace Potter\Socket\Aware;

use \Socket;

abstract class AbstractSocketAware implements SocketAwareInterface
{
    abstract public function bindSocket(string $address, int $port = null): void;
    abstract public function connectSocket(string $address, int $port = null): void;
    abstract public function getSocket(): Socket;
    abstract public function hasSocket(): bool;
    abstract public function hasSocketError(): bool;
    abstract public function readSocket(int $length): string;
}