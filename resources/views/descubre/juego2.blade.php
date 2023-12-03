@extends('layouts.app')

@section('page-class', 'sessionsIndex')

@section('content')
<div class="flex flex-col-reverse md:flex-row justify-between gap-x-8 container py-3 md:h-[81.6vh] xl:max-w-7xl relative">
    <main id="tablero" class="flex justify-center flex-wrap md:overflow-y-auto md:basis-3/4 h-full" role="main">

        <div id="palabras-sopadeletras"></div>
        <div id="contenedor"></div>


    </main>
    <aside class="flex md:flex-col justify-between gap-y-5 gap-x-3 md:basis-1/4 mb-3 md:mb-0" x-cloak x-data="{ dropdown: false }">
        <div @click="dropdown=!dropdown" class="flex md:hidden items-center justify-between gap-x-3 boton mt-3 px-3 grow cursor-pointer">
            Descubre Galicia
            <span x-bind:class="dropdown ? 'rotate-180':'rotate-0'">@svg("ico-down", "h-3 w-auto")</span>
        </div>
        <div class="w-full min-w-[200px] bg-gris-oscuro md:flex items-center rounded-xl p-5 md:h-[75%]" x-bind:class="dropdown ? 'flex absolute top-[4.5rem]': 'hidden'">
            <div id="description" class="overflow-y-auto h-full">
                <div id="title-description" class="h2 pb-5"></div>
                <div id="text-description"></div>
            </div>
            <div id="name-collection" class="overflow-y-auto h-full flex flex-col justify-between">
                <div class="my-auto flex flex-col gap-3">
                    <p class="p pl-0 font-bold">¿Jugamos una sopa de letras?</p>
                    
                    <p class="p pl-0">Buscan cada una de las palabra que te proponemos. Pulsa sobre la primera letra de la palabra y sin soltar muevete hasta la ultima. Si es correcta la palabra cambiara de color.</p>
                </div>
                <div>
                    <h3 class="h3 font-normal">Descubre</h3>
                    <h1 id="titleDescubre" class="h1">Galicia</h1>
                </div>
            </div>
        </div>
        <button type="button" class="boton mt-3 px-3" onclick="reload()">
            Nuevo juego
        </button>
        <button type="button" class="boton mt-3 px-3 text-magenta-oscuro border-magenta-oscuro" onclick="solve()">
            Resolver
        </button>
    </aside>
</div>

<script>


</script>
@endsection