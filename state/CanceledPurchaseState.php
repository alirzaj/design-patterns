<?php

namespace state;

class CanceledPurchaseState implements PurchaseState
{
    public function submit()
    {
        echo 'you must make a new purchase' . PHP_EOL;
    }

    public function cancel()
    {
        echo 'can not cancel twice' . PHP_EOL;
    }

    public function payMoney()
    {
        echo 'this purchase was canceled. you must make a new purchase' . PHP_EOL;
    }
}