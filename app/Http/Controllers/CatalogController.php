<?php

namespace App\Http\Controllers;

use App\Product;
use App\Size;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{

    public function index() {
        $products = DB::table('products')
            ->orderBy('available', 'desc')
            ->paginate(12);

        $all = Product::all();
        $max = intval($all->max('price'));

        return view('catalog.catalog', compact('products', 'max'));
    }

    public function product($id){

        $product = Product::find($id);
        return view('product',compact('product'));
    }

    public function filter(Request $request) {

        if ($request->has('page')) {
            $page = $request->input('page');
        } else {
            $page = 1;
        }

        $perPage = 12;
        $offset = $perPage * ($page - 1);

        $category = $request->input('category');
        $size = $request->input('size');
        $priceFrom = $request->input('price-from');
        $priceTo = $request->input('price-to');

        $allProducts = Product::all();
        $max = intval($allProducts->max('price'));

        $all = DB::table('product_size')
            ->join('products', 'product_size.product_id', '=', 'products.id')
            ->join('sizes', 'product_size.size_id', '=', 'sizes.id')
            ->whereBetween('price', [$priceFrom, $priceTo + 1])
            ->orderBy('available', 'desc')
            ->get();

        $filters = [
            'price-from' => $priceFrom,
            'price-to'   => $priceTo
        ];

        if (isset($category) && isset($size)) {
            $filters['category'] = $category;
            $filters['size'] = $size;
            $filtered_data = $all->whereIn('size', $size)->whereIn('category', $category)->unique('product_id');
        } else if (isset($category)) {
            $filters['category'] = $category;
            $filtered_data = $all->whereIn('category', $category)->unique('product_id');
        } else if (isset($size)) {
            $filters['size'] = $size;
            $filtered_data = $all->whereIn('size', $size)->unique('product_id');
        } else {
            $filtered_data = $all->unique('product_id');
        }

        $count = $filtered_data->count();
        $return = $filtered_data->splice($offset)->take($perPage);
        $result = new LengthAwarePaginator($return, $count, $perPage);

        return view('catalog.catalog', compact('max', 'filters'))->with('products', $result->withPath('filter')->appends($filters));
    }

    public function category($category) {
        $all = Product::all();

        $x = explode("&", $category);
        $category = implode(" & ", $x);
        $filters['category'][] = ucwords($category);

        $products = Product::latest()->where('category', $category)->orderBy('available', 'desc')->paginate(12);
        $max = intval($all->max('price'));

        return view('catalog.catalog', compact('products', 'max', 'filters'));
    }
}
