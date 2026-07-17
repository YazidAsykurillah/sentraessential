@extends('frontend.layouts.app')

@section('content')

<section class="py-20">

    <div class="container mx-auto px-6">

        <h1 class="text-5xl font-bold mb-4">
            {{ setting('site_name') }}
        </h1>

        <p class="text-lg text-gray-600">
            {{ setting('site_tagline') }}
        </p>

    </div>

</section>

@endsection