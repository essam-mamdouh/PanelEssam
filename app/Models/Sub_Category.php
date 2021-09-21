<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_en',
        'category_id'
    ];

    public function getNameAttribute()
    {
        return $this['name_'.App()->getLocale()];
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

}
