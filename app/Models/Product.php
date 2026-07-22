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
        'price',
        'price_unit',
        'status',
        'meta_title',
        'meta_description',
    ];

    protected static function booted()
    {
        static::deleted(function ($product) {
            if ($product->image) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($product->image);
            }
        });

        static::updating(function ($product) {
            if ($product->isDirty('image') && $product->getOriginal('image')) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($product->getOriginal('image'));
            }
        });
    }
}
