<?php

namespace builder;

class Person
{
    public function __construct(
        public string      $name,
        public int|null    $age = null,
        public string|null $color = null,
        public string|null $education = null,
        public int|null    $height = null,
        public string|null $job = null
    )
    {
    }
}