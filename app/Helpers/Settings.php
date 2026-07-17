<?php

use App\Models\WebsiteSetting;
use Illuminate\Support\Facades\Cache;

if (! function_exists('setting')) {

    function setting($key, $default = null)
    {
        $settings = Cache::rememberForever(
            'website_settings',
            fn () => WebsiteSetting::first()
        );

        return $settings->{$key} ?? $default;
    }
}