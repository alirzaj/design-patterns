<?php

namespace singleton;

class Entity
{
    private static self|null $instance = null;

    private function __construct(public string $type, public int $id)
    {
    }

    public static function resolve(string $type, int $id): self
    {
        if (self::$instance) {
            return self::$instance;
        }

        self::$instance = new self($type, $id);

        return self::$instance;
    }
}