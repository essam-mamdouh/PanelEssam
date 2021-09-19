<?php

namespace App\Http\Controllers\Site\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $categories = Category::paginate(9);
        $setting = Setting::first();
        return view('site.category.index',compact('categories','setting'));
    }
}
