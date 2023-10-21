<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="h-full scroll-smooth"
>

<head class="scroll-smooth">
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TODO: Browser Color - Chrome, Firefox OS, Opera -->
    {{-- <meta name="theme-color" content="#0AD0FF"> --}}
    <!-- TODO: Browser Color - iOS Safari -->
    {{-- <meta name="apple-mobile-web-app-status-bar-style" content="#0AD0FF"> --}}

    <link rel="shortcut icon" type="image/png" href="{{ env('APP_URL') . '/favicon.png' }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ env('APP_URL') . '/favicon.png' }}">

    <title>@yield('meta_title', config('app.name'))</title>

    <!-- Metas --->
    <meta name="description" content="@yield('meta_description', config('web.meta_description'))">
    {{-- <meta name="keywords" content="@yield('meta_keywords')"> --}}
    <meta name="robots" content="@yield('meta_robots', 'INDEX, FOLLOW')">
    {{-- <meta name="revisit-after" content="@yield('meta_revisit-after')"> --}}

    <meta property="og:title" content="@yield('meta_title')">
    <meta property="og:image" content="@yield('og_image', env('APP_URL') . '/favicon.png')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('meta_title')">
    <meta property="twitter:image" content="@yield('og_image', env('APP_URL') . '/favicon.png')">
    <meta property="twitter:description" content="@yield('meta_description')">

    <!-- Styles -->
    <style>[x-cloak] { display: none !important; }</style>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body class="antialiased flex flex-col h-full @yield('page-class')">
    @include('partials.header')
    <main class="flex-grow">
        <div>
            @yield('content')
        </div>
    </main>
    @include('partials.footer')
</body>

</html>
