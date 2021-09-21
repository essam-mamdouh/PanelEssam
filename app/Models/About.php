<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name_en',
        'des_en',
    ];

    public function getNameAttribute()
    {
        return $this['name_'.App()->getLocale()];
    }

    public function getDesAttribute(){
        return $this['des_'.App()->getLocale()];
    }

}
