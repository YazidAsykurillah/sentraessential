<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'indonesian_name' => 'Minyak Sereh Wangi',
                'english_name' => 'Citronella Oil',
                'botanical_name' => 'Cymbopogon nardus',
                'short_description' => 'Minyak sereh wangi murni dengan aroma segar dan kuat. Cocok untuk industri pembersih, kosmetik, dan aromaterapi.',
                'description' => '<p>Minyak Sereh Wangi (Citronella Oil) adalah salah satu jenis minyak atsiri yang paling banyak digunakan di seluruh dunia. Dikenal karena sifat anti-serangga alami dan aromanya yang menyegarkan.</p>',
                'is_featured' => true,
                'status' => 'published',
            ],
            [
                'indonesian_name' => 'Minyak Daun Cengkeh',
                'english_name' => 'Clove Leaf Oil',
                'botanical_name' => 'Syzygium aromaticum',
                'short_description' => 'Minyak daun cengkeh berkualitas tinggi yang diekstraksi secara presisi. Sangat ideal untuk industri farmasi dan kesehatan.',
                'description' => '<p>Minyak Daun Cengkeh kami diekstrak dari daun cengkeh pilihan. Mengandung Eugenol yang tinggi yang sangat berguna dalam bidang farmasi dan kesehatan sebagai analgesik dan antibakteri alami.</p>',
                'is_featured' => true,
                'status' => 'published',
            ],
            [
                'indonesian_name' => 'Minyak Nilam',
                'english_name' => 'Patchouli Oil',
                'botanical_name' => 'Pogostemon cablin',
                'short_description' => 'Minyak nilam khas Indonesia dengan karakteristik aroma earthy yang kuat. Pilihan utama untuk industri parfum premium.',
                'description' => '<p>Minyak Nilam adalah bahan baku penting dalam industri wewangian (parfum) sebagai fiksatif (pengikat aroma). Kami menyuplai Minyak Nilam berkualitas tinggi yang telah memenuhi standar ekspor internasional.</p>',
                'is_featured' => true,
                'status' => 'published',
            ],
            [
                'indonesian_name' => 'Minyak Jahe',
                'english_name' => 'Ginger Oil',
                'botanical_name' => 'Zingiber officinale',
                'short_description' => 'Minyak jahe berkualitas premium dengan aroma hangat dan pedas. Ideal untuk aplikasi farmasi, makanan, dan minuman.',
                'description' => '<p>Minyak Jahe diekstrak melalui proses destilasi uap rimpang jahe segar. Banyak dimanfaatkan pada industri makanan, minuman, serta kesehatan karena aromanya yang khas dan manfaat terapetiknya.</p>',
                'is_featured' => true,
                'status' => 'published',
            ],
            [
                'indonesian_name' => 'Minyak Pala',
                'english_name' => 'Nutmeg Oil',
                'botanical_name' => 'Myristica fragrans',
                'short_description' => 'Minyak pala dengan aroma rempah yang khas dan menenangkan.',
                'description' => '<p>Minyak pala diekstrak dari biji buah pala berkualitas. Sering digunakan pada industri farmasi, kosmetik, dan aromaterapi karena memiliki sifat menenangkan dan menghangatkan.</p>',
                'is_featured' => false,
                'status' => 'published',
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['slug' => Str::slug($product['indonesian_name'])],
                [
                    'indonesian_name' => $product['indonesian_name'],
                    'english_name' => $product['english_name'],
                    'botanical_name' => $product['botanical_name'],
                    'short_description' => $product['short_description'],
                    'description' => $product['description'],
                    'is_featured' => $product['is_featured'],
                    'status' => $product['status'],
                    'meta_title' => $product['indonesian_name'] . ' | Sentra Essential',
                    'meta_description' => $product['short_description'],
                ]
            );
        }
    }
}
