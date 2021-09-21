<?php

namespace App\Http\Controllers\Site\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Sub_Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $categories = Category::paginate(9);
        $subCategories = Sub_Category::get();
        $setting = Setting::first();
        return view('site.category.index',compact('categories','setting','subCategories'));
    }

    public function show($id){

        $subCategories = Sub_Category::find($id);
        $products = $subCategories->products()->paginate(9);
        $setting = Setting::first();
        return view('site.product.index',compact('subCategories','products','setting'));
    }
}
