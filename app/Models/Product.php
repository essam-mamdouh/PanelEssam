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
        'name_en',
        'des_en',
        'category_id',
        'sub__category_id',
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

    public function sub_category()
    {
        return $this->belongsTo(Sub_Category::class, 'sub__category_id');
    }
}
