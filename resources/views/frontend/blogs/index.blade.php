@extends('frontend.layouts.app')

@section('content')

{{-- Hero Section --}}
<section class="bg-surface-alt py-16 md:py-24 relative overflow-hidden border-b border-border">
    <div class="absolute inset-0 hero-pattern opacity-5"></div>
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-white rounded-full border border-border shadow-sm mb-6">
                <div class="w-2 h-2 bg-botanical rounded-full"></div>
                <span class="text-xs font-medium text-dark tracking-wide uppercase">Blog & Artikel</span>
            </div>
            <h1 class="font-heading text-4xl md:text-5xl font-bold text-dark leading-tight tracking-tight mb-6">
                Wawasan Seputar <span class="text-botanical">Minyak Atsiri</span>
            </h1>
            <p class="text-base text-dark/80 leading-relaxed">
                Temukan informasi terbaru, tips, dan panduan seputar industri minyak atsiri, standar kualitas, serta tren manufaktur terkini.
            </p>
        </div>
    </div>
</section>

{{-- Blog Grid --}}
<section class="bg-light py-20 md:py-28">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            
            @forelse($posts as $post)
            <div class="product-card p-6 cursor-pointer reveal flex flex-col relative bg-white rounded-2xl shadow-sm border border-border hover:shadow-md transition-shadow">
                <div class="relative w-full aspect-[4/3] mb-5 rounded-xl overflow-hidden bg-surface group">
                    <img src="{{ $post->featured_image ? asset('storage/' . $post->featured_image) : 'https://placehold.co/800x600/e2e8f0/475569?text=' . urlencode($post->title) }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" alt="{{ $post->title }}">
                    @if($post->category)
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-xs font-bold text-accent shadow-sm">
                            {{ $post->category->name }}
                        </span>
                    </div>
                    @endif
                </div>
                
                <div class="mb-4">
                    <span class="block text-xs font-medium text-dark/60 mb-2">{{ \Carbon\Carbon::parse($post->published_at)->isoFormat('D MMMM Y') }}</span>
                    <h3 class="font-heading text-xl font-bold text-dark leading-tight mb-3 group-hover:text-accent transition-colors">
                        <a href="{{ route('blogs.show', $post->slug) }}" class="before:absolute before:inset-0 before:z-10">
                            {{ $post->title }}
                        </a>
                    </h3>
                    <p class="text-sm text-dark/70 leading-relaxed line-clamp-3">
                        {{ $post->excerpt }}
                    </p>
                </div>
                
                <div class="mt-auto pt-4 border-t border-border flex items-center justify-between">
                    <a href="{{ route('blogs.show', $post->slug) }}" class="inline-flex items-center gap-1.5 text-sm font-semibold text-accent hover:text-accent-light transition-colors relative z-20">
                        Baca Selengkapnya
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-dark/70">Belum ada artikel yang tersedia.</p>
            </div>
            @endforelse

        </div>

        {{-- Pagination --}}
        @if($posts->hasPages())
        <div class="mt-12 flex justify-center">
            {{ $posts->links() }}
        </div>
        @endif

    </div>
</section>

@endsection
