<?php

namespace command;

interface CommandContract
{
    public function execute() : void;
}