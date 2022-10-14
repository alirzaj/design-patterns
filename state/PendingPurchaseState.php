<?php

namespace state;

class PendingPurchaseState implements PurchaseState
{

    public function submit()
    {
        echo 'ok. pay the money' . PHP_EOL;
    }

    public function cancel()
    {
        echo 'ok. refund is done' . PHP_EOL;
    }

    public function payMoney()
    {
        echo 'ok. money is withdrawn' . PHP_EOL;
    }
}