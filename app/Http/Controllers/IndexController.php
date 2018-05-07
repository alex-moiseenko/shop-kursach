<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function index()
    {
        if (session()->has('cart'))
        {
            $cart = session()->get('cart');
        }
        return view('index',compact('cart'));
    }

    public function checkout(){
        return view('checkout');
    }

    public function product($id){
        if (session()->has('cart'))
        {
            $cart = session()->get('cart');
        }
        $product = Product::find($id);
        return view('product',compact('product', 'cart'));
    }
}
