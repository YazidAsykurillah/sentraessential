@extends('frontend.layouts.app')

@section('content')

<section class="bg-primary py-24">
    <div class="max-w-7xl mx-auto px-8">
        <h1 class="text-5xl font-bold mb-4 text-white">
            {{ setting('site_name') }}
        </h1>
        <p class="text-lg text-white/80">
            {{ setting('site_tagline') }}
        </p>
    </div>
</section>

@endsection