<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'HOA Auto Import' }}</title>
    <meta name="_token" content="{!! csrf_token() !!}" />
    {{-- SEO --}}
    <meta name=”robots” content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="description" content="{{ $description }}" />
    {{-- OG --}}
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:image" content="{{ asset('img/og-general.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $title }}">
    <meta property="twitter:description" content="{{ $description }}">
    <meta property="twitter:image" content="{{ asset('img/og-general.png') }}">

    {{-- Tracking --}}
    <x-front.parts.track />
    
    <!-- Favicon: -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#1140c8">
    <meta name="apple-mobile-web-app-title" content="HOA">
    <meta name="application-name" content="HOA">
    <meta name="msapplication-TileColor" content="#1140c8">
    <meta name="theme-color" content="#1140c8">
    <!-- /.Favicon: -->
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bundle.css?V=1.4') }}">
    {{ $css }}
</head>

<body class="{{ $bodyClass }} lang-{{ app()->getLocale() }}">

    <div class="wrap">
        <x-front.parts.top-bar />
        <!-- #end Top Bar -->

        <x-front.parts.header />
        <!-- #end Header -->
    </div><!-- #end wrap -->

    {{ $slot }}

    <x-front.parts.footer-book />

    <x-front.parts.footer />

    <x-front.parts.sharia />

    <x-front.parts.hidden-ui />

    @if (Route::is('front.cars*') || Route::is('front.car'))
        <x-front.parts.modal-book />
    @endif

    <!-- Scripts: -->
    <script src="{{ asset('js/bundle.js') }}"></script>
    {{ $js }}
</body>

</html>
