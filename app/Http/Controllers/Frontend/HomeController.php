<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::query()
            ->where('status', 'published')
            ->latest()
            ->take(6)
            ->get();

        return view('frontend.home.index', compact('posts'));
    }
}
