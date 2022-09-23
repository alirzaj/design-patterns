<?php

namespace adapter;

interface FileReader
{
    public function read(string $path): string;
}