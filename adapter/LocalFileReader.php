<?php

namespace adapter;

class LocalFileReader implements FileReader
{
    public function read(string $path): string
    {
        return "reading $path from local" . PHP_EOL;
    }
}