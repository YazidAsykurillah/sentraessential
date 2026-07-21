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
            <p class="text-lg text-dark/70 leading-relaxed">
                Temukan berbagai pilihan minyak atsiri murni 100% dari sumber terbaik di Indonesia. Kami menjamin kualitas dan kemurnian setiap tetes produk kami.
            </p>
        </div>
    </div>
</section>

{{-- Product Grid --}}
<section class="bg-light py-20 md:py-28">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            {{-- Product Item 1 --}}
            <div class="product-card p-6 cursor-pointer reveal flex flex-col">
                <div class="relative w-full aspect-square mb-5 rounded-2xl overflow-hidden bg-surface group">
                    <img src="https://placehold.co/800x600/e2e8f0/475569?text=Citronella+Oil" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" alt="Citronella Oil">
                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-botanical shadow-sm border border-border">
                        Best Seller
                    </div>
                </div>
                <h3 class="font-heading text-lg font-bold text-dark mb-2">Citronella Oil</h3>
                <p class="text-sm text-dark leading-relaxed mb-6">
                    Minyak sereh wangi murni dengan aroma segar dan kuat. Cocok untuk industri pembersih, kosmetik, dan aromaterapi.
                </p>
                <div class="mt-auto pt-4 border-t border-border flex items-center justify-between">
                    <span class="text-xs font-semibold text-dark uppercase tracking-wider">Cymbopogon nardus</span>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-accent hover:text-accent-light transition-colors group">
                        Request
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Product Item 2 --}}
            <div class="product-card p-6 cursor-pointer reveal reveal-delay-1 flex flex-col">
                <div class="relative w-full aspect-square mb-5 rounded-2xl overflow-hidden bg-surface group">
                    <img src="https://placehold.co/800x600/e2e8f0/475569?text=Clove+Oil" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" alt="Clove Oil">
                </div>
                <h3 class="font-heading text-lg font-bold text-dark mb-2">Clove Leaf Oil</h3>
                <p class="text-sm text-dark leading-relaxed mb-6">
                    Minyak daun cengkeh berkualitas tinggi yang diekstraksi secara presisi. Sangat ideal untuk industri farmasi dan kesehatan.
                </p>
                <div class="mt-auto pt-4 border-t border-border flex items-center justify-between">
                    <span class="text-xs font-semibold text-dark uppercase tracking-wider">Syzygium aromaticum</span>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-accent hover:text-accent-light transition-colors group">
                        Request
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Product Item 3 --}}
            <div class="product-card p-6 cursor-pointer reveal reveal-delay-2 flex flex-col">
                <div class="relative w-full aspect-square mb-5 rounded-2xl overflow-hidden bg-surface group">
                    <img src="https://placehold.co/800x600/e2e8f0/475569?text=Patchouli+Oil" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" alt="Patchouli Oil">
                </div>
                <h3 class="font-heading text-lg font-bold text-dark mb-2">Patchouli Oil</h3>
                <p class="text-sm text-dark leading-relaxed mb-6">
                    Minyak nilam khas Indonesia dengan karakteristik aroma earthy yang kuat. Pilihan utama untuk industri parfum premium.
                </p>
                <div class="mt-auto pt-4 border-t border-border flex items-center justify-between">
                    <span class="text-xs font-semibold text-dark uppercase tracking-wider">Pogostemon cablin</span>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-accent hover:text-accent-light transition-colors group">
                        Request
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>

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
