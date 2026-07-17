<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @include('frontend.partials.seo')

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body class="bg-light text-dark min-h-screen flex flex-col">

    @include('frontend.partials.header')

    <main class="flex-1">
        @yield('content')
    </main>

    @include('frontend.partials.footer')

</body>
</html>