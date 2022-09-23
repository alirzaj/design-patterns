<?php

namespace adapter;

class S3FileReaderAdapter implements FileReader
{
    public function __construct(protected S3FileReader $reader)
    {
    }

    public function read(string $path): string
    {
        return $this->reader->getContent(['path' => $path]);
    }
}