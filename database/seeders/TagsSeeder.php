<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'Ekstraksi'],
            ['name' => 'Distilasi'],
            ['name' => 'Kualitas Ekspor'],
            ['name' => 'Organik'],
            ['name' => 'Manufaktur'],
        ];

        foreach ($tags as $index => $tag) {
            Tag::firstOrcreate([
                'name' => $tag['name'],
                'slug' => strtolower(str_replace(['\'', ' '], ['', '-'], $tag['name'])),
            ]);
        }
    }
}
