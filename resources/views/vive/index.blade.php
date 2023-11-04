@extends('layouts.app')

@section('page-class', 'eventsIndex')

@section('content')
{{-- Página de vive --}}

@php( $lugares = [
["id" => "01",
"name" => "Combarro",
"top" => "60",
"left" => "16"],

["id" => "02",
"name" => "Illas Cies",
"top" => "66",
"left" => "10"],

["id" => "03",
"name" => "Playa catedrales",
"top" => "3",
"left" => "78"]
])
@PHP($service=[
"pathImg" => "img/juego1/4.jpg",
"title" => "titulo",
"description" => "description",
"date" => " f ",
"contact" => [
"telefono" => "+34 111 222 444 555",
"email" => "email@email.com",
],
"details"=> [
"text" => "",
"email" => "email@email.com",
"web" => "www.web.com",
"direction" => "calle cp y provincia",
"score" => 3,
],
])

<div class="h-full flex flex-col md:flex-row gap-5 container md:h-[81.6vh] xl:max-w-6xl py-5">
    <aside class="flex flex-col justify-between bg-gris-oscuro rounded-xl p-3 md:w-1/4 h- md:sticky top-24">
        <div class="flex flex-col justify-center items-center p-3 text-azul-oscuro">
            <h1 class="h1 uppercase text-3xl">Anacos</h1>
            <h3 class="h3">Galicia</h3>
        </div>
        <nav class="grow my-auto flex flex-col justify-center">
            <a class="p hover:text-azul-oscuro md:py-3" href="{{ route('vive.index') }}">
                Alojamiento
            </a>
            <a class="p hover:text-azul-oscuro md:py-3" href="{{ route('vive.index') }}">
                Servicios turísticos
            </a>
            <a class="p hover:text-azul-oscuro md:py-3" href="{{ route('vive.index') }}">
                Como llegar
            </a>
            <a class="p hover:text-azul-oscuro md:py-3" href="{{ route('vive.index') }}">
                Cultura y tradiciones
            </a>
            <a class="p hover:text-azul-oscuro md:py-3" href="{{ route('vive.index') }}">
                Sabores del lugar
            </a>
            <a class="p hover:text-azul-oscuro md:py-3" href="{{ route('vive.index') }}">
                Paisajes
            </a>
        </nav>
        <div id="name-site" class="text-azul-oscuro">
            <h3 class="h3 font-normal">Vive</h3>
            <h1 id="titleVive" class="h1">Galicia</h1>
        </div>
    </aside>
    <main class="md:w-3/4">
        <div class="flex flex-wrap justify-evenly font-bold text-azul-oscuro w-full my-2 gap-3">
            @foreach ($lugares as $lugar)
            <button class="">{{ $lugar['name'] }}</button>
            @endforeach
        </div>
        <div class="overflow-y-auto">
            @php($pathImg = $service['pathImg'])
             @php($title = $service['title'])
             @php($description = $service['description'])
             @php($date = $service['date'])
             @php($contact = $service['contact'])
             @php($details = $service['details'])
            <x-service :pathImg=$pathImg :title=$title :description=$description :date=$date :contact=$contact :details=$details></x-service>
        </div>
    </main>

</div>
@endsection