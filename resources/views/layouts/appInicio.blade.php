<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full scroll-smooth">

<head class="scroll-smooth">
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="/img/isotipo-anacos.png">

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
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body class="antialiased relative @yield('page-class')">
    @php($lugares = [
    ["id" => "01",
    "name" => "Combarro",
    "top" => "60",
    "left" => "16"],
    ])

    <div x-data="{ explora: false }">
        <div>
            <x-map id="01" pathImg="img/map-combarro.png"></x-map>
        </div>
        @include('partials.header')
        <main class="flex-grow">
            <div>@yield('content')</div>
        </main>
        @include('partials.footer')


        <div x-cloak x-bind:class="explora ? 'hidden' : 'inline'" class="flex justify-center item-center w-full h-full absolute inset-0 z-50 bg-imagen-map bg-cover">
            <div class="flex flex-col justify-between items-center bg-blanco rounded-xl w-[75%] min-h-[65%] m-auto p-8 pt-4">
                <div class="text-center">
                    <h1 class="text-9xl font-bold text-azul-oscuro pb-3">Explora</h1>
                    <h2 class="h2 text-azul-oscuro pb-5">¿Quieres descubrir los lugares único que nos inspiran y emocionan?</h2>
                    <div class="flex justify-center gap-x-10">
                        <div class="flex flex-col justify-between items-center pt-3">
                            <p class="p w-full max-w-sm text-left">Elige el lugar que deseas explorar y atreveté a descubrir su historía.</p>
                            <p class="p w-full max-w-sm text-left">En este mapa podrás navegar por cada uno de ellos.</p>
                            <p class="p w-full max-w-sm text-left">Los paisajes, que representan a la perfección la magia de Galicia, se yerguen como observadores incansables del paso del tiempo y cuentan historias a aquellos dispuestos a escuchar.</p>
                            <button type="button" class="boton m-5 min-w-max uppercase w-fit" @click="explora=!explora">
                                Comenzamos
                            </button>
                        </div>


                        <div class="relative">
                            @svg("map-galicia")
                            <div>
                                <ul>
                                    @foreach ($lugares as $lugar)
                                    @php($style = "top: ". $lugar['top'] ."%; left: ". $lugar['left'] . "%")
                                    <li class="group absolute text-magenta-oscuro font-semibold" style="{{ $style }}">
                                        <span id="{{ $lugar['id'] }}" class="absolute group-hover:scale-150">@svg("ico-position-map", "w-7 h-auto")</span>
                                        <span class="absolute -translate-x-1/3 translate-y-full p-1 hidden group-hover:inline">
                                        {{ $lugar['name'] }}
                                        </span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- <li><a data-rel="id_8a2b2102-832c-11e5-b2f0-000c29c073e6" href="/que-visitar/destacados/parque-nacional-das-illas-atlanticas-de-galicia?langId=es_ES" onclick="registrarEvento('que-visitar','Menu principal - que facer -','Parque Nacional das Illas Atlánticas')">Parque Nacional das Illas Atlánticas</a></li> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script>

    </script>
</body>

</html>