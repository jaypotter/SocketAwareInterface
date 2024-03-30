<?php

declare(strict_types=1);

namespace Potter\Socket\Aware;

use \Socket;

interface SocketAwareInterface 
{
    public function getSocket(): Socket;
    public function hasSocket(): bool;
}