<?php

namespace decorator;

class CachedThirdPartyApiSdk implements ThirdPartyApiSdkContract
{
    public function __construct(public ThirdPartyApiSdkContract $thirdPartyApiSdk)
    {
    }

    public function getAll(): string
    {
        return 'hitting the cache ' . $this->thirdPartyApiSdk->getAll();
    }
}