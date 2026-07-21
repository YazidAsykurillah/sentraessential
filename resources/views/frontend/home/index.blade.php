@extends('frontend.layouts.app')

@section('content')

{{-- ============================================
     SECTION 1: HERO
     ============================================ --}}
<section class="hero-gradient relative overflow-hidden">
    {{-- Background pattern overlay --}}
    <div class="absolute inset-0 hero-pattern"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 py-16 md:py-24">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            {{-- Left Column: Content --}}
            <div class="max-w-2xl lg:col-span-7 reveal">
                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-white/10 backdrop-blur-sm rounded-full border border-white/15 mb-6">
                    <div class="w-2 h-2 bg-botanical-light rounded-full"></div>
                    <span class="text-xs font-medium text-white/80 tracking-wide uppercase">Your Trusted Supplier of Essential Oils</span>
                </div>

                <h1 class="font-heading text-5xl md:text-5xl lg:text-6xl font-bold text-white leading-[1.1] tracking-tight mb-6">
                    Supplier Minyak Atsiri <span class="text-botanical-light">Untuk Manufaktur & Exportir</span>
                </h1>

                <p class="text-base md:text-base text-white/60 leading-relaxed mb-10 max-w-xl">
                    Sentra Essential Oil adalah supplier minyak atsiri untuk industri farmasi, kosmetik, herbal, personal care dan perusahaan exportir Indonesia.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#featured-products" class="btn-primary">
                        Lihat Produk Kami
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"/>
                            <polyline points="12 5 19 12 12 19"/>
                        </svg>
                    </a>
                    <a href="{{ route('contact') }}" class="btn-outline">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/>
                            <rect x="9" y="3" width="6" height="4" rx="1"/>
                        </svg>
                        Dapatkan Sample Gratis
                    </a>
                </div>
            </div>

            {{-- Right Column: Image --}}
            <div class="relative hidden lg:block lg:col-span-5 reveal reveal-delay-2">
                {{-- Decorative background blob/border --}}
                <div class="absolute -inset-4 bg-white/5 rounded-[2rem] transform rotate-3"></div>
                
                {{-- Main Image --}}
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-white/10 aspect-[4/3] group">
                    <img src="{{ asset('images/hero_section_1.webp') }}" 
                         alt="Bulk Essential Oils Ready for Export" 
                         class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    
                    {{-- Overlay gradient for premium feel --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-dark/60 via-transparent to-transparent"></div>
                    

                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================
     SECTION 2: TRUST BADGES BAR
     ============================================ --}}
<section class="bg-white border-b border-border">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-12">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">

            <div class="trust-badge reveal">
                <div class="shrink-0 w-10 h-10 rounded-full bg-botanical-muted flex items-center justify-center">
                    <svg class="w-5 h-5 text-botanical" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"/>
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-dark">100% Pure</p>
                    <p class="text-xs text-muted mt-0.5">Tingkat Kemurnian</p>
                </div>
            </div>

            <div class="trust-badge reveal reveal-delay-1">
                <div class="shrink-0 w-10 h-10 rounded-full bg-earth-muted flex items-center justify-center">
                    <svg class="w-5 h-5 text-earth" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 2v2.789a4 4 0 0 1-.672 2.219l-4.73 7.096A4 4 0 0 0 7.001 20h9.998a4 4 0 0 0 3.322-6.236l-4.728-7.097A4 4 0 0 1 15 4.45V2"/>
                        <path d="M7 2h10"/>
                        <path d="M5.5 15h13"/>
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-dark">Lab-Verified</p>
                    <p class="text-xs text-muted mt-0.5">Pre-Shipment Samples</p>
                </div>
            </div>

            <div class="trust-badge reveal reveal-delay-2">
                <div class="shrink-0 w-10 h-10 rounded-full bg-botanical-muted flex items-center justify-center">
                    <svg class="w-5 h-5 text-botanical" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <path d="m9 12 2 2 4-4"/>
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-dark">PKP Certified</p>
                    <p class="text-xs text-muted mt-0.5">Complete Tax Documentation</p>
                </div>
            </div>

            <div class="trust-badge reveal reveal-delay-3">
                <div class="shrink-0 w-10 h-10 rounded-full bg-earth-muted flex items-center justify-center">
                    <svg class="w-5 h-5 text-earth" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-semibold text-dark">Integrated Supply</p>
                    <p class="text-xs text-muted mt-0.5">Direct Distillation Network</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================
     SECTION 3: ABOUT / COMPANY HIGHLIGHT
     ============================================ --}}
