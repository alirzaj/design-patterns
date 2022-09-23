<?php

namespace factory;

class C implements DriverContract
{
    public function send(array $data): string
    {
       return 'this is C';
    }
}