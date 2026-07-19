<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageSeo;

class AboutController extends Controller
{
    public function index()
    {
        $pageSeo = PageSeo::where('page_key', 'about')->where('is_active', true)->first();

        return view('frontend.about.index', compact('pageSeo'));
    }
}
