<?php

declare(strict_types=1);

namespace Potter\Socket\Aware;

use \Socket;

abstract class AbstractSocketAware implements SocketAwareInterface
{
    abstract public function getSocket(): Socket;
    abstract public function hasSocket(): bool;
}