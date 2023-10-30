@extends('layouts.app')

@section('page-class', 'sessionsIndex')

@section('content')
    {{-- <a href="{{ route('sessions.view') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Ir a la vista de una sesión
    </a> 
    <div x-data="{ closeFilter: true }">
        <div class="lg:bg-gris-calido">
            <div class="lg:py-4  flex fler-row justify-between lg:justify-center container relative">
                <div class="border rounded-xl border-solid border-gris-claro/[0.5] bg-white h-fit p-1 lg:max-w-xl grow">
                    <form class="flex flex-row justify-between items-center" method="get" id="buscarform">
                        <input class="m-1 text-base border-none px-0 lg:px-1" type="search" value=""
                            placeholder="Buscar por tema, año, tipo de ponencia,..." />
                        <button class="rounded-lg bg-ocre-claro/[0.8] p-3" type="submit">
                            @svg("ico-lupa", "w-4 h-auto")
                        </button>
                    </form>
                </div>
                <div class=" z-30 lg:hidden bg-white h-fit"
                    x-bind:class="!closeFilter ? 'w-2/3  absolute right-4' : 'w-2/5 '">
                    <div class="border rounded-xl border-solid border-gris-claro/[0.5] ml-3  p-1 z-30 lg:hidden h-fit">
                        <form class="flex flex-row justify-between items-center" method="get">
                            <input class="m-1 text-base border-none w-2/3 shrink px-0" type="search" value=""
                                placeholder="Filtrar" />
                            <button class="rounded-lg bg-ocre-claro/[0.8] p-3" type="button"
                                @click="closeFilter=!closeFilter">
                                <div>
                                    <span x-show="closeFilter">@svg("ico-ajustes", "w-4 h-auto")</span>
                                    <span x-show="!closeFilter">@svg("ico-cerrar", "w-4 h-auto")</span>
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div x-cloak x-show="!closeFilter" x-ref="mobileMenuContainer"
            @keyflecha-abajo.escape.window="closeFilter = true; utilsBsd(true)"
            class="w-full fixed inset-0 z-20 bg-white/[0.5] lg:hidden">
        </div>
        <div class="container flex flex-row relative lg:my-8">
            <aside class="lg:w-1/5 xl:w-1/6 p-5 max-w-max lg:mr-8"
                x-bind:class="closeFilter ? 'hidden lg:inline' : 'absolute lg:static inset-y-0 right-0 z-30 bg-white w-2/3 mx-4 pl-3'">
                <h3 x-show="closeFilter" class="h3 font-bold">Filtrar por...</h2>
                    <div id="filters" class="m-4 lg:mx-0 lg:my-7 bg-white w-full">
                        {{-- Acceso --}}
                        <div class="inline-block w-full mb-3" x-data="{ open: false }">
                            <div class="border-b-2 border-gris-claro/[.5] my-2">
                                <button type="button"
                                    class="inline-flex w-full justify-between items-center gap-x-1.5 px-6 font-bold"
                                    id="filter-access" @click="open=!open">
                                    Acceso
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7.787"
                                            viewBox="0 0 12 7.787" :class="{'rotate-180': open, 'rotate-0': !open}"
                                            class="inline w-3 h-3 transition-transform duration-200 transform">
                                            <path data-name="Trazado 501"
                                                d="M8,9.787l-6-6L3.787,2,8,6.213,12.213,2,14,3.787Z"
                                                transform="translate(-2 -2)" fill="#212121" />
                                        </svg>
                                        {{-- <span x-show="!open">@svg("ico-flecha-abajo", 'w-3 h-auto')</span>
                                        <span x-show="open">@svg("ico-flecha-arriba",  'w-3 h-auto')</span> --}}
                                    </div>
                                </button>
                            </div>

                            <div x-show="open" class="relative left-0 mt-2 py-3 px-6 origin-top-left focus:outline-none">
                                <div class="py-1" role="none">
                                    <form method="POST" action="#" role="none">
                                        <div>
                                            <input
                                                class="border-gris-claro focus:ring-white focus:text-gris-oscuro accent-white"
                                                type="checkbox" name="access-accesible" id="access-accesible">
                                            <label class="lg:text-sm px-2" for="access-accesible">Accesible a mi</label>
                                        </div>
                                        <div>
                                            <input
                                                class="border-gris-claro focus:ring-white focus:text-gris-oscuro accent-white"
                                                type="checkbox" name="access-esponsorizado" id="access-esponsorizado">
                                            <label class="lg:text-sm px-2" for="access-esponsorizado">Esponsorizado</label>
                                        </div>
                                </div>
                            </div>
                        </div>
                        {{-- Evento --}}
                        <div class="inline-block w-full mb-3" x-data="{ open: false }">
                            <div class="border-b-2 border-gris-claro/[.5] my-2">
                                <button type="button"
                                    class="inline-flex w-full justify-between items-center gap-x-1.5 px-6 font-bold"
                                    id="filter-access" @click="open=!open">
                                    Evento
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7.787"
                                            viewBox="0 0 12 7.787" :class="{'rotate-180': open, 'rotate-0': !open}"
                                            class="inline w-3 h-3 transition-transform duration-200 transform">
                                            <path data-name="Trazado 501"
                                                d="M8,9.787l-6-6L3.787,2,8,6.213,12.213,2,14,3.787Z"
                                                transform="translate(-2 -2)" fill="#212121" />
                                        </svg>
                                        {{-- <span x-show="!open">@svg("ico-flecha-abajo",  'w-3 h-auto')</span>
                                        <span x-show="open">@svg("ico-flecha-arriba",  'w-3 h-auto')</span> --}}
                                    </div>
                                </button>
                            </div>

                            <div x-show="open" class="relative left-0 mt-2 py-3 px-8 origin-top-left focus:outline-none">
                                <div class="py-1" role="none">
                                    <form method="POST" action="#" role="none">
                                        {{-- usar un for --}}
                                        <div>
                                            <input class="border-gris-claro focus:ring-white focus:text-gris-oscuro"
                                                type="checkbox" name="event-concreso" id="event-concreso">
                                            <label class="lg:text-sm px-2" for="event-concreso">Concreso</label>
                                        </div>
                                        <div>
                                            <input class="border-gris-claro focus:ring-white focus:text-gris-oscuro"
                                                type="checkbox" name="event-tv" id="event-tv">
                                            <label class="lg:text-sm px-2" for="event-tv">TV</label>
                                        </div>
                                </div>
                            </div>
                        </div>
                        {{-- Año --}}
                        <div class="inline-block w-full mb-3" x-data="{ open: false }">
                            <div class="border-b-2 border-gris-claro/[.5] my-2">
                                <button type="button"
                                    class="inline-flex w-full justify-between items-center gap-x-1.5 px-6 font-bold"
                                    id="filter-access" @click="open=!open">
                                    Año
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7.787"
                                            viewBox="0 0 12 7.787" :class="{'rotate-180': open, 'rotate-0': !open}"
                                            class="inline w-3 h-3 transition-transform duration-200 transform">
                                            <path data-name="Trazado 501"
                                                d="M8,9.787l-6-6L3.787,2,8,6.213,12.213,2,14,3.787Z"
                                                transform="translate(-2 -2)" fill="#212121" />
                                        </svg>
                                        {{-- <span x-show="!open">@svg("ico-flecha-abajo", 'w-3 h-auto')</span>
                                        <span x-show="open">@svg("ico-flecha-arriba", 'w-3 h-auto')</span> --}}
                                    </div>
                                </button>
                            </div>

                            <div x-show="open" class="relative left-0 mt-2 py-3 px-6 origin-top-left focus:outline-none">
                                <div class="py-1" role="none">
                                    <form method="POST" action="#" role="none">
                                        {{-- usar un for --}}
                                        <div>
                                            <input class="border-gris-claro focus:ring-white focus:text-gris-oscuro"
                                                type="checkbox" name="year-2022" id="year-2022">
                                            <label class="lg:text-sm px-2" for="year-2022">2022</label>
                                        </div>
                                        <div>
                                            <input class="border-gris-claro focus:ring-white focus:text-gris-oscuro"
                                                type="checkbox" name="year-2021" id="year-2021">
                                            <label class="lg:text-sm px-2" for="year-2021">2021</label>
                                        </div>
                                        <div>
                                            <input class="border-gris-claro focus:ring-white focus:text-gris-oscuro"
                                                type="checkbox" name="year-2020" id="year-2020">
                                            <label class="lg:text-sm px-2" for="year-2020">2020</label>
                                        </div>
                                        <div>
                                            <input class="border-gris-claro focus:ring-white focus:text-gris-oscuro"
                                                type="checkbox" name="year-2019" id="year-2019">
                                            <label class="lg:text-sm px-2" for="year-2019">2019</label>
                                        </div>
                                        <div>
                                            <input class="border-gris-claro focus:ring-white focus:text-gris-oscuro"
                                                type="checkbox" name="year-2018" id="year-2018">
                                            <label class="lg:text-sm px-2" for="year-2018">2018</label>
                                        </div>
                                        <div>
                                            <input class="border-gris-claro focus:ring-white focus:text-gris-oscuro"
                                                type="checkbox" name="year-2017" id="year-2017">
                                            <label class="lg:text-sm px-2" for="year-2017">2017</label>
                                        </div>

                                </div>
                            </div>
                        </div>
                        {{-- Tema --}}
                        <div class="inline-block w-full mb-3" x-data="{ open: false }">
                            <div class="border-b-2 border-gris-claro/[.5] my-2">
                                <button type="button"
                                    class="inline-flex w-full justify-between items-center gap-x-1.5 px-6 font-bold"
                                    id="filter-access" @click="open=!open">
                                    Tema
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7.787"
                                            viewBox="0 0 12 7.787" :class="{'rotate-180': open, 'rotate-0': !open}"
                                            class="inline w-3 h-3 transition-transform duration-200 transform">
                                            <path data-name="Trazado 501"
                                                d="M8,9.787l-6-6L3.787,2,8,6.213,12.213,2,14,3.787Z"
                                                transform="translate(-2 -2)" fill="#212121" />
                                        </svg>
                                        {{-- <span x-show="!open">@svg("ico-flecha-abajo", 'w-3 h-auto')</span>
                                        <span x-show="open">@svg("ico-flecha-arriba", 'w-3 h-auto')</span> --}}
                                    </div>
                                </button>
                            </div>

                            <div x-show="open" class="relative left-0 mt-2 py-3 px-6 origin-top-left focus:outline-none">
                                <div class="py-1" role="none">
                                    <form method="POST" action="#" role="none">
                                        {{-- usar un for --}}
                                        <div>
                                            <input class="border-gris-claro " type="checkbox" name="chapter-tema1"
                                                id="chapter-tema1">
                                            <label class="lg:text-sm px-2" for="chapter-tema1">Tema1</label>
                                        </div>
                                        <div>
                                            <input class="border-gris-claro " type="checkbox" name="chapter-tema2"
                                                id="chapter-tema2">
                                            <label class="lg:text-sm px-2" for="chapter-tema2">Tema2</label>
                                        </div>
                                </div>
                            </div>
                        </div>
                        {{-- Formato --}}
                        <div class="inline-block w-full mb-3" x-data="{ open: false }">
                            <div class="border-b-2 border-gris-claro/[.5] my-2">
                                <button type="button"
                                    class="inline-flex w-full justify-between items-center gap-x-1.5 px-6 font-bold"
                                    id="filter-access" @click="open=!open">
                                    Formato
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7.787"
                                            viewBox="0 0 12 7.787" :class="{'rotate-180': open, 'rotate-0': !open}"
                                            class="inline w-3 h-3 transition-transform duration-200 transform">
                                            <path data-name="Trazado 501"
                                                d="M8,9.787l-6-6L3.787,2,8,6.213,12.213,2,14,3.787Z"
                                                transform="translate(-2 -2)" fill="#212121" />
                                        </svg>
                                        {{-- <span x-show="!open">@svg("ico-flecha-abajo", 'w-3 h-auto')</span>
                                        <span x-show="open">@svg("ico-flecha-arriba", 'w-3 h-auto')</span> --}}
                                    </div>
                                </button>
                            </div>

                            <div x-show="open" class="relative left-0 mt-2 py-3 px-6 origin-top-left focus:outline-none">
                                <div class="py-1" role="none">
                                    <form method="POST" action="#" role="none">
                                        {{-- usar un for --}}
                                        <div>
                                            <input class="border-gris-claro " type="checkbox" name="format-curso"
                                                id="format-curso">
                                            <label class="lg:text-sm px-2" for="format-curso">Curso</label>
                                        </div>
                                        <div>
                                            <input class="border-gris-claro " type="checkbox" name="format-taller"
                                                id="format-taller">
                                            <label class="lg:text-sm px-2" for="format-taller">Taller</label>
                                        </div>
                                        <div>
                                            <input class="border-gris-claro " type="checkbox" name="format-master"
                                                id="format-master">
                                            <label class="lg:text-sm px-2" for="format-master">Master class</label>
                                        </div>
                                        <div>
                                            <input class="border-gris-claro " type="checkbox" name="format-ciencia"
                                                id="format-ciencia">
                                            <label class="lg:text-sm px-2" for="format-ciencia">Sesión científica</label>
                                        </div>
                                        <div>
                                            <input class="border-gris-claro " type="checkbox" name="format-simposio"
                                                id="format-simposio">
                                            <label class="lg:text-sm px-2" for="format-simposio">Simposio</label>
                                        </div>
                                </div>
                            </div>
                        </div>

                        {{-- otra forma --}}
                        {{-- @php $option = [["id" => "access-accesible", "name" => "Accesible a mi"]["id"=>"bb", "name"="bb"]] @endphp
                        <x-filter id="filter-access" name="Acceso" :option="$option" /> --}}
                    </div>
            </aside>

            <div class="text-left xl:w-5/6 py-5 m-auto max-w-4xl">
                <h3 class="h3 mt-3 lg:mt-0 lg:mb-6">675 Resultados</h2>
                    <div id="searchResults ">
                        {{-- componente tarjeta --}}
                        <x-search id="" pathVideo="/img/video_prueba.mp4" accessMode="Regístrate para accede"
                            registerLink="link" format="Sesión científica" title="Retos terapéuticos en la consulta privada"
                            date="5-7 OCTUBRE 2023" time="10:30-12:40" chapter="XXXIV Reunión GEDET"
                            author="J. Escalas Taberner, A. Mª Morales Callaghan, J. González Castro, E. Herrera Acosta, J. Escalas Taberner"
                            pathLogo="/img/logo-gedet.png" sponsor="XXXXXX" />

                        <x-search id="" pathVideo="" accessMode="Acceso libre" registerLink="" format="Sesión científica"
                            title="Retos terapéuticos en la consulta privada" date="5-7 OCTUBRE 2023" time="10:30-12:40"
                            chapter="XXXIV Reunión GEDET"
                            author="J. Escalas Taberner, A. Mª Morales Callaghan, J. González Castro, E. Herrera Acosta, J. Escalas Taberner"
                            pathLogo="/img/logo-gedet.png" sponsor="XXXXXX" />

                        <x-search id="" pathVideo="" accessMode="Regístrate para accede" registerLink="link"
                            format="Sesión científica" title="Retos terapéuticos en la consulta privada"
                            date="5-7 OCTUBRE 2023" time="10:30-12:40" chapter="XXXIV Reunión GEDET"
                            author="J. Escalas Taberner, A. Mª Morales Callaghan, J. González Castro, E. Herrera Acosta, J. Escalas Taberner"
                            pathLogo="/img/logo-gedet.png" sponsor="XXXXXX" />
                    </div>
            </div>
        </div>
    </div>
    <aside class="flex flex-row justify-center items-center bg-gris-patrocinio/[0.05] my-24 h-64 relative">
        <img class="absolute" src="/img/patrocinador-fondo.png" alt="patrocinio">
        <div class="flex flex-row justify-center items-center container">
            <p class="text-end p-1">GEDET 365 está patrocinado por</p>
            <img class="p-1 h-14 w-auto" src="/img/patrocinador.png" alt="patrocinio">
        </div>
    </aside>--}}
@endsection
