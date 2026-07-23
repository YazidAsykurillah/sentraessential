<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $categories = [
            ['name' => 'Minyak Atsiri Murni', 'slug' => 'minyak-atsiri-murni', 'description' => 'Minyak atsiri murni untuk berbagai kebutuhan industri.'],
            ['name' => 'Bahan Baku Kosmetik', 'slug' => 'bahan-baku-kosmetik', 'description' => 'Bahan baku berkualitas untuk produk kosmetik dan perawatan kulit.'],
            ['name' => 'Bahan Baku Farmasi', 'slug' => 'bahan-baku-farmasi', 'description' => 'Ekstrak alami terstandar untuk industri farmasi dan kesehatan.'],
            ['name' => 'Aromaterapi & Spa', 'slug' => 'aromaterapi-spa', 'description' => 'Produk minyak esensial pilihan untuk kebutuhan relaksasi dan spa.'],
        ];

        foreach ($categories as $index => $category) {
            Category::firstOrcreate([
                'name' => $category['name'],
                'slug' => strtolower(str_replace(['\'', ' '], ['', '-'], $category['name'])),
                'description' => $category['description'],
                'is_active'=>true
            ]);
        }

    }
}
