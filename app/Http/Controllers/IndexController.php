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
        return view('index');
    }

    public function checkout(){
        return view('checkout');
    }

    public function product($id){
        return view('product');
    }
}
