<?php

use adapter\FileReader;
use adapter\LocalFileReader;
use adapter\S3FileReader;
use adapter\S3FileReaderAdapter;

include __DIR__ . "/../vendor/autoload.php";

class ReadFileAction //this class is client code and will not change
{
    public function __construct(protected FileReader $fileReader)
    {
    }

    public function execute(string $path): string
    {
        return $this->fileReader->read($path);
    }
}

//setting up ReadFileAction's dependency is usually done in a service container
//$fileReader = new LocalFileReader();
$fileReader = new S3FileReaderAdapter(new S3FileReader());

echo (new ReadFileAction($fileReader))->execute('/a/b.txt');