<section class="bg-light" id="about">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20 md:py-28">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            {{-- Text Content --}}
            <div class="reveal">
                <p class="text-sm font-semibold uppercase tracking-wider text-accent mb-3">About Our Company</p>
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark leading-tight section-divider mb-8">
                    Partner Kebutuhan Minyak Atsiri Anda
                </h2>
                <p class="text-base text-dark leading-relaxed mb-6">
                    Sentra Essential Oil adalah supplier minyak atsiri yang bergerak sebagai mitra pengadaan bahan baku strategis yang melayani pemenuhan kebutuhan minyak atsiri berskala industri untuk manufaktur dalam negeri (sektor farmasi, kosmetik, herbal, jamu dan produk perawatan tubuh) serta menjadi vendor pasokan volume stabil bagi perusahaan eksportir minyak atsiri di Indonesia.
                </p>
                <p class="text-base text-dark leading-relaxed mb-8">
                    Melalui pengelolaan <i>supply chain</i> yang terintegrasi dengan sentra penyulingan di berbagai daerah, kami mampu mengamankan ketersediaan produk secara berkelanjutan demi menjaga kontinuitas produksi mitra bisnis kami.
                </p>
                <a href="{{ route('about') }}" class="inline-flex items-center gap-2 text-accent font-semibold hover:gap-3 transition-all duration-200 cursor-pointer">
                    Selengkapnya Tentang Kami
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </a>
            </div>

            {{-- Visual Card --}}
            <div class="reveal reveal-delay-2">
                <div class="relative">
                    <div class="bg-white rounded-2xl border border-border p-8 md:p-10">
                        {{-- Supply Chain Illustration --}}
                        <div class="grid grid-cols-3 gap-4 mb-8">
                            <div class="text-center">
                                <div class="w-14 h-14 mx-auto mb-3 rounded-xl bg-botanical-muted flex items-center justify-center">
                                    <svg class="w-7 h-7 text-botanical" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                    </svg>
                                </div>
                                <p class="text-xs font-semibold text-dark">Sourcing</p>
                                <p class="text-[11px] text-muted">Local distillers</p>
                            </div>
                            <div class="text-center">
                                <div class="w-14 h-14 mx-auto mb-3 rounded-xl bg-earth-muted flex items-center justify-center">
                                    <svg class="w-7 h-7 text-earth" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                        <polyline points="14 2 14 8 20 8"/>
                                        <line x1="16" y1="13" x2="8" y2="13"/>
                                        <line x1="16" y1="17" x2="8" y2="17"/>
                                    </svg>
                                </div>
                                <p class="text-xs font-semibold text-dark">QC Testing</p>
                                <p class="text-[11px] text-muted">Every batch</p>
                            </div>
                            <div class="text-center">
                                <div class="w-14 h-14 mx-auto mb-3 rounded-xl bg-amber-50 flex items-center justify-center">
                                    <svg class="w-7 h-7 text-amber-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="1" y="3" width="15" height="13"/>
                                        <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/>
                                        <circle cx="5.5" cy="18.5" r="2.5"/>
                                        <circle cx="18.5" cy="18.5" r="2.5"/>
                                    </svg>
                                </div>
                                <p class="text-xs font-semibold text-dark">Delivery</p>
                                <p class="text-[11px] text-muted">To your facility</p>
                            </div>
                        </div>

                        {{-- Highlight Stats --}}
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-surface-alt rounded-xl p-4 text-center">
                                <p class="font-heading text-2xl font-bold text-botanical">4+</p>
                                <p class="text-xs text-muted mt-1">Flagship Products</p>
                            </div>
                            <div class="bg-surface-alt rounded-xl p-4 text-center">
                                <p class="font-heading text-2xl font-bold text-accent">5+</p>
                                <p class="text-xs text-muted mt-1">Industries Served</p>
                            </div>
                        </div>
                    </div>
                    {{-- Decorative dots --}}
                    <div class="absolute -top-3 -right-3 w-20 h-20 opacity-10">
                        <svg viewBox="0 0 80 80" fill="currentColor" class="text-botanical">
                            <circle cx="10" cy="10" r="3"/><circle cx="30" cy="10" r="3"/><circle cx="50" cy="10" r="3"/><circle cx="70" cy="10" r="3"/>
                            <circle cx="10" cy="30" r="3"/><circle cx="30" cy="30" r="3"/><circle cx="50" cy="30" r="3"/><circle cx="70" cy="30" r="3"/>
                            <circle cx="10" cy="50" r="3"/><circle cx="30" cy="50" r="3"/><circle cx="50" cy="50" r="3"/><circle cx="70" cy="50" r="3"/>
                            <circle cx="10" cy="70" r="3"/><circle cx="30" cy="70" r="3"/><circle cx="50" cy="70" r="3"/><circle cx="70" cy="70" r="3"/>
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================
     SECTION 4: PRODUCT PORTFOLIO
     ============================================ --}}
