<?php

namespace Imannms\Backup\Exceptions;

use Exception;

class InvalidCommand extends Exception
{
    public static function create(string $reason): self
    {
        return new static($reason);
    }
}
