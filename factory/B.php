<?php

namespace factory;

class B implements DriverContract
{
    public function send(array $data): string
    {
       return 'this is B';
    }
}