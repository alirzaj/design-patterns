<?php

use builder\PersonBuilder;

include __DIR__ . "/../vendor/autoload.php";

$personBuilder = new PersonBuilder('Alireza');

$person = $personBuilder
    ->withAge(23)
    ->withHightAsMeters(179)
    ->make();

var_dump($person);