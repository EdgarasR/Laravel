<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function count()
    {
        $productsQuery = DB::table('products');

        $products = $productsQuery->count();

        dd($products);
    }

    public function categories()
    {
        $productsQuery = DB::table('products');

        $productsQuery->take(2);

        $products = $productsQuery->get('count');

        dd($products);
    }

    public function byName()
    {
        $productsQuery = DB::table('products');

        $productsQuery->orderBy('name');

        $products = $productsQuery->get();

        dd($products);
    }

    // PAS MANE NĖRA is_active, TODĖL PADARIAU SU PANAŠIA SKILTIMI KITOJE LENTELĖJE

    public function transactions()
    {
        $transactionQuery = DB::table('transaction');

        $transactionQuery->where('trans_type', '=', 'cash');

        $transactionQuery->orderBy('id', 'desc');

        $transactionQuery->limit(3);

        $transactions = $transactionQuery->get();

        dd($transactions);
    }
}