<section class="bg-white" id="featured-products">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20 md:py-28">

        <div class="text-center mb-14 reveal">
            <p class="text-sm font-semibold uppercase tracking-wider text-accent mb-3">Featured Products</p>
            <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark leading-tight section-divider section-divider-center">
                Produk Minyak Atsiri Unggulan
            </h2>
            <p class="text-base text-dark mt-6 max-w-2xl mx-auto">
                Berikut beberapa produk unggulan kami, setiap produk selalu melewati proses filtrasi dan standardisasi kualitas demi menjamin 100% kemurnian.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

            @forelse($featuredProducts as $product)
            <div class="product-card p-6 cursor-pointer reveal flex flex-col">
                <div class="relative w-full aspect-square mb-5 rounded-2xl overflow-hidden bg-surface group">
                    <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://placehold.co/800x600/e2e8f0/475569?text=' . urlencode($product->english_name) }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" alt="{{ $product->english_name }}">
                </div>
                <div class="mb-2">
                    <h3 class="font-heading text-lg font-bold text-dark mb-1">{{ $product->indonesian_name }}</h3>
                    <span class="block text-sm font-medium text-dark/80">{{ $product->english_name }}</span>
                </div>
                @if($product->botanical_name)
                <span class="block text-xs font-semibold text-dark/70 uppercase tracking-wider italic mb-4">({{ $product->botanical_name }})</span>
                @else
                <span class="block text-xs font-semibold text-transparent uppercase tracking-wider italic mb-4">-</span>
                @endif
                <p class="text-sm text-dark leading-relaxed mb-6">
                    {{ $product->short_description }}
                </p>
                <div class="mt-auto pt-4 border-t border-border">
                    <a href="{{ route('product.show', $product->slug) }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-accent hover:text-accent-light transition-colors group">
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
                <p class="text-dark/70">Belum ada produk unggulan.</p>
            </div>
            @endforelse

        </div>

        <div class="mt-14 text-center reveal">
            <a href="#products" class="btn-primary group">
                Lihat Semua Produk
                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>

    </div>
</section>

{{-- ============================================
     SECTION 5: WHY CHOOSE US / VALUE PROPOSITIONS
     ============================================ --}}
