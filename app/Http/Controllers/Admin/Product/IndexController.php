<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    use ImageTrait;
    public function index(Request $request){
        $items = Product::paginate(10);
        return view('admin.product.index', compact('items'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'image' => 'nullable|image|mimes:jpeg,jpg,bmp,png',
            'des_ar'=>'required',
            'des_en'=>'required',
            'category_id'=>'required',
        ]);
        $data['image'] = $this->uploadImage($request->file('image'), 'blogs/');
        $product = Product::create($data);
        return redirect()->route('admin.product.index');;
    }


    public function show($id)
    {
        //
    }

    public function edit(Product $product)
    {
        return view('admin.product.edit', [
            'item' => $product,
        ]);
    }

    public function update(Request $request , Product $product)
    {

        $data = $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'image' => 'nullable|image|mimes:jpeg,jpg,bmp,png',
            'des_ar'=>'required',
            'des_en'=>'required',
            'category_id'=>'required',

        ]);

        if ($request->hasFile('image')) {
            $this->deleteImage($product->image);
            $data['image'] = $this->uploadImage($request->file('image'), 'blogs/');
        }

        $product->update($data);
        return redirect()->route('admin.about.index');    }


    public function destroy (Product $product){
        $product->delete();
        return back();
    }
}
