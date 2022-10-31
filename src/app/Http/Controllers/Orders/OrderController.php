<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Http\Requests\Orders\SaveOrderRequest;
use App\Http\Resources\Orders\OrderResource;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {

        // https://laravel.com/docs/9.x/eloquent-relationships#eager-loading
        $orders = Order::with('user')->latest()->get();

        // Todo: refactor //
        $products = Product::get();
        $users = User::get();

        // return view('orders.index', compact('orders', 'products', 'users'));
        return response()->view('orders.index', compact('orders', 'products', 'users'));
    }

    public function saveV1(SaveOrderRequest $request)
    {
        $order = new Order();

        $order->user_id = $request->get('user_id');

        $order->save();

        foreach ($request->get('products') as $productData) {
            DB::insert('INSERT INTO `orders_products` (`order_id`, `product_id`, `count`) VALUES (?, ?, ?)', [
                $order->id,
                $productData['id'],
                $productData['count']
            ]);
        }

        return response()->json();
    }
    public function saveV2(SaveOrderRequest $request)
    {
        $user = User::find($request->get('user_id'));

        $order = new Order();

        $order->user()->associate($user);

        $order->save();

        $products = [];

        foreach ($request->get('products') as $productData) {
            $products[$productData['id']] = [
                'count' => $productData['count']
            ];
        }

        $order->products()->sync($products);

        return response()->json();
    }

    public function edit(Order $order)
    {
        return new OrderResource($order);
    }
}
