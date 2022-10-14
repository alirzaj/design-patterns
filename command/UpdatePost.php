<?php

namespace command;

class UpdatePost implements CommandContract
{
    public function __construct(private Database $database)
    {
    }

    public function execute(): void
    {
        $this->database->query();

        echo 'updated a post' . PHP_EOL;
    }
}