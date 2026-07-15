<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PageSeo;

class PageSeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PageSeo::updateOrCreate(
            ['page_key' => 'home'],
            [
                'page_name' => 'Home',
                'slug' => '/',
                'is_active' => true,
            ]
        );

        PageSeo::updateOrCreate(
            ['page_key' => 'about'],
            [
                'page_name' => 'About',
                'slug' => 'about',
                'is_active' => true,
            ]
        );

        PageSeo::updateOrCreate(
            ['page_key' => 'products'],
            [
                'page_name' => 'Products',
                'slug' => 'products',
                'is_active' => true,
            ]
        );

        PageSeo::updateOrCreate(
            ['page_key' => 'contact'],
            [
                'page_name' => 'Contact',
                'slug' => 'contact',
                'is_active' => true,
            ]
        );
    }
}
