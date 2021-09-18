<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    use ImageTrait;
    public function index(Request $request){
        $items = Category::paginate(10);
        return view('admin.categories.index', compact('items'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'image' => 'nullable|image|mimes:jpeg,jpg,bmp,png',
        ]);
        $data['image'] = $this->uploadImage($request->file('image'), 'categories/');
        $categories = Category::create($data);
        return redirect()->route('admin.categories.index');;
    }


    public function show($id)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', [
            'item' => $category,
        ]);
    }

    public function update(Request $request , Category $category)
    {

        $data = $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'image' => 'nullable|image|mimes:jpeg,jpg,bmp,png',
        ]);

        if ($request->hasFile('image')) {
            $this->deleteImage($category->image);
            $data['image'] = $this->uploadImage($request->file('image'), 'categories/');
        }

        $category->update($data);
        return redirect()->route('admin.categories.index');    }


    public function destroy (Category $item){
        $item->delete();
        return back();
    }

}
