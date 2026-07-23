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
            ],
            [
                'title' => 'Manfaat Minyak Sereh Wangi (Citronella Oil) untuk Pembersih Rumah Tangga',
                'excerpt' => 'Minyak sereh wangi sebagai disinfektan dan pengusir serangga alami.',
                'content' => '<p>Industri produk kebersihan semakin beralih pada bahan alami. Minyak sereh wangi (Citronella) memiliki sifat antibakteri sekaligus bertindak sebagai repelan alami terhadap serangga, menjadikannya bahan baku ideal untuk cairan pembersih lantai dan ruangan.</p>',
                'meta_title' => 'Manfaat Minyak Sereh Wangi (Citronella Oil) Pembersih',
                'meta_description' => 'Ketahui efektivitas Minyak Sereh Wangi atau Citronella Oil sebagai agen antibakteri dan anti-nyamuk pada formulasi produk pembersih rumah tangga.',
            ],
            [
                'title' => 'Mengenal Minyak Pala (Nutmeg Oil) dan Kegunaannya di Industri Makanan',
                'excerpt' => 'Minyak pala memberikan profil rasa yang khas untuk industri makanan dan minuman.',
                'content' => '<p>Minyak pala Indonesia sangat diminati di pasar Eropa dan Amerika. Selain untuk industri kosmetik, minyak ini banyak digunakan sebagai perisa alami (flavoring agent) pada produk makanan panggang, minuman ringan, dan sirup.</p>',
                'meta_title' => 'Kegunaan Minyak Pala (Nutmeg Oil) di Industri',
                'meta_description' => 'Pelajari karakteristik Minyak Pala (Nutmeg Oil) dan aplikasinya yang luas dalam industri makanan (F&B) serta industri kosmetik global.',
            ],
            [
                'title' => 'Cara Distilasi Uap pada Pembuatan Minyak Cengkeh',
                'excerpt' => 'Teknik penyulingan uap yang optimal untuk mengekstrak minyak daun cengkeh (Clove Leaf Oil).',
                'content' => '<p>Distilasi uap (Steam Distillation) adalah metode paling umum dalam mengekstraksi minyak cengkeh. Kontrol tekanan dan suhu sangat menentukan tingginya kadar Eugenol yang terekstrak dari daun maupun gagang cengkeh.</p>',
                'meta_title' => 'Proses Distilasi Uap Minyak Cengkeh (Clove Oil)',
                'meta_description' => 'Memahami metode ekstraksi distilasi uap (Steam Distillation) pada produksi Minyak Cengkeh untuk menghasilkan Eugenol berkualitas tinggi.',
            ],
            [
                'title' => 'Peluang Ekspor Minyak Vetiver (Akar Wangi) Indonesia',
                'excerpt' => 'Menakar potensi dan permintaan Minyak Akar Wangi di industri parfum dunia.',
                'content' => '<p>Minyak Vetiver asal Garut terkenal memiliki kualitas terbaik di dunia karena aroma woody dan earthy yang dalam. Minyak ini digunakan sebagai fiksatif alami pada parfum kelas atas (fine fragrances) karena kemampuannya mengikat aroma agar tahan lama.</p>',
                'meta_title' => 'Peluang Ekspor Minyak Vetiver Akar Wangi',
                'meta_description' => 'Eksplorasi potensi ekspor Minyak Vetiver (Akar Wangi) dari Indonesia yang bernilai tinggi sebagai fiksatif alami di industri parfum internasional.',
            ],
            [
                'title' => 'Aplikasi Minyak Peppermint untuk Produk Kesehatan Mulut',
                'excerpt' => 'Mengapa menthol alami dari peppermint selalu menjadi pilihan untuk pasta gigi dan mouthwash.',
                'content' => '<p>Minyak peppermint memberikan sensasi dingin dan segar yang bertahan lama berkat kandungan Menthol alaminya. Selain itu, sifat antiseptiknya sangat efektif dalam melawan bakteri penyebab bau mulut dan masalah gusi.</p>',
                'meta_title' => 'Aplikasi Minyak Peppermint untuk Kesehatan Mulut',
                'meta_description' => 'Ketahui mengapa Minyak Peppermint merupakan bahan baku esensial dalam formulasi produk oral care seperti pasta gigi dan obat kumur.',
            ],
            [
                'title' => 'Panduan Penyimpanan Minyak Atsiri Skala Industri',
                'excerpt' => 'Cara menyimpan minyak atsiri dalam drum besar agar kualitasnya tidak menurun.',
                'content' => '<p>Minyak atsiri sangat sensitif terhadap cahaya, panas, dan oksigen. Penyimpanan dalam drum besi berlapis epoxy atau drum plastik HDPE pada suhu ruang yang terkontrol sangat penting untuk mencegah oksidasi dan polimerisasi.</p>',
                'meta_title' => 'Panduan Penyimpanan Minyak Atsiri Skala Industri',
                'meta_description' => 'Prosedur standar penyimpanan (storage) minyak atsiri dalam jumlah besar untuk mencegah degradasi kualitas akibat panas, cahaya, dan oksidasi.',
            ],
            [
                'title' => 'Peran Minyak Lavender dalam Produk Aromaterapi',
                'excerpt' => 'Efektivitas Lavender Oil dalam meredakan stres dan meningkatkan kualitas tidur.',
                'content' => '<p>Minyak Lavender merupakan salah satu essential oil paling populer di pasar aromaterapi. Senyawa Linalool dan Linalyl Acetate yang dominan di dalamnya terbukti secara klinis dapat menurunkan tingkat kecemasan dan memperbaiki insomnia.</p>',
                'meta_title' => 'Peran Minyak Lavender dalam Aromaterapi',
                'meta_description' => 'Manfaat terapeutik Minyak Lavender (Lavender Essential Oil) dalam formulasi produk aromaterapi untuk relaksasi dan mengatasi insomnia.',
            ],
            [
                'title' => 'Minyak Kayu Putih (Cajuput Oil) dan Khasiat Pengobatannya',
                'excerpt' => 'Bahan aktif Cineole pada kayu putih yang bermanfaat bagi sistem pernapasan.',
                'content' => '<p>Minyak Kayu Putih telah lama menjadi obat tradisional andalan. Kadar 1,8-Cineole yang tinggi berfungsi sebagai ekspektoran dan dekongestan alami yang ampuh meredakan gejala flu dan masuk angin.</p>',
                'meta_title' => 'Minyak Kayu Putih Cajuput Oil untuk Kesehatan',
                'meta_description' => 'Kandungan Sineol dalam Minyak Kayu Putih (Cajuput Oil) dan pemanfaatannya dalam formulasi obat-obatan topikal pereda flu dan masuk angin.',
            ],
            [
                'title' => 'Mengapa Sertifikasi Organik Penting untuk Ekspor?',
                'excerpt' => 'Meningkatkan nilai jual minyak atsiri dengan memenuhi standar organik global.',
                'content' => '<p>Pasar Amerika Serikat (USDA Organic) dan Eropa (EU Organic) semakin ketat mensyaratkan produk bebas pestisida dan pupuk kimia sintetis. Memiliki sertifikasi organik dapat melipatgandakan margin keuntungan produk minyak atsiri Anda.</p>',
                'meta_title' => 'Pentingnya Sertifikasi Organik Minyak Atsiri',
                'meta_description' => 'Bagaimana sertifikasi organik meningkatkan daya saing dan nilai jual minyak atsiri di pasar ekspor Eropa dan Amerika Serikat.',
            ],
            [
                'title' => 'Potensi Minyak Kenanga (Cananga Oil) di Pasar Global',
                'excerpt' => 'Alternatif yang lebih ekonomis dari Ylang-ylang untuk industri wewangian.',
                'content' => '<p>Minyak Kenanga sering disebut sebagai alternatif Ylang-Ylang (Bunga Kantil) karena memiliki profil aroma floral yang mirip namun dengan harga yang lebih terjangkau, menjadikannya favorit untuk industri sabun mandi dan deterjen.</p>',
                'meta_title' => 'Potensi Minyak Kenanga Cananga Oil',
                'meta_description' => 'Peluang pemanfaatan Minyak Kenanga (Cananga Oil) sebagai komponen fragrance alami yang ekonomis dalam formulasi produk personal care.',
            ],
            [
                'title' => 'Inovasi Ekstraksi dengan Metode Supercritical CO2',
                'excerpt' => 'Teknologi modern ekstraksi tanpa pelarut sisa untuk kualitas premium.',
                'content' => '<p>Metode Ekstraksi Cairan Superkritis (SFE) menggunakan Karbon Dioksida menghasilkan ekstrak murni tanpa residu pelarut (solvent-free). Metode ini menjaga senyawa aktif yang sensitif terhadap panas agar tidak rusak, menghasilkan kualitas ekstrak tingkat tinggi.</p>',
                'meta_title' => 'Ekstraksi Minyak Atsiri Supercritical CO2',
                'meta_description' => 'Keunggulan teknologi Supercritical CO2 Extraction dalam menghasilkan essential oil premium bebas residu pelarut dan tahan panas.',
            ],
            [
                'title' => 'Menjaga Kestabilan Aroma Minyak Lemon',
                'excerpt' => 'Tantangan penggunaan citrus oils yang mudah teroksidasi pada produk minuman.',
                'content' => '<p>Minyak Lemon kaya akan d-Limonene yang sangat mudah teroksidasi saat terpapar udara. Teknik deterpenisasi atau pembentukan emulsi sangat penting dalam formulasi rasa (flavor) minuman agar tidak timbul rasa pahit (off-flavor) saat masa simpan (shelf-life).</p>',
                'meta_title' => 'Kestabilan Aroma Minyak Lemon (Lemon Oil)',
                'meta_description' => 'Tips memformulasikan Minyak Lemon pada produk minuman agar aromanya stabil, tidak mudah teroksidasi, dan mencegah timbulnya rasa pahit.',
            ],
            [
                'title' => 'Manfaat Minyak Jahe (Ginger Oil) untuk Terapi Nyeri',
                'excerpt' => 'Sifat analgesik dan anti-inflamasi jahe untuk formulasi balsam dan minyak urut.',
                'content' => '<p>Gingerol dan Zingiberene dalam Minyak Jahe memberikan efek hangat yang menembus jaringan otot. Industri farmasi memanfaatkannya untuk produk salep (ointment), balsam, maupun patch pereda nyeri sendi dan otot.</p>',
                'meta_title' => 'Manfaat Minyak Jahe Ginger Oil untuk Nyeri Otot',
                'meta_description' => 'Aplikasi Minyak Jahe (Ginger Essential Oil) sebagai bahan aktif alami pereda nyeri dan peradangan otot dalam industri farmakologi.',
            ],
            [
                'title' => 'Tren Natural Fragrance: Beralih dari Pewangi Sintetis',
                'excerpt' => 'Permintaan konsumen akan produk bebas paraben dan pewangi kimia buatan.',
                'content' => '<p>Kesadaran akan alergi dan gangguan endokrin dari pewangi sintetis mendorong brand kosmetik beralih ke "100% Natural Fragrance". Ini menciptakan permintaan masif akan campuran minyak atsiri (essential oil blends) yang aman bagi kulit sensitif.</p>',
                'meta_title' => 'Tren Natural Fragrance di Industri Kosmetik',
                'meta_description' => 'Pergeseran tren industri kosmetik dari pewangi buatan menuju Natural Fragrance berbahan dasar minyak atsiri murni yang lebih ramah kulit.',
            ],
            [
                'title' => 'Standar Mutu SNI untuk Minyak Serai Dapur (Lemongrass Oil)',
                'excerpt' => 'Karakteristik standar minyak serai dapur yang disyaratkan oleh pemerintah.',
                'content' => '<p>Minyak Serai Dapur (Lemongrass) memiliki aroma citrus yang tajam karena tingginya kandungan Citral. Standar Nasional Indonesia (SNI) mewajibkan batas minimum Citral untuk menjamin kualitas pengawet maupun flavoring agent pada produk pangan.</p>',
                'meta_title' => 'Standar SNI Minyak Serai Dapur Lemongrass Oil',
                'meta_description' => 'Mengenal parameter kualitas SNI Minyak Serai Dapur (Lemongrass Essential Oil) berdasarkan persentase kandungan Citral alaminya.',
            ],
            [
                'title' => 'Proses Fraksinasi Minyak Nilam untuk Kadar PA Tinggi',
                'excerpt' => 'Teknologi pemisahan untuk menghasilkan Minyak Nilam berkualitas ekspor.',
                'content' => '<p>Jika kadar Patchouli Alcohol (PA) belum memenuhi standar 30%, minyak dapat diproses melalui kolom distilasi fraksinasi vakum tinggi. Proses ini membuang fraksi ringan yang bau apek (earthy/muddy) dan memusatkan senyawa PA-nya.</p>',
                'meta_title' => 'Fraksinasi Minyak Nilam untuk Patchouli Alcohol',
                'meta_description' => 'Teknologi distilasi fraksinasi vakum untuk meningkatkan persentase Patchouli Alcohol (PA) pada Minyak Nilam agar memenuhi spesifikasi ekspor.',
            ],
            [
                'title' => 'Minyak Cendana (Sandalwood Oil): Si Emas Cair dari Timur',
                'excerpt' => 'Sejarah, proses panen, dan nilai fantastis minyak cendana di pasar dunia.',
                'content' => '<p>Pohon Cendana (Santalum album) membutuhkan waktu puluhan tahun sebelum inti kayunya menghasilkan minyak beraroma manis dan kayu yang ikonik. Kelangkaannya membuat harga essential oil ini bisa menyentuh ribuan dolar per liternya.</p>',
                'meta_title' => 'Minyak Cendana Sandalwood Oil Emas Cair',
                'meta_description' => 'Menelusuri sejarah, kualitas Santalol, dan tingginya nilai ekonomi Minyak Cendana murni di industri parfum mewah.',
            ],
            [
                'title' => 'Kiat Memilih Pemasok Minyak Atsiri Terpercaya di Indonesia',
                'excerpt' => 'Pastikan rantai pasok yang transparan dan hasil uji lab CoA yang valid.',
                'content' => '<p>Memilih supplier atsiri (Essential Oil Bulk Supplier) membutuhkan kehati-hatian. Pabrikan harus meminta dokumen Certificate of Analysis (CoA), Gas Chromatography (GC-MS), serta Material Safety Data Sheet (MSDS) untuk memastikan tidak ada pemalsuan (adulteration).</p>',
                'meta_title' => 'Cara Memilih Pemasok Supplier Minyak Atsiri',
                'meta_description' => 'Panduan B2B dalam memilih supplier minyak atsiri terpercaya melalui validasi dokumen CoA, MSDS, dan hasil uji lab GC-MS yang akurat.',
            ],
            [
                'title' => 'Penggunaan Minyak Kayu Manis (Cinnamon Oil) sebagai Pengawet',
                'excerpt' => 'Sifat antimikroba Cinnamaldehyde untuk memperpanjang umur simpan pangan.',
                'content' => '<p>Minyak Kulit Kayu Manis mengandung Cinnamaldehyde yang sangat efektif menghambat pertumbuhan jamur dan bakteri pembusuk. Banyak industri mulai menggunakannya sebagai pengawet alami alternatif untuk menggantikan bahan pengawet sintetis pada makanan.</p>',
                'meta_title' => 'Minyak Kayu Manis Cinnamon Oil Pengawet Alami',
                'meta_description' => 'Aplikasi Minyak Kayu Manis sebagai bahan aktif antibakteri dan antijamur untuk pengawet alami organik di industri makanan.',
            ],
            [
                'title' => 'Perbedaan Essential Oil, Fragrance Oil, dan Flavoring Extract',
                'excerpt' => 'Jangan salah pilih bahan baku! Kenali perbedaan masing-masing aromatik.',
                'content' => '<p>Seringkali formulator pemula tertukar antara Essential Oil (100% alami dari tanaman), Fragrance Oil (minyak pewangi buatan sintetis), dan Flavor Extact (ekstrak perisa untuk makanan). Memahami perbedaan ini krusial untuk sertifikasi produk BPOM atau FDA.</p>',
                'meta_title' => 'Beda Essential Oil, Fragrance Oil, Flavor Extract',
                'meta_description' => 'Penjelasan rinci mengenai perbedaan antara Essential Oil alami, Fragrance Oil sintetis, dan Flavor Extract untuk industri kosmetik dan F&B.',
            ],
            [
                'title' => 'Dampak Perubahan Iklim terhadap Kualitas Panen Tanaman Atsiri',
                'excerpt' => 'Bagaimana curah hujan yang ekstrem memengaruhi yield dan profil aroma.',
                'content' => '<p>Perubahan pola musim di Indonesia sangat berdampak pada kandungan senyawa bioaktif tanaman atsiri. Curah hujan yang terlalu tinggi pada masa panen Cengkeh atau Nilam dapat menurunkan "yield" minyak dan mendilusi profil aromanya secara signifikan.</p>',
                'meta_title' => 'Dampak Perubahan Iklim pada Panen Atsiri',
                'meta_description' => 'Analisis pengaruh perubahan iklim dan curah hujan terhadap yield penyulingan serta profil kimia kualitas minyak atsiri di Indonesia.',
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
