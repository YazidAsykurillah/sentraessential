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
        WebsiteSetting::firstOrCreate(
            ['id' => 1],
            [
                'site_name' => 'Laravel CMS',
                'site_tagline' => 'CMS Boilerplate',
                'company_name' => 'My Company',
            ]
        );
    }
}
