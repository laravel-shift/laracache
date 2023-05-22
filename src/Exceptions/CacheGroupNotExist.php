<?php

namespace Mostafaznv\LaraCache\Exceptions;

use InvalidArgumentException;

class CacheGroupNotExist extends InvalidArgumentException
{
    public static function make(string $group): static
    {
        return new static("Cache group [$group] does not exist.");
    }
}
