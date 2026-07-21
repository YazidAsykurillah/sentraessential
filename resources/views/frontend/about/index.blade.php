@extends('frontend.layouts.app')

@section('content')

{{-- ============================================
     SECTION 1: HERO
     ============================================ --}}
<section class="hero-gradient relative overflow-hidden">
    <div class="absolute inset-0 hero-pattern"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 py-16 md:py-24">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            {{-- Text Content --}}
            <div class="max-w-2xl lg:col-span-7 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-white/10 backdrop-blur-sm rounded-full border border-white/15 mb-6">
                    <div class="w-2 h-2 bg-botanical-light rounded-full"></div>
                    <span class="text-xs font-medium text-white/80 tracking-wide uppercase">About Sentra Essential</span>
                </div>

                <h1 class="font-heading text-5xl md:text-5xl lg:text-6xl font-bold text-white leading-[1.1] tracking-tight mb-6">
                    Mitra Strategis <br class="hidden md:block"> <span class="text-botanical-light">Kebutuhan Minyak Atsiri Anda</span>
                </h1>

                <p class="text-base md:text-base text-white/60 leading-relaxed mb-10 max-w-xl">
                    Berkomitmen menghadirkan 100% minyak atsiri murni langsung dari sentra penyulingan terbaik di Indonesia untuk mendukung keberlanjutan industri Anda.
                </p>
            </div>

            {{-- Image Content --}}
            <div class="relative hidden lg:block lg:col-span-5 reveal reveal-delay-2">
                <div class="relative rounded-[2rem] overflow-hidden aspect-[4/3] shadow-2xl border border-white/10">
                    <img src="{{ asset('images/about_hero.png') }}" alt="About Sentra Essential" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-tr from-dark/40 to-transparent"></div>
                </div>
                
                {{-- Decorative element --}}
                <div class="absolute -bottom-6 -left-6 bg-white/10 backdrop-blur-md p-5 rounded-2xl shadow-xl border border-white/20">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-botanical rounded-full flex items-center justify-center text-white">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-white">100% Purity</p>
                            <p class="text-xs text-white/70">Guaranteed Quality</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================
     SECTION 2: OUR STORY
     ============================================ --}}
<section class="bg-white py-20 md:py-28 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            
            {{-- Image / Visual --}}
            <div class="relative reveal">
                <div class="absolute -inset-4 bg-botanical-muted rounded-[2rem] transform -rotate-2"></div>
                <div class="relative rounded-3xl overflow-hidden shadow-xl aspect-[4/5] border border-border">
                    <img src="{{ asset('images/hero_section_1.webp') }}" alt="Distillation Process" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-dark/10"></div>
                </div>
                
                {{-- Floating badge --}}
                <div class="absolute -bottom-6 -right-6 bg-white p-6 rounded-2xl shadow-xl border border-border hidden md:block">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 bg-accent-light/10 rounded-full flex items-center justify-center text-accent">
                            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-dark">Local Sourcing</p>
                            <p class="text-xs text-muted">Global Standard</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Text Content --}}
            <div class="reveal reveal-delay-2">
                <p class="text-sm font-semibold uppercase tracking-wider text-accent mb-3">Who We Are</p>
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark leading-tight section-divider mb-8">
                    Menjembatani Petani Lokal dengan Industri Global
                </h2>
                <p class="text-base text-dark leading-relaxed mb-4">
                    Sentra Essential Oil adalah supplier minyak atsiri yang bergerak sebagai mitra
                    pengadaan bahan baku strategis yang melayani pemenuhan kebutuhan minyak atsiri
                    berskala industri untuk manufaktur dalam negeri 
                    (sektor farmasi, kosmetik, herbal, jamu dan produk perawatan tubuh) 
                    serta menjadi vendor pasokan volume stabil bagi perusahaan eksportir minyak atsiri di Indonesia.
                </p>
                <p class="text-base text-dark leading-relaxed mb-4">
                    Kami memahami bahwa dalam industri manufaktur, baik itu farmasi, 
                    kosmetik, maupun personal care; konsistensi kualitas dan kestabilan pasokan
                    adalah nyawa dari sebuah produksi. Oleh karena itu, kami membangun kemitraan langsung
                    dengan para penyuling lokal di berbagai sentra penghasil atsiri di seluruh Indonesia.
                </p>
                <p class="text-base text-dark leading-relaxed mb-4">
                    Dengan memotong rantai distribusi yang panjang, kami mampu menjamin 
                    ketertelusuran (traceability) produk, memastikan bahwa setiap tetes minyak atsiri
                    yang sampai ke fasilitas Anda adalah 100% murni, telah melewati penyaringan
                    fisik yang ketat, dan siap memenuhi standar industri.
                </p>    
            </div>

        </div>
    </div>
</section>

{{-- ============================================
     SECTION 3: CORE VALUES
     ============================================ --}}