<section class="bg-surface-alt" id="why-us">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20 md:py-28">

        <div class="text-center mb-14 reveal">
            <p class="text-sm font-semibold uppercase tracking-wider text-accent mb-3">Why Choose Us</p>
            <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark leading-tight section-divider section-divider-center">
                Supplier Minyak Atsiri Yang Berintegritas
            </h2>
            <p class="text-base text-dark mt-6 max-w-2xl mx-auto">
                Kami mengutamakan integritas produk sebagai standar operasional tertinggi, memastikan suplai yang stabil dan kualitas terbaik bagi setiap mitra.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- Feature 1 --}}
            <div class="feature-card p-6 reveal">
                <div class="w-12 h-12 rounded-xl bg-botanical-muted flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-botanical" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                </div>
                <h3 class="font-heading text-base font-bold text-dark mb-2">Physical Filtration & QC</h3>
                <p class="text-sm text-dark leading-relaxed">
                    Kami selalu melakukan proses filtrasi fisik dan quality control yang terstandar untuk menjamin 100% kemurnian.
                </p>
            </div>

            {{-- Feature 2 --}}
            <div class="feature-card p-6 reveal reveal-delay-1">
                <div class="w-12 h-12 rounded-xl bg-earth-muted flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-earth" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                    </svg>
                </div>
                <h3 class="font-heading text-base font-bold text-dark mb-2">Pre-Shipment Sampling</h3>
                <p class="text-sm text-dark leading-relaxed">
                    Kami menyediakan sampel produk sebelum pengiriman untuk verifikasi dan persetujuan laboratorium Anda.
                </p>
            </div>

            {{-- Feature 3 --}}
            <div class="feature-card p-6 reveal reveal-delay-2">
                <div class="w-12 h-12 rounded-xl bg-amber-50 flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-amber-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="16" y1="13" x2="8" y2="13"/>
                        <line x1="16" y1="17" x2="8" y2="17"/>
                        <polyline points="10 9 9 9 8 9"/>
                    </svg>
                </div>
                <h3 class="font-heading text-base font-bold text-dark mb-2">Complete Documentation</h3>
                <p class="text-sm text-dark leading-relaxed">
                    Dokumen yang lengkap termasuk faktur pajak dan penerbitan PKP untuk transaksi yang aman.
                </p>
            </div>

            {{-- Feature 4 --}}
            <div class="feature-card p-6 reveal reveal-delay-1">
                <div class="w-12 h-12 rounded-xl bg-botanical-muted flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-botanical-light" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/>
                        <polyline points="17 6 23 6 23 12"/>
                    </svg>
                </div>
                <h3 class="font-heading text-base font-bold text-dark mb-2">Sustainable Supply Chain</h3>
                <p class="text-sm text-dark leading-relaxed">
                    Terintegrasi langsung dengan pusat distilasi di seluruh Indonesia untuk pasokan yang andal dan berkelanjutan.
                </p>
            </div>

            {{-- Feature 5 --}}
            <div class="feature-card p-6 reveal reveal-delay-2">
                <div class="w-12 h-12 rounded-xl bg-earth-muted flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-earth-light" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                    </svg>
                </div>
                <h3 class="font-heading text-base font-bold text-dark mb-2">Industrial-Scale Fulfillment</h3>
                <p class="text-sm text-dark leading-relaxed">
                    Mampu memenuhi pesanan volume besar untuk produsen dan kebutuhan volume yang stabil untuk ekspor.
                </p>
            </div>

            {{-- Feature 6 --}}
            <div class="feature-card p-6 reveal reveal-delay-3">
                <div class="w-12 h-12 rounded-xl bg-earth-muted flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-accent" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h3 class="font-heading text-base font-bold text-dark mb-2">Dedicated Partnership</h3>
                <p class="text-sm text-dark leading-relaxed">
                    Berkomitmen untuk memfasilitasi transaksi yang lancar dan menjaga kemitraan bisnis jangka panjang.
                </p>
            </div>

        </div>
    </div>
</section>

{{-- ============================================
     SECTION 6: INDUSTRIES WE SERVE
     ============================================ --}}
