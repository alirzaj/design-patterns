<?php

namespace command;

class Invoker
{
    public static function invoke(string $command)
    {
        $object = match ($command){
            CreatePost::class => new CreatePost(new Database()),
            UpdatePost::class => new UpdatePost(new Database()),
            default => throw new \Exception('command not found')
        };

        if (!$object instanceof CommandContract){
            throw new \Exception('command is not an instance of CommandContract');
        }

        $object->execute();
    }
}