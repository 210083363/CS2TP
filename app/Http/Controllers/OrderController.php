<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function viewOrders()
    {
        $data = [];
        if (Session::has('loginId')) {
            $orders = Order::where('user_id', '=', Session::get('loginId'))->get();
            foreach ($orders as $order) {
                $order_arr = [];
                $order_arr['id'] = $order->id;
                $order_arr['total_price'] = $order->total_price;
                $order_arr['sales'] = [];
                $sales = Sale::where('order_id', '=', $order->id)->get();
                foreach ($sales as $s) {
                    $product_name = Product::where('id', '=', $s->product_id)->first()->name;
                    array_push($order_arr['sales'], [
                        'name' => $product_name,
                        'quantity' => $s->quantity,
                        'price' => $s->price
                    ]);
                }
                array_push($data, $order_arr);
            }

            return view('orders', compact('data'));
        }
    }
}
