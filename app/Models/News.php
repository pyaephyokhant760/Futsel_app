<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'date',
        'image',
        'description',
    ];

    // public function getImageAttribute($value)
    // {
    //     return asset('storage/' . $value);
    // }
}
