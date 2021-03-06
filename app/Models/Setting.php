<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'banner',
        'phone',
        'facebook',
        'instgram',
        'linkedin',
        'youtube',
        'des_en',
        'address',
    ];

    public function getDesAttribute(){
        return $this['des_'.App()->getLocale()];
    }
}
