<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CatalogController extends Controller
{
    public function index(){
        $products = Product::latest()->orderBy('available','desc')->paginate(12);
        return view('catalog', compact('products'));
    }

    public function filter(Request $request){

        $category = $request->input('category');
        $size = $request->input('size');
        $priceFrom = $request->input('price-from');
        $priceTo = $request->input('price-to');

        return $request;
    }
}
