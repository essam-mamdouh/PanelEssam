<?php
namespace App\Traits;

trait storeImage
{

    protected function storeImage($file)
    {
        $path = $file->store('public/images');
        $url = url('/');
        $url = str_replace('public', '', $url);
        $serverPath = $url . '/storage/app/';
        $path = $serverPath . $path;
        return $path;
    }
}
