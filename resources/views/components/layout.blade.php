<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Saif Dev')</title>
    {{-- @vite('resources/css/app.css')
    @vite('resources/js/app.js') --}}

    @if (app()->environment('local'))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        @php
            $manifest = file_exists(public_path('build/.vite/manifest.json'))
                ? json_decode(file_get_contents(public_path('build/.vite/manifest.json')), true)
                : [];
        @endphp

        @isset($manifest['resources/css/app.css'], $manifest['resources/js/app.js'])
            <link rel="stylesheet" href="{{ asset('build/assets' . $manifest['resources/css/app.css']['file']) }}">
            <script src="{{ asset('build/assets' . $manifest['resources/js/app.js']['file']) }}" defer></script>
        @else
            <p style="color: red;">Error: manifest.json tidak ditemukan.</p>
        @endisset
    @endif


    <script>
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
            document.documentElement.style.backgroundColor = '#000000';
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="min-h-screen flex flex-col">
    <x-navbar />

    <div class="flex-1 max-w-2xl mx-auto px-4 py-15">
        <main>
            {{ $slot }}
        </main>
    </div>

    <x-footer />
</body>

</html>
