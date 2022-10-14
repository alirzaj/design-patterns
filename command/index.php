<?php

use command\CreatePost;
use command\Invoker;
use command\UpdatePost;

include __DIR__ . "/../vendor/autoload.php";

Invoker::invoke(CreatePost::class);
Invoker::invoke(UpdatePost::class);