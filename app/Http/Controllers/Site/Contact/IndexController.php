<?php

namespace App\Http\Controllers\Site\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $contact= Contact::first();
        $setting = Setting::query()->orderBy('id','asc')->first();
        return view('site.contact.index',compact('contact','setting'));
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'email' => 'required',
            'name'=> 'required|string|max:8',
            'message'=> 'required|string|max:120',
        ]);
        Contact::create($request->all());
        session()->flash("success",'new contact has been stored successfuly.');
        return redirect('/contact');
    }
}
