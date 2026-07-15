<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSeo extends Model
{
    protected $fillable = [
        'page_name',
        'page_key',
        'slug',
        'seo_title',
        'seo_description',
        'og_image',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
