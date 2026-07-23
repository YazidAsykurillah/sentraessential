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
                'seo_title' => 'Sentra Essential - Supplier Minyak Atsiri (Essential Oil) Untuk Manufaktur dan Eksportir',
                'seo_description' => 'Sentra Essential adalah Supplier Minyak Atsiri (Essential Oil) dengan kualitas terbaik untuk kebutuhan manufaktur dan eksportir. Dapatkan harga terjangkau dan pengiriman cepat ke seluruh Indonesia.',
                'is_active' => true,
            ]
        );

        PageSeo::updateOrCreate(
            ['page_key' => 'about'],
            [
                'page_name' => 'About',
                'slug' => 'about',
                'seo_title' => 'About - Sentra Essential',
                'seo_description' => 'Tentang Sentra Essential. Supplier Minyak Atsiri (Essential Oil) dengan kualitas terbaik untuk kebutuhan manufaktur dan eksportir.',
                'is_active' => true,
            ]
        );

        PageSeo::updateOrCreate(
            ['page_key' => 'products'],
            [
                'page_name' => 'Products',
                'slug' => 'products',
                'seo_title' => 'Products - Sentra Essential',
                'seo_description' => 'Jual Minyak Atsiri (Essential Oil) berkualitas tinggi untuk kebutuhan manufaktur dan eksportir. Kami menyediakan berbagai jenis minyak atsiri untuk kebutuhan manufaktur dan eksportir.',
                'is_active' => true,
            ]
        );

        PageSeo::updateOrCreate(
            ['page_key' => 'blogs'],
            [
                'page_name' => 'Blogs',
                'slug' => 'blogs',
                'seo_title' => 'Blog - Sentra Essential',
                'seo_description' => 'Informasi dan wawasan seputar minyak atsiri (essential oil), bisnis rempah, dan inovasi industri.',
                'is_active' => true,
            ]
        );

        PageSeo::updateOrCreate(
            ['page_key' => 'contact'],
            [
                'page_name' => 'Contact',
                'slug' => 'contact',
                'seo_title' => 'Kontak - Sentra Essential',
                'seo_description' => 'Hubungi Sentra Essential untuk kebutuhan Minyak Atsiri (Essential Oil) Anda. Kami adalah Supplier Minyak Atsiri dengan kualitas terbaik untuk kebutuhan manufaktur dan eksportir.',
                'is_active' => true,
            ]
        );
    }
}