<section class="bg-white" id="industries">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20 md:py-28">

        <div class="grid lg:grid-cols-5 gap-10 items-start">

            {{-- Left headline --}}
            <div class="lg:col-span-2 reveal">
                <p class="text-sm font-semibold uppercase tracking-wider text-accent mb-3">Industries</p>
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark leading-tight section-divider mb-6">
                    Industri Yang Kami Layani
                </h2>
                <p class="text-base text-dark leading-relaxed">
                    Minyak atsiri kami mendukung lini produksi di sektor manufaktur utama dan perusahaan exportir di Indonesia.
                </p>
            </div>

            {{-- Industry cards grid --}}
            <div class="lg:col-span-3 grid grid-cols-2 sm:grid-cols-3 gap-4">

                <div class="industry-card p-5 text-center cursor-pointer reveal">
                    <div class="w-11 h-11 mx-auto mb-3 rounded-lg bg-white flex items-center justify-center">
                        <svg class="w-5 h-5 text-botanical" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m10.5 20.5 10-10a4.95 4.95 0 1 0-7-7l-10 10a4.95 4.95 0 1 0 7 7Z"/>
                            <path d="m8.5 8.5 7 7"/>
                        </svg>
                    </div>
                    <p class="text-sm font-semibold text-dark">Farmasi</p>
                </div>

                <div class="industry-card p-5 text-center cursor-pointer reveal reveal-delay-1">
                    <div class="w-11 h-11 mx-auto mb-3 rounded-lg bg-white flex items-center justify-center">
                        <svg class="w-5 h-5 text-accent" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/>
                            <path d="M5 3v4"/>
                            <path d="M3 5h4"/>
                        </svg>
                    </div>
                    <p class="text-sm font-semibold text-dark">Kosmetik</p>
                </div>

                <div class="industry-card p-5 text-center cursor-pointer reveal reveal-delay-2">
                    <div class="w-11 h-11 mx-auto mb-3 rounded-lg bg-white flex items-center justify-center">
                        <svg class="w-5 h-5 text-earth-light" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7 2.9 7 2.9s-2.28 6.16-3.29 7.16C2.57 11 2 12.1 2 13.25c0 2.22 1.8 4.05 4 4.05z"/>
                            <path d="M12.56 6.6A10.97 10.97 0 0 1 14 8c2 2 3 4 3 6a5 5 0 0 1-10 0"/>
                            <path d="M16.4 9.17A2 2 0 0 1 19.5 9c1.4.63 2.5 1.57 2.5 3a4 4 0 0 1-8 0"/>
                        </svg>
                    </div>
                    <p class="text-sm font-semibold text-dark">Personal Care</p>
                </div>

                <div class="industry-card p-5 text-center cursor-pointer reveal reveal-delay-3">
                    <div class="w-11 h-11 mx-auto mb-3 rounded-lg bg-white flex items-center justify-center">
                        <svg class="w-5 h-5 text-amber-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
                        </svg>
                    </div>
                    <p class="text-sm font-semibold text-dark">Herbal</p>
                </div>

                <div class="industry-card p-5 text-center cursor-pointer reveal reveal-delay-4">
                    <div class="w-11 h-11 mx-auto mb-3 rounded-lg bg-white flex items-center justify-center">
                        <svg class="w-5 h-5 text-botanical-light" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/>
                            <path d="M2 12h20"/>
                        </svg>
                    </div>
                    <p class="text-sm font-semibold text-dark">Export</p>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ============================================
     SECTION 7: TESTIMONIALS
     ============================================ --}}
