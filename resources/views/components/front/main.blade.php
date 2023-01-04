<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Menu Tbilisi Tower' }}</title>
    <meta name="_token" content="{!! csrf_token() !!}" />
    {{-- SEO --}}
    <meta name="robots" content="index, follow">
    <meta name="facebook-domain-verification" content="7vptxdxbn8br61wmdyom36clgegrw9" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="description" content="{{ __('seo.description') }}" />
    <meta name="keywords" content="{{ __('seo.keywords') }}" />
    {{-- OG --}}
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ __('front.title') }}">
    <meta property="og:description" content="{{ __('seo.description') }}">
    <meta property="og:image" content="{{ asset('public/img/og.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ __('front.title') }}">
    <meta property="twitter:description" content="{{ __('seo.description') }}">
    <meta property="twitter:image" content="{{ asset('public/img/og.jpg') }}">
    <!-- Favicon: -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public//apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public//favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public//favicon-16x16.png') }}">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="apple-mobile-web-app-title" content="QR MENU">
    <meta name="application-name" content="QR MENU">
    <meta name="msapplication-TileColor" content="#F6F6F4">
    <meta name="theme-color" content="#F6F6F4">
    <!-- /.Favicon: -->
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/bundle.css?v=0.42') }}">
    <link rel="stylesheet" href="{{ asset('public/css/front.css?v=0.42') }}">
</head>

<body class="page-main lang-{{ app()->getLocale() }}">

    {{ $slot }}
    
    <!-- Scripts: -->
    <script src="{{ asset('public/js/main.js?v=0.2') }}"></script>

</body>

</html>
