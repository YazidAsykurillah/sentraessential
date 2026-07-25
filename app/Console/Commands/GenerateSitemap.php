<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Post;
use App\Models\Product;
use App\Models\PageSeo;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Generating sitemap...');

        $sitemap = Sitemap::create();

        // Add Active Static Pages
        PageSeo::where('is_active', true)->get()->each(function (PageSeo $pageSeo) use ($sitemap) {
            $path = $pageSeo->slug === '/' ? '/' : '/' . ltrim($pageSeo->slug, '/');
            $sitemap->add(
                Url::create(url($path))
                    ->setLastModificationDate($pageSeo->updated_at)
                    ->setPriority(0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );
        });

        // Add Active Products
        Product::where('status', 'published')->get()->each(function (Product $product) use ($sitemap) {
            $sitemap->add(
                Url::create(route('product.show', $product->slug))
                    ->setLastModificationDate($product->updated_at)
                    ->setPriority(0.8)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            );
        });

        // Add Published Posts
        Post::where('status', 'published')->get()->each(function (Post $post) use ($sitemap) {
            $sitemap->add(
                Url::create(route('blogs.show', $post->slug))
                    ->setLastModificationDate($post->updated_at)
                    ->setPriority(0.7)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            );
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');
    }
}
