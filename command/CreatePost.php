<?php

namespace command;

class CreatePost implements CommandContract
{
    public function __construct(private Database $database)
    {
    }

    public function execute(): void
    {
        $this->database->query();

        echo 'created a post' . PHP_EOL;
    }
}