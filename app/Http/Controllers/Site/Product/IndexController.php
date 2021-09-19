<?php

namespace App\Http\Controllers\Site\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index($id){

        $items = Category::find($id);
        $products = Product::where('category_id',$items->id)->orderby('id','asc')->paginate(9);
        $setting = Setting::get();
        return view('site.product.index',compact('items','products','setting'));
    }
}
