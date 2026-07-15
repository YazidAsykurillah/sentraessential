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
            ['name' => 'Category 1', 'slug' => 'category-1', 'description' => 'Category 1 description'],
            ['name' => 'Category 2', 'slug' => 'category-2', 'description' => 'Category 2 description'],
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
