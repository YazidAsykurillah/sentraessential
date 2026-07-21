<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PageSeo;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $pageSeo = PageSeo::where('page_key', 'home')->where('is_active', true)->first();

        $posts = Post::query()
            ->where('status', 'published')
            ->latest()
            ->take(6)
            ->get();

        $featuredProducts = Product::where('status', 'published')
            ->where('is_featured', true)
            ->orderBy('indonesian_name')
            ->take(4)
            ->get();

        return view('frontend.home.index', compact('posts', 'pageSeo', 'featuredProducts'));
    }
}
