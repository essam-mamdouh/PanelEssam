<?php

namespace App\Http\Controllers\Site\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Setting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $blogs= Blog::paginate(9);
        $setting = Setting::first();
        return view('site.blog.index',compact('blogs','setting'));
    }

    public function show($id) {
        $blog = Blog::find($id);
        $setting = Setting::first();
        return view('site.blog.show',compact('blog','setting'));
    }
}
