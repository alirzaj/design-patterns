<?php

namespace state;

interface PurchaseState
{
    public function submit();
    public function cancel();
    public function payMoney();
}