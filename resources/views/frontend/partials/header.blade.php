<header class="glass-nav fixed top-0 left-0 right-0 z-50 transition-all duration-300" id="main-header">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-18">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 cursor-pointer group">
                @if(setting('logo'))
                    <img src="{{ Storage::disk('public')->url(setting('logo')) }}" alt="{{ setting('site_name') }}" class="h-9 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
                    <span class="text-lg font-bold font-heading text-primary tracking-tight">
                        {{ setting('company_name') }}
                    </span>
                @else
                    <span class="text-lg font-bold font-heading text-primary tracking-tight">
                        {{ setting('company_name') }}
                    </span>
                @endif
            </a>

            {{-- Desktop Navigation --}}
            <nav class="hidden md:flex items-center gap-8">
                <a href="{{ route('home') }}" class="text-sm font-medium text-dark hover:text-accent transition-colors duration-200 cursor-pointer">
                    Home
                </a>
                <a href="{{ route('about') }}" class="text-sm font-medium text-secondary hover:text-accent transition-colors duration-200 cursor-pointer">
                    Tentang Kami
                </a>
                <a href="{{ route('products.index') }}" class="text-sm font-medium text-secondary hover:text-accent transition-colors duration-200 cursor-pointer">
                    Produk
                </a>
                <a href="{{ route('blogs.index') }}" class="text-sm font-medium text-secondary hover:text-accent transition-colors duration-200 cursor-pointer">
                    Blog
                </a>
                <a href="{{ route('contact') }}" class="text-sm font-medium text-secondary hover:text-accent transition-colors duration-200 cursor-pointer">
                    Kontak
                </a>
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-accent text-white text-sm font-semibold rounded-lg hover:bg-accent-light transition-colors duration-200 cursor-pointer">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                    </svg>
                    Request Penawaran
                </a>
            </nav>

            {{-- Mobile Menu Button --}}
            <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-surface-alt transition-colors duration-200 cursor-pointer" aria-label="Toggle menu">
                <svg class="w-6 h-6 text-primary" id="menu-icon-open" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="6" x2="21" y2="6"/>
                    <line x1="3" y1="12" x2="21" y2="12"/>
                    <line x1="3" y1="18" x2="21" y2="18"/>
                </svg>
                <svg class="w-6 h-6 text-primary hidden" id="menu-icon-close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"/>
                    <line x1="6" y1="6" x2="18" y2="18"/>
                </svg>
            </button>

        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="mobile-menu md:hidden">
            <div class="py-4 space-y-1 border-t border-border">
                <a href="{{ route('home') }}" class="block px-4 py-2.5 text-sm font-medium text-dark hover:bg-surface-alt rounded-lg transition-colors duration-200 cursor-pointer">
                    Home
                </a>
                <a href="{{ route('about') }}" class="block px-4 py-2.5 text-sm font-medium text-secondary hover:bg-surface-alt rounded-lg transition-colors duration-200 cursor-pointer">
                    Tentang Kami
                </a>
                <a href="{{ route('products.index') }}" class="block px-4 py-2.5 text-sm font-medium text-secondary hover:bg-surface-alt rounded-lg transition-colors duration-200 cursor-pointer">
                    Produk
                </a>
                <a href="{{ route('blogs.index') }}" class="block px-4 py-2.5 text-sm font-medium text-secondary hover:bg-surface-alt rounded-lg transition-colors duration-200 cursor-pointer">
                    Blog
                </a>
                <a href="{{ route('contact') }}" class="block px-4 py-2.5 text-sm font-medium text-secondary hover:bg-surface-alt rounded-lg transition-colors duration-200 cursor-pointer">
                    Contact
                </a>
                <div class="pt-2">
                    <a href="{{ route('contact') }}" class="block text-center px-4 py-2.5 bg-accent text-white text-sm font-semibold rounded-lg hover:bg-accent-light transition-colors duration-200 cursor-pointer">
                        Get a Quote
                    </a>
                </div>
            </div>
        </div>

    </div>
</header>

{{-- Spacer for fixed header --}}
<div class="h-16 lg:h-18"></div>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('menu-icon-open');
        const iconClose = document.getElementById('menu-icon-close');
        menu.classList.toggle('open');
        iconOpen.classList.toggle('hidden');
        iconClose.classList.toggle('hidden');
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const header = document.getElementById('main-header');
        if (window.scrollY > 20) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
</script>