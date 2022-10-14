<?php

namespace state;

class ConfirmedPurchaseState implements PurchaseState
{
    public function submit()
    {
        echo 'can not confirm twice' . PHP_EOL;
    }

    public function cancel()
    {
        echo 'ok if tou purchased it not more than on week ago' . PHP_EOL;
    }

    public function payMoney()
    {
        echo 'already paid' . PHP_EOL;
    }
}