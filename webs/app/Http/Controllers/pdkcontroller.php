<?php

namespace App\Http\Controllers;
use App\models\Produk;
use Illuminate\Support\Facades\Http;


class pdkcontroller extends Controller
{
    public function index()
    {
        $prod = Produk::all();
        return view('product', ['prods' => $prod]);
    }

    public function api()
    {
        $pdc=Http::get('https://dummyjson.com/products')->json();
        $col=collect($pdc);
        $produ=$col->all();
        $s=($produ["products"]);
        //dd($s[0]);
        return view('apiproduct', ['ss' => $s]);
    }
}
