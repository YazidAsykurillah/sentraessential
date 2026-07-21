<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageSeo;

class ProductController extends Controller
{
    public function index()
    {
        $pageSeo = PageSeo::where('page_key', 'product')->where('is_active', true)->first();
        return view('frontend.product.index', compact('pageSeo'));
    }
}
