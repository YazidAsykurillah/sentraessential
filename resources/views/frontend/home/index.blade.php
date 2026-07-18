@extends('frontend.layouts.app')

@section('content')

{{-- ============================================
     SECTION 1: HERO
     ============================================ --}}
<section class="hero-gradient relative overflow-hidden">
    {{-- Background pattern overlay --}}
    <div class="absolute inset-0 hero-pattern"></div>

    {{-- Decorative botanical SVG --}}
    <div class="absolute top-0 right-0 w-1/2 h-full opacity-[0.04] pointer-events-none">
        <svg viewBox="0 0 600 800" fill="none" class="w-full h-full">
            <path d="M300 50 C300 50 450 200 450 400 C450 600 300 750 300 750" stroke="white" stroke-width="1.5"/>
            <path d="M300 150 C350 150 420 220 420 350" stroke="white" stroke-width="1"/>
            <path d="M300 250 C250 250 180 320 180 450" stroke="white" stroke-width="1"/>
            <path d="M300 350 C350 350 400 400 400 500" stroke="white" stroke-width="1"/>
            <path d="M300 450 C250 450 200 500 200 600" stroke="white" stroke-width="1"/>
            <ellipse cx="420" cy="350" rx="30" ry="50" stroke="white" stroke-width="0.8" transform="rotate(-30 420 350)"/>
            <ellipse cx="180" cy="450" rx="30" ry="50" stroke="white" stroke-width="0.8" transform="rotate(30 180 450)"/>
            <ellipse cx="400" cy="500" rx="25" ry="40" stroke="white" stroke-width="0.8" transform="rotate(-20 400 500)"/>
            <ellipse cx="200" cy="600" rx="25" ry="40" stroke="white" stroke-width="0.8" transform="rotate(20 200 600)"/>
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 py-16 md:py-16">
        <div class="max-w-3xl">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-white/10 backdrop-blur-sm rounded-full border border-white/15 mb-8">
                <div class="w-2 h-2 bg-botanical-light rounded-full"></div>
                <span class="text-xs font-medium text-white/80 tracking-wide uppercase">Essential Oils Supplier</span>
            </div>

            <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-[1.1] tracking-tight mb-6">
                Supplier Minyak Atsiri Untuk <span class="text-botanical-light">Industri Manufaktur & Exportir Indonesia</span>
            </h1>

            <p class="text-lg md:text-lg text-white/70 leading-relaxed mb-10 max-w-2xl">
                Sentra Essential Oil adalah supplier minyak atsiri untuk industri farmasi, kosmetik, herbal, perawatan tubuh (personal care) dan perusahaan exportir Indonesia.
            </p>

            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#products" class="btn-primary">
                    Lihat Daftar Produk
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
                    Free Sample Produk
                </a>
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
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 text-accent font-semibold hover:gap-3 transition-all duration-200 cursor-pointer">
                    Learn more about us
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
<section class="bg-white" id="products">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20 md:py-28">

        <div class="text-center mb-14 reveal">
            <p class="text-sm font-semibold uppercase tracking-wider text-accent mb-3">Our Featured Products</p>
            <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark leading-tight section-divider section-divider-center">
                Produk Minyak Atsiri Unggulan Kami
            </h2>
            <p class="text-base text-dark mt-6 max-w-2xl mx-auto">
                Semua minyak atsiri yang kami suplai selalu melewati proses quality control yang ketat untuk menjamin 100% tingkat kemurnian.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">

            {{-- Citronella Oil --}}
            <div class="product-card p-6 cursor-pointer reveal flex flex-col">
                <div class="w-16 h-16 mb-5 rounded-2xl bg-botanical-muted flex items-center justify-center">
                    <svg class="w-8 h-8 text-botanical" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M24 44V20" stroke-linecap="round"/>
                        <path d="M24 20C24 20 16 12 16 8C16 4 20 2 24 6C28 2 32 4 32 8C32 12 24 20 24 20Z" fill="currentColor" fill-opacity="0.1"/>
                        <path d="M24 28C20 28 14 24 14 18" stroke-linecap="round"/>
                        <path d="M24 32C28 32 34 28 34 22" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="font-heading text-lg font-bold text-dark mb-2">Citronella Oil</h3>
                <p class="text-sm text-dark leading-relaxed mb-6">
                    Widely used in insect repellents, aromatherapy, and personal care products. Sourced from premium citronella grass.
                </p>
                <div class="mt-auto pt-4 border-t border-border">
                    <span class="text-xs font-semibold text-accent uppercase tracking-wide">Industrial Grade</span>
                </div>
            </div>

            {{-- Betel Leaf Oil --}}
            <div class="product-card p-6 cursor-pointer reveal reveal-delay-1 flex flex-col">
                <div class="w-16 h-16 mb-5 rounded-2xl bg-botanical-muted flex items-center justify-center">
                    <svg class="w-8 h-8 text-botanical" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M24 44V24" stroke-linecap="round"/>
                        <path d="M12 8C12 8 24 4 36 8C36 8 38 20 30 28C22 36 12 32 12 32C12 32 8 20 12 8Z" fill="currentColor" fill-opacity="0.1"/>
                        <path d="M18 16C22 18 26 22 28 28" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="font-heading text-lg font-bold text-dark mb-2">Betel Leaf Oil</h3>
                <p class="text-sm text-dark leading-relaxed mb-6">
                    Valued in traditional herbal medicine and pharmaceutical formulations. Extracted from select betel leaves.
                </p>
                <div class="mt-auto pt-4 border-t border-border">
                    <span class="text-xs font-semibold text-accent uppercase tracking-wide">Pharmaceutical Grade</span>
                </div>
            </div>

            {{-- Clove Oil --}}
            <div class="product-card p-6 cursor-pointer reveal reveal-delay-2 flex flex-col">
                <div class="w-16 h-16 mb-5 rounded-2xl bg-amber-50 flex items-center justify-center">
                    <svg class="w-8 h-8 text-amber-700" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M24 44V28" stroke-linecap="round"/>
                        <circle cx="24" cy="18" r="10" fill="currentColor" fill-opacity="0.1"/>
                        <path d="M24 8V4" stroke-linecap="round"/>
                        <path d="M20 10L18 6" stroke-linecap="round"/>
                        <path d="M28 10L30 6" stroke-linecap="round"/>
                        <circle cx="24" cy="18" r="5"/>
                    </svg>
                </div>
                <h3 class="font-heading text-lg font-bold text-dark mb-2">Clove Oil</h3>
                <p class="text-sm text-dark leading-relaxed mb-6">
                    Essential for dental, cosmetic, and flavoring applications. Rich eugenol content from Central Java cloves.
                </p>
                <div class="mt-auto pt-4 border-t border-border">
                    <span class="text-xs font-semibold text-accent uppercase tracking-wide">Premium Grade</span>
                </div>
            </div>

            {{-- Ginger Oil --}}
            <div class="product-card p-6 cursor-pointer reveal reveal-delay-3 flex flex-col">
                <div class="w-16 h-16 mb-5 rounded-2xl bg-orange-50 flex items-center justify-center">
                    <svg class="w-8 h-8 text-orange-600" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M24 44V30" stroke-linecap="round"/>
                        <path d="M16 22C16 22 14 14 20 10C26 6 28 10 28 10C28 10 32 6 36 12C40 18 34 24 28 24C22 24 20 26 20 30" fill="currentColor" fill-opacity="0.1"/>
                        <path d="M16 22C16 22 14 14 20 10C26 6 28 10 28 10C28 10 32 6 36 12C40 18 34 24 28 24" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="font-heading text-lg font-bold text-dark mb-2">Ginger Oil</h3>
                <p class="text-sm text-dark leading-relaxed mb-6">
                    Popular in wellness, food manufacturing, and personal care. Warm, spicy profile from Java ginger roots.
                </p>
                <div class="mt-auto pt-4 border-t border-border">
                    <span class="text-xs font-semibold text-accent uppercase tracking-wide">Export Grade</span>
                </div>
            </div>

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
                Built on Product Integrity
            </h2>
            <p class="text-base text-dark mt-6 max-w-2xl mx-auto">
                We prioritize product integrity as our highest operational standard, ensuring seamless transactions and verified quality for every partner.
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
                    Every batch undergoes standardized physical filtration and quality control to guarantee 100% purity.
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
                    We provide product samples before shipment for your laboratory verification and approval.
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
                    Full domestic trade documentation including Tax Invoices and PKP issuance for seamless transactions.
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
                    Directly integrated with distillation centers across Central Java for reliable, continuous supply.
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
                    Capable of fulfilling large-volume orders for manufacturers and stable-volume export requirements.
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
                    Committed to facilitating seamless transactions and maintaining long-term business partnerships.
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
                    Sectors We Serve
                </h2>
                <p class="text-base text-dark leading-relaxed">
                    Our essential oils power production lines across Indonesia's key manufacturing sectors.
                </p>
            </div>

            {{-- Industry cards grid --}}
            <div class="lg:col-span-3 grid grid-cols-2 sm:grid-cols-3 gap-4">

                <div class="industry-card p-5 text-center cursor-pointer reveal">
                    <div class="w-11 h-11 mx-auto mb-3 rounded-lg bg-white flex items-center justify-center">
                        <svg class="w-5 h-5 text-botanical" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                        </svg>
                    </div>
                    <p class="text-sm font-semibold text-dark">Pharmaceutical</p>
                </div>

                <div class="industry-card p-5 text-center cursor-pointer reveal reveal-delay-1">
                    <div class="w-11 h-11 mx-auto mb-3 rounded-lg bg-white flex items-center justify-center">
                        <svg class="w-5 h-5 text-accent" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
                            <line x1="9" y1="9" x2="9.01" y2="9"/>
                            <line x1="15" y1="9" x2="15.01" y2="9"/>
                        </svg>
                    </div>
                    <p class="text-sm font-semibold text-dark">Cosmetic</p>
                </div>

                <div class="industry-card p-5 text-center cursor-pointer reveal reveal-delay-2">
                    <div class="w-11 h-11 mx-auto mb-3 rounded-lg bg-white flex items-center justify-center">
                        <svg class="w-5 h-5 text-earth-light" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                        </svg>
                    </div>
                    <p class="text-sm font-semibold text-dark">Personal Care</p>
                </div>

                <div class="industry-card p-5 text-center cursor-pointer reveal reveal-delay-3">
                    <div class="w-11 h-11 mx-auto mb-3 rounded-lg bg-white flex items-center justify-center">
                        <svg class="w-5 h-5 text-amber-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                            <path d="M2 17l10 5 10-5"/>
                            <path d="M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <p class="text-sm font-semibold text-dark">Herbal Medicine</p>
                </div>

                <div class="industry-card p-5 text-center cursor-pointer reveal reveal-delay-4">
                    <div class="w-11 h-11 mx-auto mb-3 rounded-lg bg-white flex items-center justify-center">
                        <svg class="w-5 h-5 text-botanical-light" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="1" y="3" width="15" height="13"/>
                            <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/>
                            <circle cx="5.5" cy="18.5" r="2.5"/>
                            <circle cx="18.5" cy="18.5" r="2.5"/>
                        </svg>
                    </div>
                    <p class="text-sm font-semibold text-dark">Export</p>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ============================================
     SECTION 7: STATS / METRICS COUNTER
     ============================================ --}}
