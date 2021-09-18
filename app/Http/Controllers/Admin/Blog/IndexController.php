<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    use ImageTrait;
    public function index(Request $request){
        $items = Blog::paginate(10);
        return view('admin.blogs.index', compact('items'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'image' => 'nullable|image|mimes:jpeg,jpg,bmp,png',
            'des_ar'=>'required',
            'des_en'=>'required',
        ]);
        $data['image'] = $this->uploadImage($request->file('image'), 'blogs/');
        $blog = Blog::create($data);
        return redirect()->route('admin.blogs.index');;
    }


    public function show($id)
    {
        //
    }

    public function edit(Blog $blog)
    {
        return view('admin.about.edit', [
            'item' => $blog,
        ]);
    }

    public function update(Request $request , Blog $blog)
    {

        $data = $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'image' => 'nullable|image|mimes:jpeg,jpg,bmp,png',
            'des_ar'=>'required',
            'des_en'=>'required',
        ]);

        if ($request->hasFile('image')) {
            $this->deleteImage($blog->image);
            $data['image'] = $this->uploadImage($request->file('image'), 'blogs/');
        }

        $blog->update($data);
        return redirect()->route('admin.about.index');    }


    public function destroy (Blog $blog){
        $blog->delete();
        return back();
    }
}
