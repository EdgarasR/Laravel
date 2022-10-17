<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::get();
        return view('products.index', [
            'products' => $products
        ]);
    }

    public function orders()
    {
        $orders = Order::get();
        return view('products.orders', [
            'orders' => $orders
        ]);
    }

    public function contact()
    {
        return view('products.contact');
    }
}