<section class="hero-gradient relative overflow-hidden">
    <div class="absolute inset-0 hero-pattern"></div>
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 py-20 md:py-24">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12">

            <div class="text-center reveal">
                <p class="stat-number text-4xl md:text-5xl font-bold text-white" data-count="4">0</p>
                <p class="text-sm text-white/60 mt-2">Flagship Products</p>
            </div>

            <div class="text-center reveal reveal-delay-1">
                <p class="stat-number text-4xl md:text-5xl font-bold text-white" data-count="5">0</p>
                <p class="text-sm text-white/60 mt-2">Industries Served</p>
            </div>

            <div class="text-center reveal reveal-delay-2">
                <p class="stat-number text-4xl md:text-5xl font-bold text-botanical-light" data-count="100" data-suffix="%">0</p>
                <p class="text-sm text-white/60 mt-2">Pure & Unadulterated</p>
            </div>

            <div class="text-center reveal reveal-delay-3">
                <p class="stat-number text-4xl md:text-5xl font-bold text-white" data-count="10" data-suffix="+">0</p>
                <p class="text-sm text-white/60 mt-2">Distillation Partners</p>
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
                Ready to Secure Your Essential Oil Supply?
            </h2>
            <p class="text-base text-dark leading-relaxed mb-10 max-w-2xl mx-auto">
                We're ready to be your reliable partner in supplying premium essential oils for your business. Contact us for product availability, pricing, and pre-shipment samples.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="btn-primary !bg-primary hover:!bg-primary-light">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                    </svg>
                    Contact Us Today
                </a>
                <a href="{{ route('contact') }}" class="btn-primary !bg-accent hover:!bg-accent-light">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/>
                        <rect x="9" y="3" width="6" height="4" rx="1"/>
                    </svg>
                    Request Free Sample
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