<?php

namespace App\Traits;

trait ImageTrait
{
    public function uploadImage($image, $location = '')
    {
        $location = 'uploads/' . $location;
        $imageName = (rand()) . '.' . $image->getClientOriginalExtension();
        $image->move($location, $imageName);
        return $location . $imageName;
    }

    public function uploadImages($images, $model, $foreign, $location = '')
    {
        if (is_array($images)) {
            foreach ($images as $image) {
                $name = $this->uploadImage($image, $location);
                $model::create([
                    $foreign['key'] => $foreign['value'],
                    'name' => $name,
                ]);
            }
        } elseif ($images) {
            $images = $this->uploadImage($images, $location);
            $model::create($images);
        }
    }

    public function deleteImage($image)
    {
        try {
            unlink($image);
        } catch (\Exception $e) {
            return false;
        }
        return true;
    }

    public function deleteImages($images)
    {
        foreach ($images->get() as $image) {
            try {
                unlink($image->name);
            } catch (\Exception $e) {
                return false;
            }
        }
        $images->delete();
        return true;
    }
}
