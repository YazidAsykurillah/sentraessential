@if(setting('favicon'))
    <link rel="icon" href="{{ Storage::disk('public')->url(setting('favicon')) }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ Storage::disk('public')->url(setting('favicon')) }}" type="image/x-icon">
@else
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
@endif

<title>
    {{ $seoTitle ?? setting('default_seo_title') }}
</title>

<meta name="description" content="{{ $seoDescription ?? setting('default_seo_description') }}">

<meta property="og:title" content="{{ $seoTitle ?? setting('default_seo_title') }}">

<meta property="og:description" content="{{ $seoDescription ?? setting('default_seo_description') }}">