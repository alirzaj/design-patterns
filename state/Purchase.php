<?php

namespace state;

class Purchase
{
    public function __construct(public int $id, public PurchaseState $state)
    {
    }
}