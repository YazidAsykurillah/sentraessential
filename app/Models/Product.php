<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'slug',
        'indonesian_name',
        'english_name',
        'botanical_name',
        'short_description',
        'description',
        'image',
        'is_featured',
        'status',
        'meta_title',
        'meta_description',
    ];
}
