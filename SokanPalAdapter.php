<?php

namespace Adapter;

class SokanPalAdapter implements PaymentAdapter
{
    private $sokanPal;

    public function __construct(SokanPal $sokanPal)
    {
        $this->sokanPal = $sokanPal;
    }

    public function pay($amount)
    {
        $this->sokanPal->doPayment($amount);
    }
}
