<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteSetting extends Model
{
    protected $fillable = [
        'site_name',
        'site_tagline',
        'company_name',

        'logo',
        'favicon',

        'email',
        'phone',
        'whatsapp',

        'address',
        'google_maps_url',

        'facebook_url',
        'instagram_url',
        'linkedin_url',
        'youtube_url',

        'default_seo_title',
        'default_seo_description',

        'maintenance_mode',
    ];

}