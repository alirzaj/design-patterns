<?php

use singleton\Entity;

include __DIR__ . "/../vendor/autoload.php";

$entity1 = Entity::resolve('blog', 10);

var_dump($entity1);

$entity2 = Entity::resolve('course', 20);

var_dump($entity1 === $entity2, $entity2);