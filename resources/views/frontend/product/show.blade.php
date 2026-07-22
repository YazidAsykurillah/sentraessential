@extends('frontend.layouts.app')

@section('content')

{{-- Breadcrumb & Hero Header --}}
<section class="bg-surface-alt pt-10 pb-6 border-b border-border">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <nav class="flex text-sm text-dark/60 mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('home') }}" class="inline-flex items-center hover:text-accent transition-colors">
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-dark/40 mx-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <a href="{{ route('products.index') }}" class="hover:text-accent transition-colors">Produk</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-dark/40 mx-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="text-dark font-medium">{{ $product->indonesian_name }}</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
</section>

{{-- Product Detail Section --}}
<section class="bg-white py-12 md:py-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">
            
            {{-- Product Image --}}
            <div class="relative w-full aspect-square md:aspect-[4/3] lg:aspect-square rounded-3xl overflow-hidden bg-surface border border-border/50 reveal">
                <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://placehold.co/800x600/e2e8f0/475569?text=' . urlencode($product->english_name) }}" class="w-full h-full object-cover" alt="{{ $product->english_name }}">
                @if($product->is_featured)
                <div class="absolute top-4 left-4">
                    <span class="bg-accent text-white text-xs font-bold uppercase tracking-wider px-3 py-1.5 rounded-full shadow-sm">Featured</span>
                </div>
                @endif
            </div>

            {{-- Product Details --}}
            <div class="flex flex-col reveal reveal-delay-1">
                
                {{-- Titles --}}
                <div class="mb-6">
                    <h1 class="font-heading text-3xl md:text-4xl lg:text-5xl font-bold text-dark leading-tight mb-2">
                        {{ $product->indonesian_name }}
                    </h1>
                    <p class="text-lg md:text-xl text-dark/80 font-medium mb-1">{{ $product->english_name }}</p>
                    @if($product->botanical_name)
                    <p class="text-sm font-semibold text-dark/60 uppercase tracking-wider italic">({{ $product->botanical_name }})</p>
                    @endif
                </div>

                {{-- Badges --}}
                <div class="flex flex-wrap gap-2 mb-8">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-botanical-muted text-botanical rounded-full text-xs font-semibold">
                        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"/></svg>
                        100% Murni
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-earth-muted text-earth rounded-full text-xs font-semibold">
                        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 2v2.789a4 4 0 0 1-.672 2.219l-4.73 7.096A4 4 0 0 0 7.001 20h9.998a4 4 0 0 0 3.322-6.236l-4.728-7.097A4 4 0 0 1 15 4.45V2"/><path d="M7 2h10"/><path d="M5.5 15h13"/></svg>
                        Lab-Verified
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-amber-50 text-amber-700 rounded-full text-xs font-semibold">
                        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                        Supply Industri
                    </span>
                </div>

                {{-- Short Description --}}
                <div class="prose prose-dark max-w-none mb-10">
                    <p class="text-base text-dark/80 leading-relaxed">
                        {{ $product->short_description }}
                    </p>
                </div>

                {{-- CTA --}}
                <div class="mt-auto bg-surface p-6 rounded-2xl border border-border/50">
                    <h3 class="font-heading text-lg font-bold text-dark mb-2">Pesan Untuk Industri</h3>
                    <p class="text-sm text-dark/70 mb-5">Dapatkan penawaran khusus untuk pembelian skala besar atau rutin.</p>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('contact') }}" class="btn-primary w-full sm:w-auto text-center justify-center">
                            Minta Penawaran
                        </a>
                        <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20dengan%20{{ urlencode($product->indonesian_name) }}" target="_blank" rel="noopener noreferrer" class="btn-outline w-full sm:w-auto text-center justify-center border-[#25D366] text-[#25D366] hover:bg-[#25D366] hover:text-white">
                            <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                            Tanya WhatsApp
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- Detailed Description Section --}}
@if($product->description)
<section class="bg-light py-16 md:py-24 border-t border-border/50">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
        <h2 class="font-heading text-2xl md:text-3xl font-bold text-dark mb-8 pb-4 border-b border-border/50">Deskripsi Lengkap</h2>
        <div class="prose prose-sm prose-dark prose-headings:font-heading prose-headings:font-bold prose-a:text-accent prose-img:rounded-2xl max-w-none">
            {!! $product->description !!}
        </div>
    </div>
</section>
@endif

@endsection
