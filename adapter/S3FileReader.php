<?php

namespace adapter;

class S3FileReader
{
    public function getContent(array $parameters): string
    {
        return "reading {$parameters['path']} from s3" . PHP_EOL;
    }
}