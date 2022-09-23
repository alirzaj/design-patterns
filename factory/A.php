<?php

namespace factory;

class A implements DriverContract
{
    public function send(array $data): string
    {
       return 'this is A';
    }
}