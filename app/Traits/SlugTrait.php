<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait SlugTrait
{
    public function slug($sentence)
    {
        return str::slug($sentence, '-');
    }
}
