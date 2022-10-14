<?php

use state\CanceledPurchaseState;
use state\ConfirmedPurchaseState;
use state\PendingPurchaseState;
use state\Purchase;

include __DIR__ . '/../vendor/autoload.php';

$states = [new PendingPurchaseState(), new ConfirmedPurchaseState(), new CanceledPurchaseState()];

$purchase = new Purchase(id: 10, state: $states[array_rand($states)]);

$purchase->state->payMoney();
$purchase->state->submit();
$purchase->state->cancel();