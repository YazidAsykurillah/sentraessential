<footer class="bg-primary text-white">

    {{-- Botanical divider --}}
    <div class="botanical-line"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-12">

            {{-- Company Info --}}
            <div class="lg:col-span-1">
                <div class="flex items-center gap-2.5 mb-4">
                    @if(setting('logo'))
                        <img src="{{ Storage::disk('public')->url(setting('logo')) }}" alt="{{ setting('company_name') }}" class="h-8 w-auto object-contain rounded-md">
                        <span class="text-lg font-bold font-heading">
                            {{ setting('company_name') }}
                        </span>
                    @else
                        <span class="text-lg font-bold font-heading">
                            {{ setting('company_name') }}
                        </span>
                    @endif
                </div>
                <p class="text-sm text-white/60 leading-relaxed">
                    {{ setting('site_tagline') }}
                </p>
            </div>

            {{-- Products --}}
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-white/80 mb-4">
                    Our Products
                </h4>
                <ul class="space-y-2.5">
                    <li>
                        <span class="text-sm text-white/60 hover:text-white transition-colors duration-200 cursor-pointer">
                            Citronella Oil
                        </span>
                    </li>
                    <li>
                        <span class="text-sm text-white/60 hover:text-white transition-colors duration-200 cursor-pointer">
                            Betel Leaf Oil
                        </span>
                    </li>
                    <li>
                        <span class="text-sm text-white/60 hover:text-white transition-colors duration-200 cursor-pointer">
                            Clove Oil
                        </span>
                    </li>
                    <li>
                        <span class="text-sm text-white/60 hover:text-white transition-colors duration-200 cursor-pointer">
                            Ginger Oil
                        </span>
                    </li>
                </ul>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-white/80 mb-4">
                    Quick Links
                </h4>
                <ul class="space-y-2.5">
                    <li>
                        <a href="{{ route('home') }}" class="text-sm text-white/60 hover:text-white transition-colors duration-200 cursor-pointer">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="text-sm text-white/60 hover:text-white transition-colors duration-200 cursor-pointer">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('products.index') }}" class="text-sm text-white/60 hover:text-white transition-colors duration-200 cursor-pointer">
                            Produk
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blogs.index') }}" class="text-sm text-white/60 hover:text-white transition-colors duration-200 cursor-pointer">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-sm text-white/60 hover:text-white transition-colors duration-200 cursor-pointer">
                            Kontak
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Contact Info --}}
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider text-white/80 mb-4">
                    Contact Us
                </h4>
                <div class="space-y-3">
                    <div class="flex items-start gap-3">
                        <svg class="w-4 h-4 mt-0.5 text-botanical-light shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                        <span class="text-sm text-white/60">{{ setting('email') }}</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-4 h-4 mt-0.5 text-botanical-light shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <span class="text-sm text-white/60">{{ setting('phone') }}</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-4 h-4 mt-0.5 text-botanical-light shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        <span class="text-sm text-white/60">{{ setting('address') }}</span>
                    </div>
                </div>
            </div>

        </div>

        {{-- Bottom bar --}}
        <div class="mt-12 pt-8 border-t border-white/10">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-xs text-white/40">
                    &copy; {{ date('Y') }} {{ setting('company_name') }}. All rights reserved.
                </p>
                <div class="flex items-center gap-4 text-xs text-white/40">
                    <a href="#" class="hover:text-white transition-colors duration-200">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors duration-200">Terms of Service</a>
                    <a href="#" class="hover:text-white transition-colors duration-200">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>