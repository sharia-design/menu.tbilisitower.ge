<!DOCTYPE html>
<html lang="en" class="text-gray-900 leading-tight">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/public/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/public/favicon-16x16.png">
    <link rel="manifest" href="/public/site.webmanifest">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('public/css/admin.css?v-0.1') }}" rel="stylesheet">
    
</head>

<body class="min-h-screen bg-gray-100">

    @auth
        <x-back.parts.nav />
    @endauth
    {{-- Content --}}

    <x-back.flash />

    <div class="container mx-auto mt-24 px-8 bg-white p-8 rounded">

        {{ $slot }}

    </div>

    {{-- #end Content --}}


</body>

</html>
