<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageSeo;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $pageSeo = PageSeo::where('page_key', 'product')->where('is_active', true)->first();
        $products = Product::where('status', 'published')->orderBy('indonesian_name')->get();
        return view('frontend.product.index', compact('pageSeo', 'products'));
    }
    public function show(Product $product)
    {
        if ($product->status !== 'published') {
            abort(404);
        }

        $pageSeo = new PageSeo();
        $pageSeo->seo_title = $product->meta_title ?: $product->indonesian_name . ' - Sentra Essential';
        $pageSeo->seo_description = $product->meta_description ?: $product->short_description;

        return view('frontend.product.show', compact('product', 'pageSeo'));
    }
}
