<?php
namespace factory;

interface DriverContract
{
    public function send(array $data): string;
}