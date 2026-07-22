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
                'indonesian_name' => 'Minyak Atsiri Daun Cengkeh',
                'english_name' => 'Clove Leaf Essential Oil',
                'botanical_name' => 'Syzygium aromaticum',
                'short_description' => 'Minyak daun cengkeh berkualitas tinggi yang diekstraksi secara presisi. Sangat ideal untuk industri farmasi dan kesehatan.',
                'description' => '<p>Minyak Daun Cengkeh kami diekstrak dari daun cengkeh pilihan. Mengandung Eugenol yang tinggi yang sangat berguna dalam bidang farmasi dan kesehatan sebagai analgesik dan antibakteri alami.</p>',
                'is_featured' => true,
                'status' => 'published',
            ],
            [
                'indonesian_name' => 'Minyak Atsiri Bunga Cengkeh',
                'english_name' => 'Clove Bud EssentialOil',
                'botanical_name' => 'Syzygium aromaticum',
                'short_description' => 'Minyak bunga cengkeh murni dengan aroma khas yang manis dan pedas. Sering digunakan pada parfum dan aromaterapi.',
                'description' => '<p>Minyak Bunga Cengkeh diekstrak langsung dari kuncup bunga cengkeh pilihan. Aromanya lebih halus, manis, dan kaya dibandingkan minyak daun cengkeh, menjadikannya pilihan favorit untuk aromaterapi, perawatan gigi, dan parfum berkualitas tinggi.</p>',
                'is_featured' => true,
                'status' => 'published',
            ],
            [
                'indonesian_name' => 'Minyak Atsiri Jahe',
                'english_name' => 'Ginger Essential Oil',
                'botanical_name' => 'Zingiber officinale',
                'short_description' => 'Minyak jahe berkualitas premium dengan aroma hangat dan pedas. Ideal untuk aplikasi farmasi, makanan, dan minuman.',
                'description' => '<p>Minyak Jahe diekstrak melalui proses destilasi uap rimpang jahe segar. Banyak dimanfaatkan pada industri makanan, minuman, serta kesehatan karena aromanya yang khas dan manfaat terapetiknya.</p>',
                'is_featured' => true,
                'status' => 'published',
            ],
            [
                'indonesian_name' => 'Minyak Atsiri Daun Sirih',
                'english_name' => 'Betel Leaf Essential Oil',
                'botanical_name' => 'Piper betle',
                'short_description' => 'Minyak daun sirih murni dengan khasiat antiseptik kuat, sangat cocok untuk produk kebersihan dan perawatan kulit.',
                'description' => '<p>Minyak Daun Sirih dihasilkan melalui proses distilasi daun sirih segar. Dikenal memiliki sifat antibakteri dan antijamur yang sangat kuat, minyak ini sering digunakan dalam formulasi sabun, pasta gigi, dan produk antiseptik alami.</p>',
                'is_featured' => true,
                'status' => 'published',
            ],
            [
                'indonesian_name' => 'Minyak Atsiri Sereh Wangi',
                'english_name' => 'Citronella Essential Oil',
                'botanical_name' => 'Cymbopogon nardus',
                'short_description' => 'Minyak sereh wangi murni dengan aroma segar dan kuat. Cocok untuk industri pembersih, kosmetik, dan aromaterapi.',
                'description' => '<p>Minyak Sereh Wangi (Citronella Oil) adalah salah satu jenis minyak atsiri yang paling banyak digunakan di seluruh dunia. Dikenal karena sifat anti-serangga alami dan aromanya yang menyegarkan.</p>',
                'is_featured' => true,
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
