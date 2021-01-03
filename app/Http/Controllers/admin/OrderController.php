<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('id', 'DESC')->get();
        return view('admin.order.index', compact('orders'));
    }

    public function seen($id)
    {
        $data = Order::findOrFail($id);
        $data->status = "1";

        $data->save();
        session()->flash('success', 'Order Seen!!!');
        return redirect()->route('admin.order');
    }


    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->destroy($order->id);
        session()->flash('success', 'Order Delete');
        return redirect()->back();
    }
}
