@extends('frontend.layouts.app')

@section('content')

{{-- ============================================
     SECTION 1: HERO
     ============================================ --}}
<section class="bg-surface relative overflow-hidden pt-32 pb-16 md:pt-40 md:pb-20">
    <div class="absolute inset-0 bg-gradient-to-br from-botanical/10 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative text-center">
        <h1 class="font-heading text-4xl md:text-5xl font-bold text-dark leading-tight tracking-tight mb-4">
            Hubungi <span class="text-accent">Kami</span>
        </h1>
        <p class="text-base md:text-lg text-dark/70 max-w-2xl mx-auto">
            Tim kami siap membantu Anda dengan informasi produk, pengadaan bahan baku, atau pertanyaan kerja sama.
        </p>
    </div>
</section>

{{-- ============================================
     SECTION 2: CONTACT INFO & FORM
     ============================================ --}}
<section class="bg-white py-20 md:py-28">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-12">
            
            {{-- Left Column: Contact Information & Map --}}
            <div class="reveal">
                <p class="text-sm font-semibold uppercase tracking-wider text-accent mb-3">Informasi Kontak</p>
                <h2 class="font-heading text-3xl font-bold text-dark leading-tight mb-8">
                    Mari Bekerja Sama
                </h2>
                
                <div class="space-y-6 mb-10">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-botanical-muted flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-botanical" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-dark mb-1">Telepon</p>
                            <a href="tel:{{setting('phone')}}" class="text-base text-dark/70 hover:text-accent transition-colors">{{setting('phone')}}</a>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-earth-muted flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-earth" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-dark mb-1">Email</p>
                            <a href="mailto:{{setting('email')}}" class="text-base text-dark/70 hover:text-accent transition-colors">{{setting('email')}}</a>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-botanical-muted flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-botanical" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-dark mb-1">Kantor Pusat</p>
                            <p class="text-base text-dark/70">{{setting('address')}}</p>
                        </div>
                    </div>
                </div>

                {{-- Embedded Google Map --}}
                <div class="rounded-2xl overflow-hidden shadow-sm border border-border h-64 md:h-80 relative">
                    {{-- Placeholder Map, can be replaced with real Google Maps iframe --}}
                    <iframe 
                        src="https://maps.google.com/maps?q={{ urlencode(setting('address')) }}&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        class="absolute inset-0">
                    </iframe>
                </div>
            </div>

            {{-- Right Column: Contact Form --}}
            <div class="reveal reveal-delay-2">
                <div class="bg-white p-8 md:p-10 rounded-2xl shadow-xl border border-border">
                    <h3 class="font-heading text-2xl font-bold text-dark mb-6">Kirim Pesan</h3>
                    
                    @if(session('success'))
                        <div class="mb-6 p-4 rounded-xl bg-botanical-muted text-botanical font-medium border border-botanical/20 flex items-start gap-3">
                            <svg class="w-5 h-5 shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                <polyline points="22 4 12 14.01 9 11.01"/>
                            </svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                        @csrf
                        
                        {{-- Honeypot field (hidden from real users) --}}
                        <div style="opacity: 0; position: absolute; top: 0; left: 0; height: 0; width: 0; z-index: -1; overflow: hidden;">
                            <label for="phone_number_ext">Do not fill this out if you are human</label>
                            <input type="text" name="phone_number_ext" id="phone_number_ext" value="" tabindex="-1" autocomplete="off">
                        </div>

                        <div>
                            <label for="name" class="block text-sm font-semibold text-dark mb-1.5">Nama Lengkap <span class="text-red-500">*</span></label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" required
                                class="w-full px-4 py-3 rounded-xl border border-border bg-surface-alt focus:bg-white focus:outline-none focus:ring-2 focus:ring-accent/50 focus:border-accent transition-colors @error('name') border-red-500 ring-red-500/20 @enderror"
                                placeholder="Masukkan nama lengkap Anda">
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="email" class="block text-sm font-semibold text-dark mb-1.5">Email <span class="text-red-500">*</span></label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}" required
                                    class="w-full px-4 py-3 rounded-xl border border-border bg-surface-alt focus:bg-white focus:outline-none focus:ring-2 focus:ring-accent/50 focus:border-accent transition-colors @error('email') border-red-500 ring-red-500/20 @enderror"
                                    placeholder="email@perusahaan.com">
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-dark mb-1.5">Nomor Telepon <span class="text-red-500">*</span></label>
                                <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required
                                    class="w-full px-4 py-3 rounded-xl border border-border bg-surface-alt focus:bg-white focus:outline-none focus:ring-2 focus:ring-accent/50 focus:border-accent transition-colors @error('phone') border-red-500 ring-red-500/20 @enderror"
                                    placeholder="081234567890">
                                @error('phone')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-semibold text-dark mb-1.5">Subjek <span class="text-red-500">*</span></label>
                            <input type="text" name="subject" id="subject" value="{{ old('subject') }}" required
                                class="w-full px-4 py-3 rounded-xl border border-border bg-surface-alt focus:bg-white focus:outline-none focus:ring-2 focus:ring-accent/50 focus:border-accent transition-colors @error('subject') border-red-500 ring-red-500/20 @enderror"
                                placeholder="Permintaan Penawaran / Pertanyaan">
                            @error('subject')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-semibold text-dark mb-1.5">Pesan <span class="text-red-500">*</span></label>
                            <textarea name="message" id="message" rows="5" required
                                class="w-full px-4 py-3 rounded-xl border border-border bg-surface-alt focus:bg-white focus:outline-none focus:ring-2 focus:ring-accent/50 focus:border-accent transition-colors resize-y @error('message') border-red-500 ring-red-500/20 @enderror"
                                placeholder="Tuliskan pesan atau kebutuhan Anda di sini...">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="pt-2">
                            <button type="submit" class="btn-primary w-full justify-center py-3.5">
                                Kirim Pesan Sekarang
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                </svg>
                            </button>
                        </div>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
