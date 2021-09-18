<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index(Request $request){
        $items = Contact::paginate(10);
        return view('admin.contacts.index', compact('items'));
    }


    public function destroy (Contact $contact){
        $contact->delete();
        return back();
    }
}