<section class="bg-surface-alt py-20 md:py-28">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        
        <div class="text-center mb-16 reveal">
            <p class="text-sm font-semibold uppercase tracking-wider text-accent mb-3">Our Core Values</p>
            <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark leading-tight section-divider section-divider-center">
                Pilar Bisnis Kami
            </h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            
            {{-- Value 1 --}}
            <div class="feature-card p-6 reveal">
                <div class="w-12 h-12 bg-botanical-muted rounded-xl flex items-center justify-center text-botanical mb-6">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="font-heading text-base font-bold text-dark mb-3">Integritas Kualitas (Purity)</h3>
                <p class="text-sm text-dark leading-relaxed">
                    Kami tidak berkompromi pada kemurnian. Setiap batch produk kami dijamin 100% alami tanpa adulterasi atau bahan sintetis tambahan.
                </p>
            </div>

            {{-- Value 2 --}}
            <div class="feature-card p-6 reveal reveal-delay-1">
                <div class="w-12 h-12 bg-earth-muted rounded-xl flex items-center justify-center text-earth mb-6">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="font-heading text-base font-bold text-dark mb-3">Kontinuitas Pasokan</h3>
                <p class="text-sm text-dark leading-relaxed">
                    Melalui jaringan terintegrasi, kami mampu menjaga kestabilan volume pasokan untuk memenuhi target produksi industri Anda secara konsiten.
                </p>
            </div>

            {{-- Value 3 --}}
            <div class="feature-card p-6 reveal reveal-delay-2">
                <div class="w-12 h-12 bg-accent-light/10 rounded-xl flex items-center justify-center text-accent mb-6">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="font-heading text-base font-bold text-dark mb-3">Kemitraan Jangka Panjang</h3>
                <p class="text-sm text-dark leading-relaxed">
                    Kami memposisikan diri sebagai partner strategis. Pertumbuhan bisnis klien adalah ukuran kesuksesan kami yang sebenarnya.
                </p>
            </div>

        </div>
    </div>
</section>

{{-- ============================================
     SECTION 4: SUPPLY CHAIN EDGE
     ============================================ --}}
<section class="bg-white py-20 md:py-28 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            
            {{-- Text --}}
            <div class="reveal">
                <p class="text-sm font-semibold uppercase tracking-wider text-accent mb-3">Supply Chain</p>
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark leading-tight section-divider mb-8">
                    Keunggulan Integrasi Hulu Kami
                </h2>
                <p class="text-lg text-dark mb-6 leading-relaxed">
                    Sentra Essential Oil memiliki keunggulan kompetitif dalam penguasaan rantai pasok dari hulu. Kami bukan sekadar <i>trader</i>, melainkan bagian dari ekosistem penyulingan itu sendiri.
                </p>
                <ul class="space-y-4 text-dark">
                    <li class="flex items-start gap-3">
                        <div class="mt-1 w-5 h-5 rounded-full bg-botanical-muted flex items-center justify-center shrink-0">
                            <svg class="w-3 h-3 text-botanical" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span><strong>Harga Kompetitif:</strong> Memutus perantara yang tidak perlu (middlemen).</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="mt-1 w-5 h-5 rounded-full bg-botanical-muted flex items-center justify-center shrink-0">
                            <svg class="w-3 h-3 text-botanical" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span><strong>Quality Control Internal:</strong> Filtrasi fisik dan homogenisasi standar di fasilitas kami.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="mt-1 w-5 h-5 rounded-full bg-botanical-muted flex items-center justify-center shrink-0">
                            <svg class="w-3 h-3 text-botanical" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span><strong>Legalitas Lengkap:</strong> Kami adalah PKP (Pengusaha Kena Pajak), siap menerbitkan Faktur Pajak untuk perusahaan Anda.</span>
                    </li>
                </ul>
            </div>

            {{-- Graphics --}}
            <div class="bg-surface-alt rounded-3xl p-8 md:p-12 border border-border reveal reveal-delay-2">
                <div class="space-y-6">
                    
                    {{-- Step 1 --}}
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-botanical text-white flex items-center justify-center font-bold font-heading shrink-0 text-xl shadow-lg shadow-botanical/20">1</div>
                        <div>
                            <h4 class="font-bold text-dark text-lg">Sourcing Sentra Lokal</h4>
                            <p class="text-sm text-dark/70 mt-1">Pengumpulan hasil distilasi langsung dari petani mitra terpilih.</p>
                        </div>
                    </div>
                    
                    {{-- Connector --}}
                    <div class="ml-6 w-0.5 h-8 bg-border"></div>

                    {{-- Step 2 --}}
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-earth text-white flex items-center justify-center font-bold font-heading shrink-0 text-xl shadow-lg shadow-earth/20">2</div>
                        <div>
                            <h4 class="font-bold text-dark text-lg">Filtrasi & Homogenisasi</h4>
                            <p class="text-sm text-dark/70 mt-1">Proses penyaringan tingkat industri untuk memisahkan residu dan air.</p>
                        </div>
                    </div>

                    {{-- Connector --}}
                    <div class="ml-6 w-0.5 h-8 bg-border"></div>

                    {{-- Step 3 --}}
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-accent text-white flex items-center justify-center font-bold font-heading shrink-0 text-xl shadow-lg shadow-accent/20">3</div>
                        <div>
                            <h4 class="font-bold text-dark text-lg">Pengiriman B2B</h4>
                            <p class="text-sm text-dark/70 mt-1">Distribusi ke fasilitas pabrik atau gudang ekspor Anda dengan dokumen lengkap.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================
     SECTION 5: CTA
     ============================================ --}}

<section class="bg-dark">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20 md:py-28">
        <div class="max-w-3xl mx-auto text-center reveal">
            <h2 class="font-heading text-3xl md:text-4xl font-bold text-white leading-tight mb-6">
                Butuh Minyak Atsiri Untuk Bisnis Anda?
            </h2>
            <p class="text-base text-white/80 leading-relaxed mb-10 max-w-2xl mx-auto">
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

@endsection
