<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentNotifyController extends Controller
{
    public function receive(Request $request)
    {
        broadcast(new Payment($request->data->orderNo, $request->data->status));
    }
}
