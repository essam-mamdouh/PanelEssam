<?php

namespace App\Http\Controllers\Site\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show($id){
        $product = Product::findOrFail($id);
        $setting = Setting::first();
        return view('site.product.show',compact('product','setting'));
    }
}
