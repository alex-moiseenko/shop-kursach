<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function products(){
        return view('admin.products.all_products');
    }
}
