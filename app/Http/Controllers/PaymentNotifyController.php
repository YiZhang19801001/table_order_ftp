<?php

namespace App\Http\Controllers;

use App\Events\UpdateOrder;
use Illuminate\Http\Request;

class PaymentNotifyController extends Controller
{
    public function receive(Request $request)
    {
        $request->data = json_decode(json_encode($request->data));
        // $orderId, $orderItem, $userId, $action
        broadcast(new UpdateOrder($request->data->mchOrderNo, null, 123, $request->data->status));
    }
}
