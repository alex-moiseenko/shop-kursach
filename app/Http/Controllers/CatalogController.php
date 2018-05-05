<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller {

    public function index()
    {

        $products = Product::latest()->orderBy('available', 'desc')->paginate(12);
        $all = Product::all();
        $max = intval($all->max('price'));

        return view('catalog', compact('products', 'max'));
    }

    public function filter(Request $request)
    {

        $category = $request->input('category');
        $size = $request->input('size');
        $priceFrom = $request->input('price-from');
        $priceTo = $request->input('price-to');

        $all = Product::all();

        //category filter

        if (isset($category))
        {
            $tempCategory = $all->whereIn('category', $category);
            foreach ($tempCategory as $item){
                $resultCategory[$item->id] = $item;
            }
        }

        //size filter

        if (isset($size))
        {
            foreach ($all as $item)
            {
                $temp = json_decode($item->sizes);
                if (array_intersect($size, $temp))
                {
                    $resultSize[$item->id] = $item;
                }
            }
        }

        //price filter

        $tempPrice = Product::whereBetween('price', [$priceFrom, $priceTo + 1])->get();

        foreach ($tempPrice as $item){
            $resultPrice[$item->id] = $item;
        }

        if(isset($category)){
            $cat_price = array_intersect_key($resultPrice, $resultCategory);
            if(isset($size)){
                $cat_price_size = array_intersect_key($cat_price,$resultSize);
                return $cat_price_size;
            } else {
                return $cat_price;
            }
        }

        if(isset($size)){
            $size_price = array_intersect_key($resultSize, $resultPrice);
            if(isset($size)){
                $cat_price_size = array_intersect_key($size_price,$resultSize);
                return $cat_price_size;
            } else {
                return $size_price;
            }
        }
    }
}
