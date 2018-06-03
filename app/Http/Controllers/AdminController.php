<?php

namespace App\Http\Controllers;

use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class AdminController extends Controller
{

    public function products(Request $request) {

        if ($request->has('page')) {
            $page = $request->input('page');
        } else {
            $page = 1;
        }

        $perPage = 20;
        $offset = $perPage * ($page - 1);

        $all = DB::table('product_size')
            ->join('products', 'product_size.product_id', '=', 'products.id')
            ->join('sizes', 'product_size.size_id', '=', 'sizes.id')
            ->orderBy('product_id', 'asc')
            ->get()->unique('product_id');

        $count = $all->count();
        $return = $all->splice($offset)->take($perPage);
        $products = new LengthAwarePaginator($return, $count, $perPage);
        $products->withPath('products');

//        dd($products);

        return view('admin.products.all_products', compact('products'));
    }

    public function create_product() {
        return view('admin.products.create_product');
    }

    public function save_product(Request $request) {

        //Переменные для полученных инпутов
        $sizes = $request->input('sizes');

        //Сохраненние изображений в папку 'storage/public/products' и запись ссылок в переменную
        $main_img_link = $request->file('main_img')->store('products', 'public');
        $additional_links = null;
        if (isset($request->all()['additional_img'])) {
            foreach ($request->all()['additional_img'] as $img) {
                $additional_links[] = $img->store('products', 'public');
            }
        }

        $product_data = [
            'name'            => $request->input('name'),
            'description'     => $request->input('description'),
            'price'           => $request->input('price'),
            'price_with_sale' => $request->input('price_with_sale'),
            'sale'            => $request->input('sale'),
            'category'        => $request->input('category'),
            'color'           => $request->input('color'),
            'available'       => $available = $request->input('available'),
            'main_img'        => $main_img_link,
            'additional_img'  => json_encode($additional_links),
            'created_at'      => Carbon::now(),
            'updated_at'      => Carbon::now()
        ];

        $id = DB::table('products')->insertGetId($product_data);

        $sizes_data = [];
        foreach ($sizes as $size) {
            $sizes_data[] = ['product_id' => $id, 'size_id' => $size];
        }

        Db::table('product_size')->insert($sizes_data);

        return redirect('admin/products')->with('status', 'Товар успешно добавлен');
    }

    public function edit_product(Request $request) {

        //Переменные для полученных инпутов
        $id = $request->input('id');
        $sizes = $request->input('sizes');

        $product_data = [
            'name'            => $request->input('name'),
            'description'     => $request->input('description'),
            'price'           => $request->input('price'),
            'price_with_sale' => $request->input('price_with_sale'),
            'sale'            => $request->input('sale'),
            'category'        => $request->input('category'),
            'color'           => $request->input('color'),
            'available'       => $available = $request->input('available'),
            'created_at'      => Carbon::now(),
            'updated_at'      => Carbon::now()
        ];

        //Сохраненние изображений в папку 'storage/public/products' и запись ссылок в переменную
        if (isset($request->all()['main_img'])) {
            $main_img_link = $request->file('main_img')->store('products', 'public');
            $product_data['main_img'] = $main_img_link;
        }

        if (isset($request->all()['additional_img'])) {
            foreach ($request->all()['additional_img'] as $img) {
                $additional_links[] = $img->store('products', 'public');
            }
            $product_data['additional_img'] = json_encode($additional_links);
        }

        DB::table('products')
            ->where('id', $id)
            ->update($product_data);

        DB::table('product_size')->where('product_id', $id)->delete();

        $sizes_data = [];
        foreach ($sizes as $size) {
            $sizes_data[] = ['product_id' => $id, 'size_id' => $size];
        }

        Db::table('product_size')->insert($sizes_data);

        return redirect('admin/products')->with('status', 'Товар успешно обновлен!');
    }

    public function delete_product($id){
        DB::table('products')
            ->where('id', $id)
            ->delete();

        DB::table('product_size')->where('product_id', $id)->delete();

        return redirect('admin/products')->with('status', 'Товар успешно удален!');
    }

    public function overview_product($id) {
        $product = Product::find($id);
        $sizes = DB::table('product_size')->where('product_id', $id)->select('size_id')->get()->keyBy('size_id');

        return view('admin.products.edit_product', compact('product', 'sizes'));
    }
}
