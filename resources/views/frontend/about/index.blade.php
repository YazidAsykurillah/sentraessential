@extends('frontend.layouts.app')

@section('content')

{{-- Hero Section --}}
<section class="hero-gradient relative overflow-hidden">
    <div class="absolute inset-0 hero-pattern"></div>
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 py-16 md:py-20">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            {{-- Left Column: Content --}}
            <div class="max-w-2xl lg:col-span-7 reveal">
                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-white/10 backdrop-blur-sm rounded-full border border-white/15 mb-6">
                    <div class="w-2 h-2 bg-botanical-light rounded-full"></div>
                    <span class="text-xs font-medium text-white/80 tracking-wide uppercase">About Sentra Essential Oil</span>
                </div>

                <h1 class="font-heading text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight md:leading-[1.2] tracking-tight mb-6">
                    Strategic Partner <span class="text-botanical-light">For Your Essential Oil Needs</span>
                </h1>

                <p class="text-base md:text-base text-white/60 leading-relaxed mb-10 max-w-xl">
                    Providing pure essential oils directly from the best distillation centers in Indonesia to support the sustainability of your industry.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{route('products.index')}}" class="btn-primary">
                        View Our Products
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"/>
                            <polyline points="12 5 19 12 12 19"/>
                        </svg>
                    </a>
                    <a href="{{ route('contact') }}" class="btn-outline">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                        </svg>
                        Contact Us
                    </a>
                </div>
            </div>

            {{-- Right Column: Image --}}
            <div class="relative lg:col-span-5 reveal reveal-delay-2">
                {{-- Decorative background blob/border --}}
                <div class="absolute -inset-4 bg-white/5 rounded-[2rem] transform rotate-3"></div>
                
                {{-- Main Image --}}
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-white/10 aspect-[4/3] group">
                    <img src="{{ asset('images/about_hero.webp') }}" 
                         alt="Supplier minyak atsiri Indonesia" 
                         class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    
                    {{-- Overlay gradient for premium feel --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-dark/60 via-transparent to-transparent"></div>
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
                    <img src="{{ asset('images/our_story_farm.webp') }}" alt="Local Farming Process" class="w-full h-full object-cover">
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
                    Bridging Local Farmers with Global Industries
                </h2>
                <p class="text-base text-dark leading-relaxed mb-4">
                    Sentra Essential Oil is an essential oil supplier that acts as a strategic raw material procurement partner serving the needs of industrial-scale essential oils for domestic manufacturing (pharmaceutical, cosmetic, herbal, traditional medicine, and personal care sectors) and also serves as a stable volume supply vendor for essential oil export companies in Indonesia.
                </p>
                <p class="text-base text-dark leading-relaxed mb-4">
                    We understand that in the manufacturing industry, quality consistency and supply stability are the lifeblood of production. Therefore, we build direct partnerships with local distillers in various essential oil production centers across Indonesia.
                </p>
                <p class="text-base text-dark leading-relaxed mb-4">
                    By cutting out the long distribution chain, we are able to guarantee product traceability, ensuring that every drop of essential oil that reaches your facility is 100% pure, has passed rigorous physical filtration, and is ready to meet industry standards.
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
            <p class="text-sm font-semibold uppercase tracking-wider text-accent mb-3">Our Values</p>
            <h2 class="font-heading text-3xl md:text-4xl font-bold text-dark leading-tight section-divider section-divider-center">
                Business Pillars
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
                <h3 class="font-heading text-base font-bold text-dark mb-3">Integrity of Quality (Purity)</h3>
                <p class="text-sm text-dark leading-relaxed">
                    We do not compromise on purity. Every batch of our product is guaranteed to be 100% natural without adulteration or added synthetic materials.
                </p>
            </div>

            {{-- Value 2 --}}
            <div class="feature-card p-6 reveal reveal-delay-1">
                <div class="w-12 h-12 bg-earth-muted rounded-xl flex items-center justify-center text-earth mb-6">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="font-heading text-base font-bold text-dark mb-3">Supply Continuity</h3>
                <p class="text-sm text-dark leading-relaxed">
                    Through an integrated network, we are able to maintain stable supply volumes to meet your industrial production targets consistently.
                </p>
            </div>

            {{-- Value 3 --}}
            <div class="feature-card p-6 reveal reveal-delay-2">
                <div class="w-12 h-12 bg-accent-light/10 rounded-xl flex items-center justify-center text-accent mb-6">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="font-heading text-base font-bold text-dark mb-3">Strategic Partnership</h3>
                <p class="text-sm text-dark leading-relaxed">
                    We position ourselves as strategic partners. Our clients' business growth is the true measure of our success.
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
                    Our Upstream Integration Advantage
                </h2>
                <p class="text-base text-dark mb-6 leading-relaxed">
                    Sentra Essential Oil has a competitive advantage in controlling the supply chain from the upstream. We are not just a trader, but part of the distillation ecosystem itself.
                </p>
                <ul class="space-y-4 text-dark">
                    <li class="flex items-start gap-3">
                        <div class="mt-1 w-5 h-5 rounded-full bg-botanical-muted flex items-center justify-center shrink-0">
                            <svg class="w-3 h-3 text-botanical" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span><strong>Competitive Pricing:</strong> Eliminating unnecessary middlemen.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="mt-1 w-5 h-5 rounded-full bg-botanical-muted flex items-center justify-center shrink-0">
                            <svg class="w-3 h-3 text-botanical" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span><strong>Internal Quality Control:</strong> Physical filtration and standard homogenization at our facility.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="mt-1 w-5 h-5 rounded-full bg-botanical-muted flex items-center justify-center shrink-0">
                            <svg class="w-3 h-3 text-botanical" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span><strong>Complete Legality:</strong> We are a PKP (Taxable Business Entity), ready to issue Tax Invoices for your company.</span>
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
                            <h4 class="font-bold text-dark text-lg">Sourcing from Local Centers</h4>
                            <p class="text-sm text-dark/70 mt-1">Collecting distillation results directly from selected partner farmers.</p>
                        </div>
                    </div>
                    
                    {{-- Connector --}}
                    <div class="ml-6 w-0.5 h-8 bg-border"></div>

                    {{-- Step 2 --}}
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-earth text-white flex items-center justify-center font-bold font-heading shrink-0 text-xl shadow-lg shadow-earth/20">2</div>
                        <div>
                            <h4 class="font-bold text-dark text-lg">Filtration & Homogenization</h4>
                            <p class="text-sm text-dark/70 mt-1">Industrial-scale filtration process to separate residue and water.</p>
                        </div>
                    </div>

                    {{-- Connector --}}
                    <div class="ml-6 w-0.5 h-8 bg-border"></div>

                    {{-- Step 3 --}}
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-accent text-white flex items-center justify-center font-bold font-heading shrink-0 text-xl shadow-lg shadow-accent/20">3</div>
                        <div>
                            <h4 class="font-bold text-dark text-lg">B2B Delivery</h4>
                            <p class="text-sm text-dark/70 mt-1">Distribution to your factory facility or export warehouse with complete documentation.</p>
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
                Need Essential Oils For Your Business?
            </h2>
            <p class="text-base text-white/80 leading-relaxed mb-10 max-w-2xl mx-auto">
                Sentra Essential is ready to be a trusted partner in supplying quality essential oils for your business. Contact us for information on product availability, pricing, and pre-shipment samples.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="btn-primary !bg-primary hover:!bg-primary-light">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                    </svg>
                    Contact Us
                </a>
                <a href="{{ route('contact') }}" class="btn-primary !bg-accent hover:!bg-accent-light">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/>
                        <rect x="9" y="3" width="6" height="4" rx="1"/>
                    </svg>
                    Get Free Sample
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
