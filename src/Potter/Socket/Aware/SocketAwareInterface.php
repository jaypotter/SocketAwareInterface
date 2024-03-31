<?php

declare(strict_types=1);

namespace Potter\Socket\Aware;

use \Socket;

interface SocketAwareInterface 
{
    public function bindSocket(string $address, int $port = null): void;
    public function connectSocket(string $address, int $port = null): void;
    public function getSocket(): Socket;
    public function hasSocket(): bool;
    public function hasSocketError(): bool;
    public function readSocket(int $length): string;
    public function writeSocket(string $data): void;
}