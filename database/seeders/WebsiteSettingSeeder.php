<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WebsiteSetting;

class WebsiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WebsiteSetting::updateOrCreate(
            ['id' => 1],
            [
                'site_name' => env('APP_NAME', 'Site Name'),
                'site_tagline' => env('COMPANY_TAGLINE', 'Your Tagline'),
                'company_name' => env('COMPANY_NAME', 'Your Company Name'),
                'email'=>env('COMPANY_EMAIL', 'example@example.com'),
                'phone'=>env('COMPANY_PHONE', '08123456789'),
                'address' => env('COMPANY_ADDRESS', 'Jl. Example No. 123'),
                'whatsapp' => env('COMPANY_WHATSAPP', '08123456789'),
                'facebook_url' => env('COMPANY_FACEBOOK_URL', 'https://facebook.com/example'),
                'instagram_url' => env('COMPANY_INSTAGRAM_URL', 'https://instagram.com/example'),
                'linkedin_url' => env('COMPANY_LINKEDIN_URL', 'https://linkedin.com/example'),
                'youtube_url' => env('COMPANY_YOUTUBE_URL', 'https://youtube.com/example'),
                'default_seo_title' => env('COMPANY_NAME', 'Your Company Name'),
                'default_seo_description' => env('COMPANY_DESCRIPTION', 'Your Description'),
                'maintenance_mode' => false,
            ]
        );
    }
}
