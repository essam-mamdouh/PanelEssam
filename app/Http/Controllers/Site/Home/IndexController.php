<?php

namespace App\Http\Controllers\Site\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $slider = Slider::orderBy('id','asc')->first();
        $about = About::orderBy('id','asc')->first();
        $products = Product::paginate(6);
        $blogs = Blog::paginate(3);

        return view('site.home.index',compact('slider','about','products','blogs'));
    }
}
