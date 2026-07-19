@php
    $pSeo = $pageSeo ?? null;
    $finalSeoTitle = $pSeo?->seo_title ?? $seoTitle ?? setting('default_seo_title');
    $finalSeoDesc = $pSeo?->seo_description ?? $seoDescription ?? setting('default_seo_description');
    $finalOgImage = $pSeo?->og_image ?? $ogImage ?? null;
@endphp

@if(setting('favicon'))
    <link rel="icon" href="{{ Storage::disk('public')->url(setting('favicon')) }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ Storage::disk('public')->url(setting('favicon')) }}" type="image/x-icon">
@else
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
@endif

<title>{{ $finalSeoTitle }}</title>

<meta name="description" content="{{ $finalSeoDesc }}">

<meta property="og:title" content="{{ $finalSeoTitle }}">

<meta property="og:description" content="{{ $finalSeoDesc }}">

@if($finalOgImage)
    <meta property="og:image" content="{{ Storage::disk('public')->url($finalOgImage) }}">
@elseif(setting('default_og_image'))
    <meta property="og:image" content="{{ Storage::disk('public')->url(setting('default_og_image')) }}">
@endif