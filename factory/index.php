<?php

use factory\DriverFactory;

include __DIR__ . "/../vendor/autoload.php";

$driver = 'B';

$driverFactory = new DriverFactory();

echo $driverFactory->resolve($driver)->send(['foo' => 'bar']) . PHP_EOL;