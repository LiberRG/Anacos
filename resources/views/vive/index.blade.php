@extends('layouts.app')

@section('page-class', 'viveIndex')

@section('content')
    {{-- Página de vive --}}

    <div class="h-full flex flex-col md:flex-row gap-5 container md:h-[81.6vh] xl:max-w-6xl py-5">
        <aside class="flex flex-col justify-between bg-gris-oscuro rounded-xl p-3 md:w-1/4 h- md:sticky top-24">
            <div class="hidden md:flex flex-col justify-center items-center p-3 text-azul-oscuro">
                <h1 class="h1 uppercase text-3xl">Anacos</h1>
                <h3 class="h3">Galicia</h3>
            </div>
            <nav class="grow my-auto flex flex-col justify-center gap-y-2" role="navigation">
                @foreach (config('web.FILTRO_VIVE') as $key => $filtro)
                    <a class="p capitalize hover:text-azul-oscuro hover:scale-105 hidden md:inline 
                    <?php if($filtrar == $key){ ?> text-magenta-oscuro <?php } ?>
                    "
                    @if (isset($lugar) && $lugar != null ) 
                    href= "{{ route('vive.index',  [$key, $lugar->getId()]) }}"
                    @else
                    href= "{{ route('vive.index', $key) }}" 
                    @endif
                    >
                        {{ $filtro }}
                    </a>
                    @endforeach
                <div class="flex justify-between md:hidden capitalize">                    
                    @if (isset($lugar) && $lugar != null )
                    <p>{{$lugar->getNombre()}}</p>
                    @endif
                    <p >{{config('web.FILTRO_VIVE')[$filtrar]}}</p>
                </div>

            </nav>
            <div id="name-site" class="hidden md:inline text-azul-oscuro">
                <h3 class="h3 font-normal">Vive</h3>
                <h1 id="titleVive" class="h1">Galicia</h1>
            </div>
        </aside>
        <main class="md:w-3/4 h-full" role="main">
            <div class="flex flex-wrap justify-evenly font-bold text-azul-oscuro w-full my-2 gap-3">
                @foreach ($lugares as $lg)
                    <a class="capitalize hover:scale-105 
                    <?php if($lugar != null && $lugar == $lg->getNombre()){ ?> border-b-2 border-current <?php } ?>
                    " href="{{ route('vive.index', [$filtrar,$lg->getId()]) }}">{{ $lg->getNombre() }}</a>
                @endforeach
            </div>
            <div class="overflow-y-auto h-[70vh] pr-3">
                @if(count($services)>0)
                @foreach ($services as $service)
                <x-service :service=$service ></x-service>
                @endforeach
                @else
                <p class="p mt-10">No se han encontrado resultados para su busqueda.</p>
                @endif
            </div>
        </main>
    </div>
@endsection
