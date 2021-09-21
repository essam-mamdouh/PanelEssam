<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    use ImageTrait;
    public function index(Request $request){
        $items = About::paginate(10);
        return view('admin.about.index', compact('items'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name_en' => 'required',
            'image' => 'nullable|image|mimes:jpeg,jpg,bmp,png',
            'des_en'=>'required',
        ]);
        $data['image'] = $this->uploadImage($request->file('image'), 'about/');
        $about = About::create($data);
        return redirect()->route('admin.about.index');;
    }


    public function show($id)
    {
        //
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', [
            'item' => $about,
        ]);
    }

    public function update(Request $request , About $about)
    {

        $data = $request->validate([
            'name_en' => 'required',
            'image' => 'nullable|image|mimes:jpeg,jpg,bmp,png',
            'des_en'=>'required',
        ]);

        if ($request->hasFile('image')) {
            $this->deleteImage($about->image);
            $data['image'] = $this->uploadImage($request->file('image'), 'about/');
        }

        $about->update($data);
        return redirect()->route('admin.about.index');    }


    public function destroy (About $about){
        $about->delete();
        return back();
    }
}
