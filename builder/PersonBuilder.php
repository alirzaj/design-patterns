<?php

namespace builder;

class PersonBuilder
{
    public array $specifications = [];

    public function __construct(public string $name)
    {
    }

    public function withAge(int $yearsOld): self
    {
        $this->specifications['age'] = $yearsOld;

        return $this;
    }

    public function withHightAsMeters(int $meters)
    {
        $this->specifications['height'] = $meters;

        return $this;
    }

    public function make(): Person
    {
        return new Person($this->name, ...$this->specifications);
    }
}