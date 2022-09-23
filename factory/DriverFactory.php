<?php

namespace factory;

use InvalidArgumentException;

class DriverFactory
{
    public function resolve(string $name): DriverContract
    {
        return match ($name){
            'A' => new A(),
            'B' => new B(),
            'C' => new C(),
            default => throw new InvalidArgumentException("$name is not supported")
        };
    }
}