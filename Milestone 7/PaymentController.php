<?php

namespace App\Controllers;

use Midtrans\Config;
use Midtrans\Snap;

class PaymentController extends BaseController
{
    public function __construct()
    {
        Config::$serverKey = 'SB-Mid-server-xxxxxxxx';

        Config::$isProduction = false;

        Config::$isSanitized = true;

        Config::$is3ds = true;
    }

    public function index()
    {
        return view('payment');
    }

    public function token()
    {

        $transaction = [

            'transaction_details' => [

                'order_id' => rand(),

                'gross_amount' => 25000

            ],

            'customer_details' => [

                'first_name' => 'Farrel',

                'email' => 'user@gmail.com'

            ]

        ];

        return Snap::getSnapToken($transaction);

    }

    public function finish()
    {

        return redirect()->to('/dashboard');

    }
}
