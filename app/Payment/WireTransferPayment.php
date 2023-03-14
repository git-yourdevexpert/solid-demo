<?php

namespace App\Payment;

use App\Contracts\PayableInterface;

class WireTransferPayment implements PayableInterface
{
    public function pay()
    {
        // logic goes here
        return 'OK';
    }
}