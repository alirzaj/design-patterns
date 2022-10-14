<?php

namespace decorator;

class ThirdPartyApiSdk implements ThirdPartyApiSdkContract
{
    public function getAll(): string
    {
        return 'get all';
    }
}