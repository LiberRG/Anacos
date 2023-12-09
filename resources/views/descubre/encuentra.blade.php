@extends('layouts.app')

@section('page-class', 'descubreEncuentra')

@section('content')
<div class="flex flex-col-reverse md:flex-row justify-between gap-x-8 container py-3 md:h-[81.6vh] min-h-[81.6vh] xl:max-w-7xl relative">
    <main id="tablero" class="grow flex 
    items-center flex-col gap-3 md:overflow-y-auto md:basis-3/4 h-full" role="main">

        <div id="words"></div>
        <div id="puzzle" class="grow flex flex-col justify-center border rounded-lg p-4 bg-blanco h-full w-full max-w-[600px] "></div>

    </main>
    <aside x-cloak class="flex md:flex-col justify-between gap-3 md:basis-1/4" x-cloak x-data="{ dropdown: false }">
        <div class="grow cursor-pointer md:h-[80%]">
            <div @click="dropdown=!dropdown" class="flex md:hidden items-center justify-between gap-x-3 boton px-3 mb-3 md:mb-0">
                Descubre Galicia
                <span x-bind:class="dropdown ? 'rotate-180':'rotate-0'">@svg("ico-down", "h-3 w-auto")</span>
            </div>
            <div class="min-w-[200px] bg-gris-oscuro flex items-center rounded-xl p-5 mr-3 md:m-auto md:h-full" x-bind:class="dropdown ? 'absolute md:static': 'hidden md:flex'">
                <div id="name-collection" class="h-full w-full flex flex-col justify-between gap-3 cursor-default" x-data="{ activeSlide: 0}">
                    <div class="flex flex-col justify-between w-full h-[80%]">
                        <div class="overflow-y-auto h-[200px] w-full md:h-[94%]">
                            @foreach ($dataJuego as $key => $slide)
                            <div class="my-auto flex flex-col gap-2 w-full" x-show="activeSlide ==={{$key}}">
                                <p class="p pl-0 font-bold">{{$slide->getNombre()}}</p>
                                <div class="flex md:flex-col gap-3">
                                    @if($slide->getImagen != null)
                                    <div class="w-1/2 md:w-full">
                                        <div class="relative grow" style="height:0;width:100%;padding-bottom:80%" x-bind:class="desplegable ?'hidden':'inline-block'">
                                            <div class="absolute w-full h-full flex justify-end">
                                                <img class="w-full object-cover" src="{{ $slide->getImagen->getRutaImg() }}" alt="{{ $slide->getImagen->getAlt() }}">
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <p class="p pl-0 pt-0 w-full">{{$slide->getDescripcion()}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="flex justify-between w-full">
                            <button class="flex items-center justify-center text-azul-oscuro rotate-90" @click="activeSlide = activeSlide === 0 ? {{ count($dataJuego)-1}} : activeSlide - 1">
                                @svg("ico-down", "h-1.5 w-auto hover:text-magenta-oscuro hover:scale-125")
                            </button>
                            <div class="flex justify-between px-3 gap-2">
                                @foreach ($dataJuego as $key => $slide)
                                <button class="h-2 w-3 rounded-full" :class="{ 'bg-magenta-oscuro': activeSlide === {{$key}}, 'bg-azul-oscuro': activeSlide !== {{$key}} }" @click="activeSlide = {{$key}}">
                                </button>
                                @endforeach
                            </div>
                            <button class="flex items-center justify-cente text-azul-oscuro -rotate-90" @click="activeSlide = (activeSlide === {{ count($dataJuego)-1}}) ? 0 : activeSlide + 1">
                                @svg("ico-down", "h-1.5 w-auto hover:text-magenta-oscuro hover:scale-125")
                            </button>
                        </div>
                    </div>
                    <div class="hidden md:inline">
                        <h3 class="h3 font-normal">Descubre</h3>
                        <h1 id="titleDescubre" class="h1">Galicia</h1>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="boton px-3 mb-3 md:mb-0" onclick="create()">
            Nuevo juego
        </button>
        <button type="button" class="boton px-3 mb-3 md:mb-0 text-magenta-oscuro border-magenta-oscuro" onclick="solve()">
            Resolver juego
        </button>
    </aside>
</div>

<script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/wordfind.js"></script>
<script type="text/javascript" src="js/wordfindgame.js"></script>

<script>
    const LETRAS_ANCHO = 15;
    const LETRAS_ALTO = 14;
    // var words = ['Develoteca', 'cursos', 'ayuda', 'Videos', 'Tutoriales', 'Plugins'];
    var gamePuzzle, words = [];
    var data = <?= json_encode($dataJuego) ?>;
    data.forEach((element, key) => {
        if (key != 0) {
            words.push(element.nombre);
        }
    });

    window.addEventListener("DOMContentLoaded", create(), false);

    function create() {
        var opciones = {
            height: LETRAS_ALTO,
            width: LETRAS_ANCHO,
            // fillBlanks: false
        }
        gamePuzzle = wordfindgame.create(words, '#puzzle', '#words', opciones);
        console.log()
    }

    function solve() {
        wordfindgame.solve(gamePuzzle, words);
    }
</script>
@endsection