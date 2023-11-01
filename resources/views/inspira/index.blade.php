@extends('layouts.app')

@section('page-class', 'sessionsIndex')

@section('content')
{{-- Página de inspira. --}}
@PHP($collections =[
["id" => "01",
"name"=>"Galiza máxica",
"imgCollection" => "img/juego1/2.jpg",
"description"=> "Esta es una pequeña descripcion 1",
"products" => ["img/juego1/1.jpg", "img/juego1/1.jpg", "img/juego1/1.jpg","img/juego1/1.jpg"]
],

["id" => "02",
"name"=>"Sons",
"imgCollection" => "img/juego1/2.jpg",
"description"=> "Esta es una pequeña descripcion 2",
"products" => ["img/juego1/1.jpg", "img/juego1/1.jpg", "img/juego1/1.jpg","img/juego1/1.jpg"]
],

["id" => "03",
"name"=>"Ollar da natureza",
"imgCollection" => "img/juego1/2.jpg",
"description"=> "Esta es una pequeña descripcion 3",
"products" => ["img/juego1/1.jpg", "img/juego1/1.jpg", "img/juego1/1.jpg","img/juego1/1.jpg"]
],

["id" => "04",
"name"=>"A liberdade do toxo",
"imgCollection" => "img/juego1/2.jpg",
"description"=> "Esta es una pequeña descripcion 4",
"products" => ["img/juego1/1.jpg", "img/juego1/1.jpg", "img/juego1/1.jpg","img/juego1/1.jpg"]
],

["id" => "05",
"name"=>"Combarro",
"imgCollection" => "img/juego1/2.jpg",
"description"=> "Esta es una pequeña descripcion 5",
"products" => ["img/juego1/1.jpg", "img/juego1/1.jpg", "img/juego1/1.jpg","img/juego1/1.jpg"]
]
])
<div class="h-full flex flex-col md:flex-row gap-5 container md:h-[81.6vh] xl:max-w-6xl py-5">
    <div class="md:grid grid-rows-3 gap-5 md:w-1/4 md:sticky top-24">
        <div class="row-span-1 flex-col justify-center items-center bg-gris-oscuro rounded-xl p-3 hidden md:flex">
            <!--<div class="bg-blanco rounded-full border-4 border-blanco w-fit my-2 mx-auto">
                @svg("isotipo-anacos", 'w-8 h-auto')
            </div>-->
            <h1 class="h1 uppercase">Anacos</h1>
            <h3 class="h3">Galicia</h3>
        </div>
        <div class="row-start-2 row-end-4 flex items-end bg-azul-claro text-blanco rounded-xl p-3">
            <div id="name-collection">
                <h3 class="h3 font-normal">Inspirate</h3>
                <h1 class="h1">Galicia</h1>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap gap-3 md:overflow-y-auto w-full h-full md:w-4/5 relative">
        @foreach ($collections as $collection)
        <div x-data="{ desplegable: false }" class=" flex flex-col bg-blanco p-3 rounded-xl w-full" x-bind:class="desplegable ? 'h-full absolute':'h-[36.9vh]  sm:w-[48.9%] md:w-[45%] lg:w-[30%]'">
            <div class="flex justify-between w-full" x-bind:class="desplegable ? 'flex-row items-center' : 'flex-col-reverse h-full'">
                <h2 class="h2 font-bold text-azul-oscuro">{{ $collection['name'] }}</h2>
                <button class="self-end" @click="desplegable=!desplegable">@svg("ico-add", "w-10 h-auto text-azul-oscuro")</button>
            </div>
            <div class="flex flex-col lg:flex-row items-center justify-center lg:justify-start gap-3 lg:gap-8 my-3 h-full " x-bind:class="desplegable ?'inline-block' : 'hidden'">
                <div class="w-[75%] xs:w-[36%] sm:w-[18%] md:w-[22%] lg:w-[33%] xl:w-1/3">
                    <img class="rounded-xl" src="{{ $collection['imgCollection'] }}" alt="">
                </div>
                <div class="grid lg:flex flex-wrap justify-center lg:justify-start grid-cols-2 sm:grid-cols-4 lg:grid-cols-2 gap-3 lg:w-3/5">
                    @foreach ($collection['products'] as $product)
                    <img class="rounded-xl w-auto lg:w-[26.5%] xl:w-[27%]" src="{{ $product }}" alt="">
                    @endforeach
                </div>
            </div>
            <div x-bind:class="desplegable ?'inline-block' : 'hidden'">
                <p>Para cualquier pedido contacta con nosotros:
                <div class="sm:flex justify-between max-w-sm">
                    <p><b>Telf: </b>+34 000 000 000 </p>
                    <p><b>e-mail:</b> <a href="mailto:info@anacos.com?subject=Pedido colección {{ $collection['name'] }}" class="text-magenta-oscuro hover:text-azul-claro">info@anacos.com</a></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>

@endsection