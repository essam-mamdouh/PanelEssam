<?php

namespace App\Http\Controllers\Admin\SubCategory;

use App\Http\Controllers\Controller;
use App\Models\Sub_Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request){
        $items = Sub_Category::paginate(10);
        return view('admin.subCategory.index', compact('items'));
    }

    public function create()
    {
        return view('admin.subCategory.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name_en' => 'required',
            'category_id' => 'required',
        ]);
        $sub_category = Sub_Category::create($data);
        return redirect()->route('admin.subCategory.index');;
    }


    public function show($id)
    {
        //
    }

    public function edit(Sub_Category $subCategory)
    {
        return view('admin.subCategory.edit', [
            'item' => $subCategory,
        ]);
    }

    public function update(Request $request , Sub_Category $subCategory)
    {

        $data = $request->validate([
            'name_en' => 'required',
            'category_id' => 'required',
        ]);

        $subCategory->update($data);
        return redirect()->route('admin.subCategory.index');    }


    public function destroy (Sub_Category $subCategory){
        $subCategory->delete();
        return back();
    }
}
