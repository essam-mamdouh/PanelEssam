<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    use ImageTrait;
    public function index(Request $request){
        $items = Slider::paginate(10);
        return view('admin.sliders.index', compact('items'));
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name_en' => 'required',
            'image' => 'nullable|image|mimes:jpeg,jpg,bmp,png',
            'des_en'=>'required',
        ]);
        $data['image'] = $this->uploadImage($request->file('image'), 'sliders/');
        $slider = Slider::create($data);
        return redirect()->route('admin.sliders.index');;
    }


    public function show($id)
    {
        //
    }

    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', [
            'item' => $slider,
        ]);
    }

    public function update(Request $request , Slider $slider)
    {

        $data = $request->validate([
            'name_en' => 'required',
            'image' => 'nullable|image|mimes:jpeg,jpg,bmp,png',
            'des_en'=>'required',
        ]);

        if ($request->hasFile('image')) {
            $this->deleteImage($slider->image);
            $data['image'] = $this->uploadImage($request->file('image'), 'sliders/');
        }

        $slider->update($data);
        return redirect()->route('admin.sliders.index');    }


    public function destroy (Slider $slider){
        $slider->delete();
        return back();
    }
}
