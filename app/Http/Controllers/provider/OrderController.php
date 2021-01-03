<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function confirm(Request $request)
    {
        $order = new Order();
        $order->provider_id = Auth::id();
        $order->service_id = $request->service_id;
        $order->user_id = $request->user_id;
        $order->save();

        session()->flash('success', 'Order successfully confirmed');
        return redirect()->back();
    }
}
