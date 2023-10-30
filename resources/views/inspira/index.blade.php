@extends('layouts.app')

@section('page-class', 'sessionsIndex')

@section('content')
{{-- Página de inspira. --}}
@PHP($collections =[
["id" => "01",
"name"=>"Galiza máxica",
"imgCollection" => "img/juego1/1.jpg",
"description"=> "Esta es una pequeña descripcion 1",
"products" => ["img/juego1/1.jpg", "img/juego1/1.jpg", "img/juego1/1.jpg"]
],

["id" => "02",
"name"=>"Sons",
"imgCollection" => "img/juego1/1.jpg",
"description"=> "Esta es una pequeña descripcion 2",
"products" => ["img/juego1/1.jpg", "img/juego1/1.jpg", "img/juego1/1.jpg"]
],

["id" => "03",
"name"=>"Ollar da natureza",
"imgCollection" => "img/juego1/1.jpg",
"description"=> "Esta es una pequeña descripcion 3",
"products" => ["img/juego1/1.jpg", "img/juego1/1.jpg", "img/juego1/1.jpg"]
],

["id" => "04",
"name"=>"A liberdade do toxo",
"imgCollection" => "img/juego1/1.jpg",
"description"=> "Esta es una pequeña descripcion 4",
"products" => ["img/juego1/1.jpg", "img/juego1/1.jpg", "img/juego1/1.jpg"]
],

["id" => "05",
"name"=>"Combarro",
"imgCollection" => "img/juego1/1.jpg",
"description"=> "Esta es una pequeña descripcion 5",
"products" => ["img/juego1/1.jpg", "img/juego1/1.jpg", "img/juego1/1.jpg"]
]
])
<div class="h-full flex gap-5 container xl:max-w-6xl py-5">
    <div class="grid grid-rows-3 gap-5 w-fit sm:w-1/4 h-[76.3vh] sticky top-24">
        <div class="row-span-1 flex flex-col items-center bg-gris-oscuro rounded-xl p-3">
            <div class="bg-blanco rounded-full border-4 border-blanco w-fit m-2">
                @svg("isotipo-anacos", 'w-14 h-auto')
            </div>
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
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 h-[76.3vh] gap-3 overflow-y-auto w-full sm:w-4/5">
            @foreach ($collections as $collection)
            <div class="flex flex-col justify-between h-[36.5vh] bg-blanco p-3 mx-2 rounded-xl">
                <button class="self-end">@svg("ico-add", "w-10 h-auto text-azul-oscuro")</button>
                <h2 class="h2 font-medium">{{ $collection['name'] }}</h2>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection