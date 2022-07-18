<?php

namespace Adapter;
class SokanPal
{
    public function doPayment($amount)
    {
        echo "Paying via SokanPal: " . $amount;
    }
}
