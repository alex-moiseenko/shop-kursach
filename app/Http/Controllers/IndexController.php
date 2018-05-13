<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    var $cart;

    public function __construct()
    {
        if (session()->has('cart'))
        {
            $this->cart = session()->get('cart');
        }
    }

    public function index()
    {
        return view('index',compact('this->cart'));
    }

    public function checkout(){
        return view('checkout','this->cart');
    }

    public function product($id){
        $product = Product::find($id);
        return view('product',compact('product', 'this->cart'));
    }

    public function categories(){
        return view('categories', compact('this->cart'));
    }
}
