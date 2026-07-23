<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PageSeo;

class BlogController extends Controller
{
    public function index()
    {
        $pageSeo = PageSeo::where('page_key', 'blogs')->where('is_active', true)->first();
        
        $posts = Post::with(['category', 'tags'])
                    ->where('status', 'published')
                    ->where('published_at', '<=', now())
                    ->orderBy('published_at', 'desc')
                    ->paginate(12);
        
        return view('frontend.blogs.index', compact('pageSeo', 'posts'));
    }

    public function show(Post $post)
    {
        if ($post->status !== 'published' || $post->published_at > now()) {
            abort(404);
        }

        $post->load(['category', 'tags', 'author']);

        $pageSeo = new PageSeo();
        $pageSeo->seo_title = $post->meta_title ?: $post->title . ' - Sentra Essential';
        $pageSeo->seo_description = $post->meta_description ?: $post->excerpt;

        return view('frontend.blogs.show', compact('post', 'pageSeo'));
    }
}
