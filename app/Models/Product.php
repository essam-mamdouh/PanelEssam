<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name_ar',
        'name_en',
        'des_ar',
        'des_en',
        'category_id',
    ];

    public function getNameAttribute()
    {
        return $this['name_'.App()->getLocale()];
    }

    public function getDesAttribute(){
        return $this['des_'.App()->getLocale()];
    }


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
