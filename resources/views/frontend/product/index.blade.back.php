@extends('frontend.layouts.app')

@section('content')

{{-- Hero Section --}}
<section class="bg-surface-alt py-16 md:py-24 relative overflow-hidden border-b border-border">
    <div class="absolute inset-0 hero-pattern opacity-5"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-white rounded-full border border-border shadow-sm mb-6">
                <div class="w-2 h-2 bg-botanical rounded-full"></div>
                <span class="text-xs font-medium text-dark tracking-wide uppercase">Produk Kami</span>
            </div>
            <h1 class="font-heading text-4xl md:text-5xl font-bold text-dark leading-tight tracking-tight mb-6">
                Koleksi Minyak Atsiri <span class="text-botanical">Kualitas Premium</span>
            </h1>
            <p class="text-base text-dark/80 leading-relaxed">
                Temukan berbagai pilihan minyak atsiri murni 100% dari sumber terbaik di Indonesia. Kami menjamin kualitas dan kemurnian setiap tetes produk kami.
            </p>
        </div>
    </div>
</section>

{{-- Product Grid --}}
<section class="bg-light py-20 md:py-28">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            @forelse($products as $product)
            <div class="product-card p-6 cursor-pointer reveal flex flex-col relative">
                <div class="relative w-full aspect-square mb-5 rounded-2xl overflow-hidden bg-surface group">
                    <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://placehold.co/800x600/e2e8f0/475569?text=' . urlencode($product->english_name) }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" alt="{{ $product->english_name }}">
                </div>
                <div class="mb-2">
                    <h3 class="font-heading text-md font-bold text-dark mb-1">{{ $product->indonesian_name }}</h3>
                    <span class="block text-sm font-medium text-dark/80">{{ $product->english_name }}</span>
                </div>
                @if($product->botanical_name)
                <span class="block text-xs font-semibold text-dark/70 uppercase tracking-wider italic mb-4">({{ $product->botanical_name }})</span>
                @else
                <span class="block text-xs font-semibold text-transparent uppercase tracking-wider italic mb-4">-</span>
                @endif
                
                @if($product->price)
                <div class="mb-4">
                    <span class="text-lg font-bold text-accent">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                    @if($product->price_unit)
                    <span class="text-xs text-dark/60 font-medium">/ {{ $product->price_unit }}</span>
                    @endif
                </div>
                @endif
                <p class="text-sm text-dark leading-relaxed mb-6">
                    {{ $product->short_description }}
                </p>
                <div class="mt-auto pt-4 border-t border-border">
                    <a href="{{ route('product.show', $product->slug) }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-accent hover:text-accent-light transition-colors group before:absolute before:inset-0 before:z-10">
                        Lihat Detail Produk
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-dark/70">Belum ada produk yang tersedia.</p>
            </div>
            @endforelse

        </div>

    </div>
</section>

{{-- CTA Section --}}
<section class="bg-dark">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20 md:py-28">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="font-heading text-3xl md:text-4xl font-bold text-white leading-tight mb-6">
                Tidak Menemukan Produk Yang Anda Cari?
            </h2>
            <p class="text-base text-white/80 leading-relaxed mb-10 max-w-2xl mx-auto">
                Kami memiliki jaringan luas dengan petani atsiri di seluruh Indonesia. Hubungi kami untuk mendiskusikan kebutuhan spesifik bahan baku atsiri Anda.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="btn-primary !bg-primary hover:!bg-primary-light">
                    Konsultasi Kebutuhan
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