<section class="bg-surface-alt" id="testimonials">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20 md:py-28">

        <div class="text-center mb-16 reveal">
            <p class="text-sm font-semibold uppercase tracking-wider text-accent mb-3">Testimonial</p>
            <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark leading-tight section-divider section-divider-center">
                Apa Kata Mitra Kami
            </h2>
            <p class="text-base text-dark mt-6 max-w-2xl mx-auto">
                Kepercayaan dan kepuasan mitra bisnis adalah prioritas utama kami. Berikut adalah pengalaman mereka bekerja sama dengan Sentra Essential Oil.
            </p>
        </div>

        <div x-data="{
                scrollLeft() { $refs.slider.scrollBy({ left: -350, behavior: 'smooth' }); },
                scrollRight() { $refs.slider.scrollBy({ left: 350, behavior: 'smooth' }); }
            }" class="relative w-full">
            
            <div class="flex justify-end gap-3 mb-6 reveal">
                <button @click="scrollLeft" class="w-10 h-10 rounded-full border border-border flex items-center justify-center text-dark hover:bg-surface transition-colors" aria-label="Previous">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg>
                </button>
                <button @click="scrollRight" class="w-10 h-10 rounded-full border border-border flex items-center justify-center text-dark hover:bg-surface transition-colors" aria-label="Next">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg>
                </button>
            </div>

            <div x-ref="slider" class="flex overflow-x-auto snap-x snap-mandatory gap-6 pb-8 reveal [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden">
                
                {{-- Testimonial 1 --}}
                <div class="snap-start shrink-0 w-[85vw] md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                    <div class="bg-white p-8 rounded-2xl shadow-sm border border-border/50 h-full flex flex-col">
                        <div class="flex items-center gap-1 text-amber-500 mb-6">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <p class="text-dark leading-relaxed mb-8 flex-grow">
                            "Kualitas minyak atsiri dari Sentra sangat konsisten. Proses pengiriman selalu tepat waktu dan dilengkapi dengan dokumen pendukung yang lengkap. Sangat merekomendasikan untuk kebutuhan industri farmasi."
                        </p>
                        <div class="mt-auto pt-6 border-t border-border/50 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                            <div>
                                <h4 class="font-bold text-dark text-sm mb-0.5">Budi Santoso</h4>
                                <p class="text-xs font-semibold text-accent">Direktur Pengadaan</p>
                            </div>
                            <div class="sm:text-right">
                                <p class="text-xs text-muted">Perusahaan Farmasi Nasional</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Testimonial 2 --}}
                <div class="snap-start shrink-0 w-[85vw] md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                    <div class="bg-white p-8 rounded-2xl shadow-sm border border-border/50 h-full flex flex-col">
                        <div class="flex items-center gap-1 text-amber-500 mb-6">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <p class="text-dark leading-relaxed mb-8 flex-grow">
                            "Kami bermitra dengan Sentra Essential Oil selama lebih dari dua tahun. Kemurnian Citronella Oil mereka sangat memenuhi standar tinggi yang kami tetapkan untuk produk personal care."
                        </p>
                        <div class="mt-auto pt-6 border-t border-border/50 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                            <div>
                                <h4 class="font-bold text-dark text-sm mb-0.5">Ratna Mulyadi</h4>
                                <p class="text-xs font-semibold text-accent">R&D Manager</p>
                            </div>
                            <div class="sm:text-right">
                                <p class="text-xs text-muted">Produsen Personal Care</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Testimonial 3 --}}
                <div class="snap-start shrink-0 w-[85vw] md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                    <div class="bg-white p-8 rounded-2xl shadow-sm border border-border/50 h-full flex flex-col">
                        <div class="flex items-center gap-1 text-amber-500 mb-6">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <p class="text-dark leading-relaxed mb-8 flex-grow">
                            "Kapasitas pasokan yang besar dan stabil membuat Sentra menjadi partner andalan kami untuk memenuhi permintaan pasar ekspor. Harga kompetitif tanpa mengorbankan kualitas."
                        </p>
                        <div class="mt-auto pt-6 border-t border-border/50 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                            <div>
                                <h4 class="font-bold text-dark text-sm mb-0.5">Hendra Wijaya</h4>
                                <p class="text-xs font-semibold text-accent">Supply Chain Head</p>
                            </div>
                            <div class="sm:text-right">
                                <p class="text-xs text-muted">Perusahaan Eksportir</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Testimonial 4 --}}
                <div class="snap-start shrink-0 w-[85vw] md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                    <div class="bg-white p-8 rounded-2xl shadow-sm border border-border/50 h-full flex flex-col">
                        <div class="flex items-center gap-1 text-amber-500 mb-6">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <p class="text-dark leading-relaxed mb-8 flex-grow">
                            "Essential oil dari Sentra sangat mudah diformulasikan ke dalam produk-produk skincare kami karena 100% murni tanpa campuran bahan sintetis. Sangat memuaskan."
                        </p>
                        <div class="mt-auto pt-6 border-t border-border/50 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                            <div>
                                <h4 class="font-bold text-dark text-sm mb-0.5">Anita Suryani</h4>
                                <p class="text-xs font-semibold text-accent">Chief Formulator</p>
                            </div>
                            <div class="sm:text-right">
                                <p class="text-xs text-muted">Pabrik Kosmetik Organik</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Testimonial 5 --}}
                <div class="snap-start shrink-0 w-[85vw] md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                    <div class="bg-white p-8 rounded-2xl shadow-sm border border-border/50 h-full flex flex-col">
                        <div class="flex items-center gap-1 text-amber-500 mb-6">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <p class="text-dark leading-relaxed mb-8 flex-grow">
                            "Untuk kebutuhan produksi skala menengah, Sentra selalu responsif dan fleksibel. Minyak nilam dan cengkeh mereka memiliki aroma terapi yang sangat kuat dan murni."
                        </p>
                        <div class="mt-auto pt-6 border-t border-border/50 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                            <div>
                                <h4 class="font-bold text-dark text-sm mb-0.5">Faisal Rahman</h4>
                                <p class="text-xs font-semibold text-accent">Pemilik Brand</p>
                            </div>
                            <div class="sm:text-right">
                                <p class="text-xs text-muted">Aromaterapi Lokal</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Testimonial 6 --}}
                <div class="snap-start shrink-0 w-[85vw] md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)]">
                    <div class="bg-white p-8 rounded-2xl shadow-sm border border-border/50 h-full flex flex-col">
                        <div class="flex items-center gap-1 text-amber-500 mb-6">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <p class="text-dark leading-relaxed mb-8 flex-grow">
                            "Klien-klien kami sangat menyukai aroma essential oil yang diaplikasikan di spa kami. Pengiriman selalu on-time yang membuat manajemen operasional kami menjadi sangat tenang."
                        </p>
                        <div class="mt-auto pt-6 border-t border-border/50 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                            <div>
                                <h4 class="font-bold text-dark text-sm mb-0.5">Siska Putri</h4>
                                <p class="text-xs font-semibold text-accent">Manager Operasional</p>
                            </div>
                            <div class="sm:text-right">
                                <p class="text-xs text-muted">Spa & Wellness Center</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ============================================
     SECTION 8: CTA SECTION
     ============================================ --}}
