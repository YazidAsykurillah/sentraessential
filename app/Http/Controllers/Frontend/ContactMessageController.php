<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageSeo;

class ContactMessageController extends Controller
{
    public function index()
    {
        $pageSeo = PageSeo::where('page_key', 'contact')->where('is_active', true)->first();
        return view('frontend.contact.index', compact('pageSeo'));
    }

    public function store(Request $request)
    {
        // Honeypot spam protection check
        if (!empty($request->input('phone_number_ext'))) {
            // Logically it's spam, we just redirect back silently
            return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim! Kami akan segera menghubungi Anda.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:30',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        \App\Models\ContactMessage::create($validated);

        return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim! Kami akan segera menghubungi Anda.');
    }
}
