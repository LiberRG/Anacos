@extends('layouts.app')

@section('page-class', 'viveIndex')

@section('content')
    {{-- Página de vive --}}

    <div class="h-full flex flex-col md:flex-row gap-5 container md:h-[81.6vh] xl:max-w-6xl py-5">
        <aside class="flex flex-col justify-between bg-gris-oscuro rounded-xl p-3 md:w-1/4 h- md:sticky top-24">
            <div class="flex flex-col justify-center items-center p-3 text-azul-oscuro">
                <h1 class="h1 uppercase text-3xl">Anacos</h1>
                <h3 class="h3">Galicia</h3>
            </div>
            <nav class="grow my-auto flex flex-col justify-center" role="navigation">
                @foreach (config('web.FILTRO_VIVE') as $filtro)
                    <a class="p capitalize hover:text-azul-oscuro md:py-3" @if (isset($lugar) && $lugar != null) href= "{{ route('vive.index', $lugar->nombre) }}"
                            @else
                                    href= "{{ route('vive.index') }}" @endif>
                        {{ $filtro }}
                    </a>
                @endforeach
            </nav>
            <div id="name-site" class="text-azul-oscuro">
                <h3 class="h3 font-normal">Vive</h3>
                <h1 id="titleVive" class="h1">Galicia</h1>
            </div>
        </aside>
        <main class="md:w-3/4" role="main">
            <div class="flex flex-wrap justify-evenly font-bold text-azul-oscuro w-full my-2 gap-3">
                @foreach ($lugares as $a)
                    <a class="" href="{{ route('vive.index', $a['name']) }}">{{ $a['name'] }}</a>
                @endforeach
            </div>
            <div class="overflow-y-auto">
                @foreach ($services as $service)
                <x-service :service=$service ></x-service>
                @endforeach
            </div>
        </main>

    </div>

    {{-- @php($pathImg = $service->'pathImg')
        @php($title = $service->'nombre')
        @php($description = $service->'description'])
        @php($date = $service->'data'])
        @php($contact = $service->'contact'])
        @php($details = $service->'detailles']) --}}


@endsection
