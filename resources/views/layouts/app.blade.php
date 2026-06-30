<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EJSC Malang - East Java Super Corridor | Coworking Space & Creative Hub')</title>
    
    <meta name="description" content="@yield('description', 'EJSC (East Java Super Corridor) Bakorwil III Malang - Coworking space modern, tempat kolaborasi, kreatif hub, dan fasilitas lengkap untuk UMKM & talenta di Malang.')">
    <meta name="keywords" content="@yield('keywords', 'EJSC, EJSC Malang, East Java Super Corridor, EJSC Bakorwil Malang, coworking space malang, sewa ruang meeting malang, ruang kolaborasi malang, UMKM malang, creative hub malang, bakorwil III malang')">
    <meta name="author" content="EJSC Bakorwil III Malang">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="id" href="{{ url()->current() }}">

    {{-- Geo Meta Tags for Local SEO --}}
    <meta name="geo.region" content="ID-JI">
    <meta name="geo.placename" content="Malang, Jawa Timur">
    <meta name="geo.position" content="-7.9730;112.6214">
    <meta name="ICBM" content="-7.9730, 112.6214">

    {{-- Preconnect hints for performance --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'EJSC Malang - East Java Super Corridor | Coworking Space & Creative Hub')">
    <meta property="og:description" content="@yield('description', 'EJSC (East Java Super Corridor) Bakorwil III Malang - Coworking space modern, tempat kolaborasi, kreatif hub, dan fasilitas lengkap untuk UMKM & talenta di Malang.')">
    <meta property="og:image" content="{{ asset('images/LogoEJSC.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="EJSC Malang">
    <meta property="og:locale" content="id_ID">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('title', 'EJSC Malang - East Java Super Corridor | Coworking Space & Creative Hub')">
    <meta name="twitter:description" content="@yield('description', 'EJSC (East Java Super Corridor) Bakorwil III Malang - Coworking space modern, tempat kolaborasi, kreatif hub, dan fasilitas lengkap untuk UMKM & talenta di Malang.')">
    <meta name="twitter:image" content="{{ asset('images/LogoEJSC.png') }}">

    @stack('meta')

    {{-- Organization Schema --}}
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'EJSC Malang',
        'alternateName' => 'East Java Super Corridor Bakorwil III Malang',
        'url' => url('/'),
        'logo' => asset('images/LogoEJSC.png'),
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => '+62-813-3080-6923',
            'contactType' => 'customer service',
            'areaServed' => 'ID',
            'availableLanguage' => ['Indonesian', 'English'],
        ],
        'sameAs' => [
            'https://www.instagram.com/ejscmalang/',
            'https://www.youtube.com/@ejscmalang5657',
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    {{-- CoworkingSpace Schema (Local Business) --}}
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'CoworkingSpace',
        'name' => 'EJSC Malang - East Java Super Corridor',
        'alternateName' => 'EJSC Bakorwil III Malang',
        'image' => asset('images/LogoEJSC.png'),
        '@id' => url('/'),
        'url' => url('/'),
        'telephone' => '+62-813-3080-6923',
        'email' => 'ejscmalang@gmail.com',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Jl. Simpang Ijen No.2, Oro-oro Dowo, Kec. Klojen',
            'addressLocality' => 'Malang',
            'addressRegion' => 'Jawa Timur',
            'postalCode' => '65119',
            'addressCountry' => 'ID',
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => -7.9730,
            'longitude' => 112.6214,
        ],
        'openingHoursSpecification' => [
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
            'opens' => '08:00',
            'closes' => '16:00',
        ],
        'sameAs' => [
            'https://www.instagram.com/ejscmalang/',
            'https://www.youtube.com/@ejscmalang5657',
        ],
        'description' => 'EJSC (East Java Super Corridor) Malang adalah coworking space modern di Bakorwil III Malang. Tempat kolaborasi, creative hub, dan fasilitas lengkap untuk UMKM dan talenta di Malang.',
        'priceRange' => 'Rp 0 - Rp 500.000',
        'amenityFeature' => [
            ['@type' => 'LocationFeatureSpecification', 'name' => 'WiFi', 'value' => true],
            ['@type' => 'LocationFeatureSpecification', 'name' => 'Meeting Room', 'value' => true],
            ['@type' => 'LocationFeatureSpecification', 'name' => 'Projector', 'value' => true],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    {{-- WebSite Schema for Sitelinks --}}
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => 'EJSC Malang',
        'alternateName' => 'East Java Super Corridor Malang',
        'url' => url('/'),
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    {{-- Per-page structured data (breadcrumbs, etc.) --}}
    @stack('structured_data')

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
