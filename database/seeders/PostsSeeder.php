<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Str;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();
        if (!$user) {
            return;
        }

        $categories = Category::all();
        $tags = Tag::all();

        if ($categories->isEmpty() || $tags->isEmpty()) {
            return;
        }

        $posts = [
            [
                'title' => 'Panduan Memilih Minyak Atsiri Kualitas Terbaik untuk Produk Kosmetik',
                'excerpt' => 'Mengetahui standar kualitas minyak atsiri yang aman dan sesuai untuk kebutuhan industri kosmetik.',
                'content' => '<p>Industri kosmetik membutuhkan bahan baku dengan standar kemurnian tinggi. Penggunaan minyak atsiri dalam kosmetik tidak hanya memberikan aroma alami, tetapi juga manfaat aktif bagi kulit. Dalam artikel ini, kita akan membahas cara memilih pemasok minyak atsiri yang tepat untuk skala manufaktur.</p>',
                'meta_title' => 'Panduan Memilih Minyak Atsiri untuk Kosmetik',
                'meta_description' => 'Pelajari cara memilih minyak atsiri berkualitas tinggi yang aman digunakan sebagai bahan baku industri kosmetik dan skincare.',
            ],
            [
                'title' => 'Standar Ekspor Minyak Nilam (Patchouli Oil) dari Indonesia',
                'excerpt' => 'Memahami spesifikasi teknis dan standar kualitas ekspor untuk Minyak Nilam murni.',
                'content' => '<p>Indonesia adalah salah satu pemasok utama Minyak Nilam (Patchouli Oil) di dunia. Tingginya kadar Patchouli Alcohol (PA) menjadi indikator utama kualitas dari minyak ini. Artikel ini membahas standar parameter fisik dan kimia yang harus dipenuhi untuk pasar global.</p>',
                'meta_title' => 'Standar Kualitas Ekspor Minyak Nilam (Patchouli Oil)',
                'meta_description' => 'Pahami spesifikasi teknis dan standar ekspor Minyak Nilam murni dari Indonesia untuk kebutuhan industri parfum dan farmasi.',
            ],
            [
                'title' => 'Tren Penggunaan Essential Oil dalam Industri Farmasi Modern',
                'excerpt' => 'Bagaimana perusahaan farmasi mulai mengintegrasikan bahan aktif dari ekstrak tumbuhan.',
                'content' => '<p>Minyak atsiri kini semakin diakui dalam industri farmasi karena sifat antimikroba, anti-inflamasi, dan analgesik alaminya. Senyawa seperti Eugenol dari Cengkeh atau Cineole dari Eucalyptus kini banyak diformulasikan ke dalam obat-obatan modern.</p>',
                'meta_title' => 'Penggunaan Essential Oil di Industri Farmasi',
                'meta_description' => 'Eksplorasi tren penggunaan minyak atsiri dan senyawa aktif alami dalam formulasi produk farmasi dan kesehatan.',
            ]
        ];

        foreach ($posts as $postData) {
            $post = Post::create([
                'user_id' => $user->id,
                'category_id' => $categories->random()->id,
                'title' => $postData['title'],
                'slug' => Str::slug($postData['title']),
                'excerpt' => $postData['excerpt'],
                'content' => $postData['content'],
                'status' => 'published',
                'published_at' => now(),
                'meta_title' => $postData['meta_title'],
                'meta_description' => $postData['meta_description'],
            ]);

            // Attach 1 to 3 random tags
            $post->tags()->attach(
                $tags->random(rand(1, min(3, $tags->count())))->pluck('id')->toArray()
            );
        }
    }
}
