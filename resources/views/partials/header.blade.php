<header id="header" class="sticky top-0 z-50" role="banner">
    <div x-data="header()">
        <nav class="bg-azul-claro flex flex-row justify-between md:items-center py-3 z-50 sm:px-8 px-4 relative font-medium">
            <a href="/" class="bg-blanco rounded-full border-4 border-blanco hover:scale-105">@svg("isotipo-anacos", 'w-12 h-auto')</a>

            <div x-cloak class="md:inline text-blanco" x-bind:class="open ? 'inline-block':''">
                <div id="navDown" class="md:static md:inline w-full md:text-center grow" x-bind:class="open ? 'absolute right-0 text-start bg-azul-claro/[0.9] z-50 ' : 'hidden' ">

                    <span class="flex items-start gap-x-6 flex-wrap md:inline
                        text-lg font-bold md:font-normal
                        p-5 xl:px-8 2xl:px-10">
                        <button @click="desplegable('vive')" 
                        class="text-start 2xs:text-center uppercase min-w-[33%] md:min-w-max hover:md:text-magenta-oscuro hover:md:scale-105 font-semibold
                        @if (Route::currentRouteName() == "vive.index" )
                        text-magenta-oscuro
                        @else
                        text-blanco
                        @endif 
                        "                       
                        x-bind:class="vive ? 'md:text-magenta-oscuro' : ''">
                            Vive                  
                        </button>
                        <div class="font-normal min-w-max flex flex-col
                        text-start text-negro" x-bind:class="vive ? 'md:absolute md:right-0 md:bg-azul-claro/[0.9] md:z-50 md:w-2/5 lg:w-1/3' :'md:hidden'">                            
                            @foreach (config('web.FILTRO_VIVE') as $key => $filtro )
                            <a class="p capitalize hover:text-azul-oscuro hover:scale-105 md:p-5 md:border-b md:border-blanco"
                            @if (isset($lugar) && $lugar != null ) 
                            href= "{{ route('vive.index', [$key ,$lugar]) }}"
                            @else
                            href= "{{route('vive.index', $key)}}"
                            @endif
                            >
                                {{$filtro}}
                            </a>
                            @endforeach
                        </div>
                    </span>
                    <span class=" flex gap-x-6 items-start flex-wrap md:inline
                        text-lg font-bold md:font-normal
                        p-5 xl:px-8 2xl:px-10">
                        <a href="{{ route('inspira.index') }}" class="inline-block 2xs:text-center uppercase min-w-[33%] md:min-w-max hover:md:text-magenta-oscuro hover:scale-105 font-semibold
                        @if (Route::currentRouteName() == 'inspira.index')
                        text-magenta-oscuro
                        @else
                        text-blanco
                        @endif
                        ">
                            Inspírate
                        </a>
                    </span>
                    <span class=" flex gap-x-6 items-start flex-wrap md:inline
                        text-lg font-bold md:font-normal
                        p-5 xl:px-8 2xl:px-10">
                        <button @click="desplegable('juega')" class="text-start 2xs:text-center uppercase min-w-[33%] md:min-w-max hover:md:text-magenta-oscuro hover:md:scale-105 font-semibold
                        @if (Route::currentRouteName() == 'descubre.empareja' || Route::currentRouteName() == 'descubre.encuentra')
                        text-magenta-oscuro
                        @else
                        text-blanco 
                        @endif
                        " 
                        x-bind:class="juega ? 'md:text-magenta-oscuro' : 'md:text-blanco'">
                            Descubre
                        </button>
                        <div class="font-normal min-w-max flex flex-col
                        text-start text-negro" x-bind:class="juega ? 'md:absolute md:right-0 md:bg-azul-claro/[0.9] md:z-50 md:w-2/5 lg:w-1/3' :'md:hidden'">
                            <a class="p hover:text-azul-oscuro hover:scale-105 md:p-5 md:border-b md:border-blanco" href="{{ route('descubre.empareja') }}">
                                Empareja y descubre
                            </a>

                            <a class="p hover:text-azul-oscuro hover:scale-105 md:p-5" href="{{ route('descubre.encuentra') }}">
                                Encuentra y descubre
                            </a>
                        </div>
                    </span>
                </div>
            </div>

            <div class="md:hidden h-12 text-blanco">
                <button name="open" @click="desplegable('open')">
                    <div class="w-10 h-12 flex items-center justify-center relative">
                        <span x-bind:class="open ? 'translate-y-0 rotate-45' : '-translate-y-4'" class="transform transition w-full h-0.5 bg-current absolute"></span>

                        <span x-bind:class="open ? 'opacity-0 translate-x-3' : 'opacity-100'" class="transform transition w-full h-0.5 bg-current absolute"></span>

                        <span x-bind:class="open ? 'translate-y-0 -rotate-45' : 'translate-y-4'" class="transform transition w-full h-0.5 bg-current absolute"></span>
                    </div>
                </button>
            </div>

        </nav>

        <div x-cloak x-bind:class="open ? 'inline' : 'hidden'" class="w-full fixed inset-0 z-30 bg-white/[0.9] md:hidden" @click="desplegable('open')">
        </div>

    </div>
</header>

<script>
    window.onload = function(){
        positionNav()
        window.onscroll = () => {
            positionNav()}
    }

    // Función para alpine
    function header() {
        return {
            open: false,
            vive: false,
            inspira: false,
            juega: false,
            
            // Método que cierra todos los desplagables excepto el que se acaba de pulsar
            desplegable(event) {
                switch (event) {
                    case 'open':
                        this.open = !this.open
                        this.vive = false
                        this.inspira = false
                        this.juega = false
                        break;
                    case 'vive':
                        this.vive = !this.vive
                        this.inspira = false
                        this.juega = false
                        break;
                    // case 'inspira':
                    //     this.vive = false
                    //     this.inspira = !this.inspira
                    //     this.juega = false
                    //     break;
                    case 'juega':
                        this.vive = false
                        this.inspira = false
                        this.juega = !this.juega
                        break;
                    default:
                        this.open = false
                        this.vive = false
                        this.inspira = false
                        this.juega = false
                        break;
                }

            }
        }
    }

    // Método que encuentra la cosición de la cabecera dentro de la hoja y hace que la posicion relativa de los desplegables sea top o bottom dependiendo de ella
    function positionNav() {
        navElements = document.querySelectorAll("button+div.font-normal");
        navDown = document.getElementById("navDown")

        navDown.setAttribute("style", "bottom: 5rem")
        if (document.getElementById('header').getBoundingClientRect().bottom >= window.innerHeight* 2/3) {
            navElements.forEach(element => {
                element.setAttribute("style", "bottom: 5rem")
            });
            navDown.setAttribute("style", "bottom: 5rem")
        } else {
            navElements.forEach(element => {
            element.setAttribute("style", "top: 5rem")
            });
            navDown.setAttribute("style", "top: 5rem")
        }
    }
</script>