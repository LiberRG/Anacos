<div>
    <div class="h-[89.3vh] relative">
        <img class="w-full h-full object-cover" src="/{{ $lugar->rutaMapa }}">
        <div>
            <ul>
                @foreach ($lugar->sitios as $sitio)
                @php($style = "top: ". $sitio->posicionTop ."%; left: ". $sitio->posicionLeft . "%")
                <li class="group absolute text-magenta-oscuro font-semibold" style="{{ $style }}">
                    <a id="{{ $sitio->id }}" class="absolute group-hover:scale-150">
                        <div class="capitalize absolute -translate-x-1/4 -translate-y-12 min-w-max p-1 bg-blanco hidden group-hover:inline">
                            {{ $sitio->nombre }}
                        </div>
                        @svg("ico-position-map", "w-7 h-auto")
                    </a>
                    
                </li>
                @endforeach
            </ul>
        </div>
    </div> 
</div>

