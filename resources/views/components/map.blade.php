<div>
    <div class="h-[89.3vh]">
        <img class="w-full h-full object-cover" src="{{ $lugar->rutaMapa }}" alt="">
        <div>
            <ul>
                @foreach ($lugar->sitios as $sitio)
                @php($style = "top: ". $sitio->posicionTop ."%; left: ". $sitio->posicionLeft . "%")
                <li class="group absolute text-magenta-oscuro font-semibold" style="{{ $style }}">
                    <a id="{{ $sitio->id }}" class="absolute group-hover:scale-150">
                        @svg("ico-position-map", "w-7 h-auto")
                        <span class="capitalize absolute -translate-x-1/3 translate-y-full min-w-max p-1">
                            {{ $sitio->nombre }}
                        </span>
                    </a>
                    
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    

    
</div>

