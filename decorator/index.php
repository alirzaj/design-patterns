<?php

use decorator\CachedThirdPartyApiSdk;
use decorator\ThirdPartyApiSdk;

include __DIR__ . "/../vendor/autoload.php";

$thirdPartyApiSdk = new ThirdPartyApiSdk();
$cachedThirdPartyApiSdk = new CachedThirdPartyApiSdk($thirdPartyApiSdk);

//echo $thirdPartyApiSdk->getAll();
echo $cachedThirdPartyApiSdk->getAll();