<div class="">
    <div class="h-[45vh] md:h-[89.4vh] relative">
        <img class="w-full h-full" src="/{{ $lugar->rutaMapa }}">
        <div>
            @foreach ($lugar->sitios as $sitio)
            @php($style = "top: ". $sitio->getPosicionTop() ."%; left: ". $sitio->getPosicionLeft() . "%;")
            <div id="s" x-data="{mostrar:false }" class="absolute text-magenta-oscuro font-semibold" @mouseleave="mostrar = false" style="{{ $style }}">
                <div id="{{ $sitio->getId() }}" class="absolute hover:scale-150" @mouseover="mostrar = true">
                    @svg("ico-position-map", "w-7 h-auto")
                </div>
                <div x-cloak x-show="mostrar" class="fixed md:absolute top-[40px] left-0 h-[85%] md:h-auto md:w-80 p-5 md:p-2 m-3 md:m-0 rounded-lg bg-blanco z-[100]">
                    <div class="md:hidden text-azul-oscuro flex justify-end" @click="mostrar = false">@svg("ico-close", "w-3 h-auto")</div>
                    <h2 class="h2 capitalize text-center mb-3">{{ $sitio->getNombre() }}</h2>
                    <div class="flex flex-col items-center justify-between gap-3 md:gap-2">
                        <img class="w-2/3 sm:w-1/2 max-h-80" src="/{{ $sitio->getImagen->getRutaImg() }}" alt="{{ $sitio->getImagen->getAlt() }}">
                        <p class="p text-negro text-sm">{{ $sitio->getDescripcion() }}</p>
                    </div>
                </div>
                <div x-cloak x-bind:class="mostrar ? 'inline' : 'hidden'" class="w-full fixed inset-0 z-[90] bg-negro/[0.7] md:hidden" @click="desplegable('open')">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>