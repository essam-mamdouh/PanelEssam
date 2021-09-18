<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    use ImageTrait;

    public function index()
    {
        $item = Setting::first();
        return view('admin.settings.edit', compact('item'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name'            => 'min:3|max:191',
            'logo'            => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner'          => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone'           => 'required',
            'facebook'        => 'required',
            'instgram'        => 'required',
            'linkedin'        => 'required',
            'youtube'         => 'required',
            'des_ar'          => 'required',
            'des_en'          => 'required',
            'address'         => 'required',
           ]);



        $item = Setting::first();

        if ($request->hasFile('logo')) {
            $this->deleteImage($item->logo);
            $data['logo'] = $this->uploadImage($request->file('logo'), 'setting/');
        }

        if ($request->hasFile('banner')) {
            $this->deleteImage($item->banner);
            $data['banner'] = $this->uploadImage($request->file('banner'), 'settings/');
        }


        $item->update($data);

        return redirect(route('settings.update'))->with('success','Settings updated successfully');
    }
}