<section class="bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20 md:py-28">
        <div class="max-w-3xl mx-auto text-center reveal">
            <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark leading-tight mb-6">
                Butuh Minyak Atsiri Untuk Bisnis Anda?
            </h2>
            <p class="text-base text-dark leading-relaxed mb-10 max-w-2xl mx-auto">
                Sentra Essential siap menjadi partner terpercaya dalam penyediaan minyak atsiri berkualitas untuk bisnis Anda. Hubungi kami untuk informasi ketersediaan produk, harga, dan sampel pra-pengiriman.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="btn-primary !bg-primary hover:!bg-primary-light">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                    </svg>
                    Hubungi Kami
                </a>
                <a href="{{ route('contact') }}" class="btn-primary !bg-accent hover:!bg-accent-light">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/>
                        <rect x="9" y="3" width="6" height="4" rx="1"/>
                    </svg>
                    Dapatkan Sample Gratis
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ============================================
     JAVASCRIPT: Scroll Reveal + Counter Animation
     ============================================ --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ---- Scroll Reveal ----
        const revealElements = document.querySelectorAll('.reveal');
        const revealObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

        revealElements.forEach(function(el) {
            revealObserver.observe(el);
        });

        // ---- Counter Animation ----
        const counters = document.querySelectorAll('.stat-number[data-count]');
        const counterObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(function(el) {
            counterObserver.observe(el);
        });

        function animateCounter(el) {
            var target = parseInt(el.getAttribute('data-count'));
            var suffix = el.getAttribute('data-suffix') || '';
            var duration = 1500;
            var start = 0;
            var startTime = null;

            function step(timestamp) {
                if (!startTime) startTime = timestamp;
                var progress = Math.min((timestamp - startTime) / duration, 1);
                var eased = 1 - Math.pow(1 - progress, 3);
                var current = Math.floor(eased * target);
                el.textContent = current + suffix;
                if (progress < 1) {
                    requestAnimationFrame(step);
                } else {
                    el.textContent = target + suffix;
                    el.classList.add('counting');
                    setTimeout(function() { el.classList.remove('counting'); }, 300);
                }
            }

            requestAnimationFrame(step);
        }

        // ---- Reduced motion check ----
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            revealElements.forEach(function(el) {
                el.classList.add('revealed');
            });
            counters.forEach(function(el) {
                var target = el.getAttribute('data-count');
                var suffix = el.getAttribute('data-suffix') || '';
                el.textContent = target + suffix;
            });
        }
    });
</script>

@endsection