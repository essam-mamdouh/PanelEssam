<?php

namespace App\Http\Controllers\Site\About;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Setting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $about = About::orderBy('id','asc')->first();
        $setting = Setting::first();
        return view('site.about.index',compact('about','setting'));
    }
}
