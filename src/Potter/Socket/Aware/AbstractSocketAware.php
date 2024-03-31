<?php

declare(strict_types=1);

namespace Potter\Socket\Aware;

use Socket;

abstract class AbstractSocketAware implements SocketAwareInterface
{
    abstract public function bindSocket(string $address, int $port = null): void;
    abstract public function connectSocket(string $address, int $port = null): void;
    
    abstract public function blockSocket(): void;
    abstract public function unblockSocket(): void;
    
    abstract public function getSocket(): Socket;
    abstract public function hasSocket(): bool;
    
    abstract public function hasSocketError(): bool;
    
    abstract public function readSocket(int $length): string;
    
    abstract public function getLastSocketMessage(): string;
    abstract public function readSocketMessage(): string;
    
    abstract public function writeSocket(string $data): void;
}