@extends('frontend.layouts.app')

@section('content')

{{-- Blog Header --}}
<section class="bg-surface-alt py-12 md:py-20 border-b border-border">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        @if($post->category)
        <a href="#" class="inline-block px-4 py-1.5 bg-white rounded-full text-xs font-bold text-accent shadow-sm mb-6 hover:bg-accent hover:text-white transition-colors">
            {{ $post->category->name }}
        </a>
        @endif
        
        <h1 class="font-heading text-3xl md:text-5xl font-bold text-dark leading-tight tracking-tight mb-6">
            {{ $post->title }}
        </h1>
        
        <div class="flex items-center justify-center gap-4 text-sm font-medium text-dark/70">
            <span>{{ \Carbon\Carbon::parse($post->published_at)->isoFormat('D MMMM Y') }}</span>
            @if($post->author)
            <span class="w-1 h-1 bg-border rounded-full"></span>
            <span>Ditulis oleh {{ $post->author->name }}</span>
            @endif
        </div>
    </div>
</section>

{{-- Blog Content --}}
<section class="bg-white py-12 md:py-16">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
        
        {{-- Featured Image --}}
        <div class="w-full aspect-[16/9] md:aspect-[21/9] rounded-2xl overflow-hidden bg-surface mb-12 shadow-sm">
            <img src="{{ $post->featured_image ? asset('storage/' . $post->featured_image) : 'https://placehold.co/1200x600/e2e8f0/475569?text=' . urlencode($post->title) }}" class="w-full h-full object-cover" alt="{{ $post->title }}">
        </div>

        {{-- Rich Content --}}
        <div class="prose prose-lg max-w-none prose-headings:font-heading prose-headings:font-bold prose-headings:text-dark prose-a:text-accent hover:prose-a:text-accent-light prose-img:rounded-xl">
            {!! $post->content !!}
        </div>

        {{-- Tags & Share --}}
        @if($post->tags->isNotEmpty())
        <div class="mt-12 pt-8 border-t border-border flex flex-wrap items-center gap-4">
            <span class="text-sm font-bold text-dark">Tags:</span>
            <div class="flex flex-wrap gap-2">
                @foreach($post->tags as $tag)
                <span class="px-3 py-1 bg-surface-alt rounded-lg text-xs font-medium text-dark/80">
                    #{{ $tag->name }}
                </span>
                @endforeach
            </div>
        </div>
        @endif

        {{-- Back Button --}}
        <div class="mt-12 pt-8 text-center">
            <a href="{{ route('blogs.index') }}" class="inline-flex items-center gap-2 text-sm font-bold text-accent hover:text-accent-light transition-colors">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
                Kembali ke Daftar Blog
            </a>
        </div>
        
    </div>
</section>

@endsection
