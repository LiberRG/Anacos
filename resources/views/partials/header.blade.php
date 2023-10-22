{# arreglar el desplegable movil para que todas bajen en el mismo momento, no usar en los div de categorias min-w-max #}



<div x-data="{ open: false }">
    <div x-data="header()">
        <nav class="bg-azul-claro flex flex-row justify-between items-center py-3 z-50 sticky sm:px-8 px-4">
            <a href="/" class="bg-blanco rounded-full border-4 border-blanco">@svg("isotipo-anacos", 'w-12 h-auto')</a>
    
            <div x-cloak class="md:inline text-blanco" x-bind:class="open ? 'inline-block':'hidden'">
                <div class="md:static md:inline w-full md:text-center grow" x-bind:class="open ? 'absolute right-0 top-20 text-start bg-azul-claro/[0.8] z-50 ' : '' ">
    
                    <spam  class="flex items-start gap-6 flex-wrap md:inline
                        text-lg font-bold md:font-normal
                        p-3 xl:px-8 2xl:px-10">
                        <button name="planea" @click="desplegable($event)" class="min-w-[25%] md:min-w-max hover:md:text-magenta-oscuro" x-bind:class="planea ? 'md:text-magenta-oscuro' : 'md:text-blanco'">
                            Planea
                        </button>
                        <div class="font-normal min-w-max flex flex-col
                        text-start " x-bind:class="planea ? 'md:absolute md:right-0 md:top-20 md:bg-azul-claro/[0.8] md:z-50 md:w-2/5 lg:w-1/3' :'md:hidden'">
                            <a class="hover:text-azul-oscuro md:p-5 md:border-b md:border-blanco" href="{{ route('events.index') }}">
                                Alojamiento
                            </a>
                            <a class="hover:text-azul-oscuro md:p-5 md:border-b md:border-blanco" href="{{ route('events.index') }}">
                                Servicios turísticos
                            </a>
                            <a class="hover:text-azul-oscuro md:p-5 md:border-b md:border-blanco" href="{{ route('events.index') }}">
                                Como llegar
                            </a>
                            <a class="hover:text-azul-oscuro md:p-5 md:border-b md:border-blanco" href="{{ route('events.index') }}">
                                Cultura y tradiciones
                            </a>
                            <a class="hover:text-azul-oscuro md:p-5 md:border-b md:border-blanco" href="{{ route('events.index') }}">
                                Sabores del lugar
                            </a>
                            <a class="hover:text-azul-oscuro md:p-5" href="">
                                Paisajes
                            </a>
                        </div>
                    </spam>
                    <spam class=" flex gap-6 items-start flex-wrap md:inline
                        text-lg font-bold md:font-normal
                        p-3 xl:px-8 2xl:px-10">
                        <button name="inspira" @click="desplegable($event)" class="min-w-[25%] md:min-w-max hover:md:text-magenta-oscuro" x-bind:class="inspira ? 'md:text-magenta-oscuro' : 'md:text-blanco'">
                            Inspirate
                        </button>
                        <div class="font-normal min-w-max flex flex-col
                        text-start " x-bind:class="inspira ? 'md:absolute md:right-0 md:top-20 md:bg-azul-claro/[0.8] md:z-50 md:w-2/5 lg:w-1/3' :'md:hidden'">
                            <a class="hover:text-azul-oscuro md:p-5 md:border-b md:border-blanco" href="{{ route('events.index') }}">
                                Colección Galiza máxica
                            </a>
                            <a class="hover:text-azul-oscuro md:p-5 md:border-b md:border-blanco" href="{{ route('events.index') }}">
                                Colección Sons
                            </a>
                            <a class="hover:text-azul-oscuro md:p-5 md:border-b md:border-blanco" href="{{ route('events.index') }}">
                                Colección Ollar da natureza
                            </a>
                            <a class="hover:text-azul-oscuro md:p-5 md:border-b md:border-blanco" href="{{ route('events.index') }}">
                                colección A liberdade do toxo
                            </a>
                            <a class="hover:text-azul-oscuro md:p-5" href="">
                                Colección Combarro
                            </a>
                        </div>
                    </spam>
                    <spam class=" flex gap-6 items-start flex-wrap md:inline
                        text-lg font-bold md:font-normal
                        p-3 xl:px-8 2xl:px-10">
                        <button name="juega" @click="desplegable($event)" class="min-w-[25%] md:min-w-max hover:md:text-magenta-oscuro" x-bind:class="juega ? 'md:text-magenta-oscuro' : 'md:text-blanco'">
                            Descubre
                        </button>
                        <div class="font-normal min-w-max flex flex-col
                        text-start " x-bind:class="juega ? 'md:absolute md:right-0 md:top-20 md:bg-azul-claro/[0.8] md:z-50 md:w-2/5 lg:w-1/3' :'md:hidden'">
                            <a class="hover:text-azul-oscuro md:p-5 md:border-b md:border-blanco" href="{{ route('events.index') }}">
                                Empareja y descubre
                            </a>
    
                            <a class="hover:text-azul-oscuro md:p-5" href="">
                                Otro
                            </a>
                        </div>
                    </spam>
                </div>
            </div>
    
            <div class="md:hidden h-12 text-blanco">
                <button  class="cursor-pointer"
                @click="open=!open">
                    <div class="w-10 h-12 flex items-center justify-center relative">
                        <span x-bind:class="open ? 'translate-y-0 rotate-45' : '-translate-y-4'" class="transform transition w-full h-0.5 bg-current absolute"></span>
    
                        <span x-bind:class="open ? 'opacity-0 translate-x-3' : 'opacity-100'" class="transform transition w-full h-0.5 bg-current absolute"></span>
    
                        <span x-bind:class="open ? 'translate-y-0 -rotate-45' : 'translate-y-4'" class="transform transition w-full h-0.5 bg-current absolute"></span>
                    </div>
                </button>
            </div>
    
        </nav>
    
        <div x-cloak x-bind:class="open ? 'inline' : 'hidden'" class="w-full fixed inset-0 z-40 bg-white/[0.8] md:hidden" @click="open=!open">
        </div>
    
    </div>
</div>

<script>
    function header() {
        return {
            planea:false,
            inspira:false,
            juega:false,

            desplegable(event) {
                variable = event.target.name
                console.log(variable)
                switch (variable){               
                    case 'planea': 
                        this.planea = !this.planea
                        this.inspira = false
                        this.juega = false
                        break;
                    case 'inspira':
                        this.planea = false
                        this.inspira = !this.inspira
                        this.juega = false
                        break;
                    case 'juega':
                        this.planea = false
                        this.inspira = false
                        this.juega = !this.juega
                        break;
                    default:
                        this.planea = false
                        this.inspira = false
                        this.juega = false
                        break;
                }

            }
        }
    }
</script>