<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EJSC Bakorwil Malang - Co-working Space & Creative Hub')</title>
    
    <meta name="description" content="@yield('description', 'EJSC (East Java Super Corridor) Bakorwil Malang - Elevate Your Workspace. Co-working space modern, tempat kolaborasi, kreatif hub, dan fasilitas lengkap di Malang.')">
    <meta name="keywords" content="EJSC, co-working space malang, bakorwil malang, sewa ruang meeting malang, ruang kolaborasi, UMKM malang, creative hub malang">
    <meta name="author" content="EJSC Bakorwil Malang">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'EJSC Bakorwil Malang - Co-working Space & Creative Hub')">
    <meta property="og:description" content="@yield('description', 'EJSC (East Java Super Corridor) Bakorwil Malang - Elevate Your Workspace. Co-working space modern, tempat kolaborasi, kreatif hub, dan fasilitas lengkap di Malang.')">
    <meta property="og:image" content="{{ asset('images/LogoEJSC.png') }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('title', 'EJSC Bakorwil Malang - Co-working Space & Creative Hub')">
    <meta name="twitter:description" content="@yield('description', 'EJSC (East Java Super Corridor) Bakorwil Malang - Elevate Your Workspace. Co-working space modern, tempat kolaborasi, kreatif hub, dan fasilitas lengkap di Malang.')">
    <meta name="twitter:image" content="{{ asset('images/LogoEJSC.png') }}">

    <link rel="icon" href="{{ asset('images/LogoEJSC.png') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-[#01031C] text-white antialiased">

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    @stack('scripts')

</body>
</html>
