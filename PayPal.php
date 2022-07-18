<?php

namespace Adapter;
use App\Http\Controllers\Controller;
use App\Models\Model;

class PayPal extends Controller
{
    public function sendPayment($amount)
    {
        echo "Paying via PayPal: " . $amount;
    }
}
