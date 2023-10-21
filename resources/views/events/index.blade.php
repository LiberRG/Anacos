@extends('layouts.app')

@section('page-class', 'eventsIndex')

@section('content')
    {{-- Página de inicio, con el mosaico de eventos --}}
    <article class="flex flex-row justify-center items-end lg:my-10 container">
        <div class="hidden lg:inline">
            @svg("logo-gedet-365-vertical")
        </div>

        <div class="border rounded-xl border-solid border-gris-claro/[0.5] p-1 lg:p-2 h-fit lg:basis-2/6 w-full">
            <form class="flex flex-row justify-between items-center" method="get" id="buscarform">
                <input class="text-base border-none" type="search" value=""
                    placeholder="Buscar por tema, año, tipo de ponencia,..." />
                <button class="rounded-lg bg-ocre-claro/[0.8] p-3" type="submit">
                    @svg("ico-lupa", "w-4 h-auto")
                </button>
            </form>
        </div>
    </article>
    <article class="lg:mt-24 mt-8">
        <h1 class="h1 text-3xl lg:text-4xl text-center my-6">Eventos</h1>
        <nav class="flex justify-between lg:max-w-screen-lg my-2 container my-6">
            <a class="border-b-4 border-white text-gris-claro hover:border-ocre hover:text-gris-oscuro lg:hover:border-white lg:hover:underline lg:hover:text-bold lg:hover:decoration-1 lg:hover:decoration-gris-oscuro lg:text-gris-oscuro"
                href="">TODOS</a>
            <a class="border-b-4 border-white text-gris-claro hover:border-ocre hover:text-gris-oscuro lg:hover:border-white lg:hover:underline lg:hover:text-bold lg:hover:decoration-1 lg:hover:decoration-gris-oscuro lg:text-gris-oscuro"
                href="">CONCRESOS</a>
            <a class="border-b-4 border-white text-gris-claro hover:border-ocre hover:text-gris-oscuro lg:hover:border-white lg:hover:underline lg:hover:text-bold lg:hover:decoration-1 lg:hover:decoration-gris-oscuro lg:text-gris-oscuro"
                href="">EVENTOS WEB</a>
            <a class="border-b-4 border-white text-gris-claro hover:border-ocre hover:text-gris-oscuro lg:hover:border-white lg:hover:underline lg:hover:text-bold lg:hover:decoration-1 lg:hover:decoration-gris-oscuro lg:text-gris-oscuro"
                href="">TV</a>
            <a class="border-b-4 border-white text-gris-claro hover:border-ocre hover:text-gris-oscuro lg:hover:border-white lg:hover:underline lg:hover:text-bold lg:hover:decoration-1 lg:hover:decoration-gris-oscuro lg:text-gris-oscuro"
                href="">OTROS</a>
        </nav>
        <section class="bg-gris-calido py-6">
            <div class="container grid lg:grid-cols-2 xl:grid-cols-4 ">
                <x-card id="" pathImg="/img/imagen_prueba.jpeg" nameImg="" accessMode="Regístrate para accede"
                    date="6-7 OCTUBRE 2023" title="XXXIV Reunión del Grupo Español de Dermatologís Estética (GEDET)"
                    category="Concreso" pathLogo="/img/logo-gedet.png" registerLink="link" />
                <x-card id="" pathImg="/img/imagen_prueba.jpeg" nameImg="" accessMode="Acceso Libre"
                    date="10-12 Noviembre 2022"
                    title="XXXIV Reunión del Grupo Español de Dermatologís Estética y Terapéutica de la AEDV (GEDET)"
                    category="Concreso" pathLogo="/img/logo-gedet.png" registerLink="" />
                <x-card id="" pathImg="/img/imagen_prueba.jpeg" nameImg="" accessMode="Regístrate para accede"
                    date="7-9 OCTUBRE 2021"
                    title="XXXIV Reunión del Grupo Español de Dermatologís Estética y Terapéutica de la AEDV (GEDET)"
                    category="TV" pathLogo="/img/logo-gedet.png" registerLink="link" />
                <x-card id="" pathImg="/img/imagen_prueba.jpeg" nameImg="" accessMode="Acceso abierto"
                    date="10-12 Noviembre 2019"
                    title="XXXIV Reunión del Grupo Español de Dermatologís Estética y Terapéutica de la AEDV (GEDET)"
                    category="Concreso" pathLogo="/img/logo-gedet.png" registerLink="" />
            </div>
        </section>
    </article>
    <aside class="flex flex-row justify-center items-center h-64 relative">
        <img class="absolute" src="/img/patrocinador-fondo.png" alt="patrocinio">
        <div class="flex flex-row justify-center items-center container">
            <p class="text-end p-1">GEDET 365 está patrocinado por</p>
            <img class="p-1 h-14 w-auto" src="/img/patrocinador.png" alt="patrocinio">
        </div>
    </aside>
@endsection
