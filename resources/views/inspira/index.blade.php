@extends('layouts.app')

@section('page-class', 'inspiraIndex')

@section('content')
{{-- Página de inspira. --}}

<div class="h-full flex flex-col md:flex-row gap-5 container md:h-[81.6vh] xl:max-w-7xl py-5">
    <aside class="md:grid grid-rows-3 gap-5 md:w-1/4 md:sticky top-24">
        <div class="row-span-1 flex-col justify-center items-center bg-gris-oscuro rounded-xl p-5 hidden md:flex">
           
            <h1 class="h1 uppercase md:text-3xl lg:text-4xl">Anacos</h1>
            <h3 class="h3">Galicia</h3>
        </div>
        <div class="min-w-[200px] row-start-2 row-end-4 flex items-end bg-azul-claro text-blanco rounded-xl p-5">
            <div id="name-collection">
                <h3 class="h3 font-normal">Inspírate</h3>
                <h1 class="h1">Galicia</h1>
            </div>
        </div>
    </aside>
    <main class="flex flex-wrap gap-3 md:overflow-y-auto w-full h-full md:w-4/5 relative md:mx-3" role="main" >
        @foreach ($data as $collection)
        <div x-cloak x-data="{ desplegable: false }" class=" flex flex-col bg-blanco p-3 rounded-xl w-full" x-bind:class="desplegable ? 'justify-between z-10':'h-[50vh] sm:h-[36.9vh]  sm:w-[48.9%] md:w-[48%]  xl:w-[32.3%]'">
            <div class="flex justify-between w-full gap-2" x-bind:class="desplegable ? 'flex-row items-center' : 'flex-col-reverse h-full'">
                <h2 class="h2 font-bold text-azul-oscuro">{{ $collection->getNombre() }}</h2>
                <div class="relative grow" style="height:0;width:100%;padding-bottom:46%" x-bind:class="desplegable ?'hidden':'inline-block'">
                    <div class="absolute w-full h-full flex justify-end">
                        <img class="w-full object-cover" src="{{ $collection->getImgPortada->getRutaImg() }}" alt="{{ $collection->getImgPortada->getAlt() }}">
                    </div>
                </div>
                <button class="self-end" @click="desplegable=!desplegable">@svg("ico-add", "w-6 h-auto text-azul-oscuro")</button>
            </div>
            <div class="grow grid grid-cols-1 sm:grid-cols-3 gap-5 my-3 mx-auto justify-between w-full sm:w-[82%] md:w-[90%] md:h-80% lg:w-full" x-bind:class="desplegable ?'inline-block' : 'hidden'">
                <div class="md:row-span-2 col-span-1 w-4/5 sm:w-full m-auto">
                    <img class="rounded-xl h-full" src="{{ $collection->getImgPortada->getRutaImg() }}" alt="{{ $collection->getImgPortada->getAlt() }}">
                </div>
                <div class="col-span-2 row-span-1 self-end  font-normal">
                    <p>{{ $collection->getDescripcion() }}</p>
                </div>
                <div class="flex flex-wrap justify-center lg:justify-start items-end gap-3 col-span-2 sm:col-span-3 md:col-span-2 row-span-1 h-[300px] sm:h-[150px] overflow-y-auto">
                    @foreach ($collection->getImagenesColeccion as $product)
                    <img class="rounded-xl h-2/3" src="{{ $product->getRutaImg() }}" alt="{{ $product->getAlt() }}">
                    @endforeach
                </div>
            </div>
            <div x-bind:class="desplegable ?'inline-block' : 'hidden'">
                <p>Para cualquier pedido contacta con nosotros:
                <div class="sm:flex justify-between max-w-sm">
                    <p><b>Telf: </b>+34 000 000 000 </p>
                    <p><b>e-mail:</b> <a href="mailto:info@anacos.com?subject=Pedido colección {{ $collection->getNombre() }}" class="text-magenta-oscuro hover:text-azul-claro">info@anacos.com</a></p>
                </div>
            </div>
        </div>
        @endforeach
    </main>
</div>
</div>

@endsection