<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EJSC Co-working Space')</title>
    <meta name="description" content="@yield('description', 'EJSC – Elevate Your Workspace. Co-working space modern dengan fasilitas lengkap.')">
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
