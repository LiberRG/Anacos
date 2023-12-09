<div x-cloak x-data="{ dropdown: false }">
    <div class="bg-blanco rounded-xl p-3 pb-2 my-3">
        <div id="content" class="flex gap-x-3">
            @if($service->getImagenId() != null)
            <span class="w-[15%] ">
                <div class="relative" id="" style="height:0;width:100%;padding-bottom:120%">
                    <div class="absolute w-full h-full flex justify-center">
                        <img class="h-full w-auto object-cover" src="{{$service->getImagen->getRutaImg()}}" alt="{{$service->getImagen->getAlt()}}">
                    </div>
                </div>
            </span>
            @endif
            <div class="flex flex-col justify-between w-[85%] mb-2">
                <h1 class="uppercase">{{$service->getNombre()}}</h1>
                <p class="grow">{{$service->getDescripcion()}}</p>

                @if($service->getDireccion() != null)
                <p class="text-start"><span>@svg("ico-position-map","text-negro/[0.6] h-3 w-auto mr-2 inline")</span>{{$service->getDireccion()}}</p>
                @endif


                @if($service->getFecha() != null)
                <div>
                    <p class="text-start"><span>@svg("ico-calendar","text-negro/[0.6] h-3 w-auto mr-2 inline")</span>{{$service->getFecha()}}</p>
                </div>
                @endif

            </div>
        </div>
        <div x-bind:class="dropdown ? 'inline-block mt-3':'hidden'">
            @if($service->getDetalles() != null)
            <p class="text-start">{{$service->getDetalles()}}</p>
            @endif
            @if($service->getWeb() != null)
            <p class="text-start"><span>@svg("ico-web","text-negro/[0.6] h-3 w-auto mr-2 inline")</span>
                <a href="http://$service->getWeb()">{{$service->getWeb()}}</a>
            </p>
            @endif
            <div class="flex flex-wrap gap-x-3">
                @if($service->getTelefono() != null)
                <p class="text-start"><span>@svg("ico-telefono","text-negro/[0.6] h-3 w-auto mr-2 inline")</span>{{$service->getTelefono()}}</p>
                @endif
                @if($service->getEmail() != null)
                <p class="text-start"><span>@svg("ico-email","text-negro/[0.6] h-3 w-auto mr-2 inline")</span>{{$service->getEmail()}}</p>
                @endif
            </div>

        </div>
        @if($service->getDetalles() != null)
        <div class="flex justify-end items-center">
            <div class="grow flex justify-center text-gris-oscuro">
                <span class="cursor-pointer" @click="dropdown=!dropdown" x-bind:class="dropdown ? 'rotate-180':'rotate-0'">@svg("ico-down", "h-3 w-auto")</span>
            </div>
            @endif
            @if($service->getPuntuacion() != null)
            <div class="text-magenta-oscuro flex items-center">
                <p>{{ $service->getPuntuacion() }}</p>
                <span>@svg("ico-star", "h-4 w-auto ml-1")</span>
            </div>
        </div>
        @endif
    </div>
</div>