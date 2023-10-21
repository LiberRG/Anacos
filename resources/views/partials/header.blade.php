<div x-data="{ open: false }">
    <nav class="flex flex-row justify-between items-center py-8 z-50 sticky sm:px-8 px-4" >
        @svg("logo-gedet-365-horizontal", 'w-1/2 lg:w-fit h-auto')
        <div class="hidden lg:inline">
            <a class="border rounded-lg border-ocre font-bold lg:m-1 mx-0.5 py-2 2xl:px-10 xl:px-8 lg:px-6 px-2 hover:bg-ocre-claro hover:border-ocre-claro"
                href="{{ route('events.index') }}">Eventos</a>
            <a class="border rounded-lg border-ocre font-bold lg:m-1 mx-0.5 py-2 2xl:px-10 xl:px-8 lg:px-6 px-2 hover:bg-ocre-claro hover:border-ocre-claro"
                href="{{ route('sessions.index') }}">Búsquedas</a>
            <a class="boton font-bold mx-0.5 lg:m-1 2xl:px-10 xl:px-8 lg:px-6 px-2" href="{{ route('login') }}">Accede
                a su cuenta</a>
        </div>
        <div class="lg:hidden h-7">            
            {{--<button class="flex items-center cursor-pointer" @click="open=!open">
                {{-- <span x-show="!open">@svg("ico-ajustes", "w-7 h-auto")</span>
                <span x-show="open">@svg("ico-cerrar", "w-7 h-auto")</span> --}}
                
            <button class="cursor-pointer" @click="open=!open">
                <div class="w-7 h-7 flex items-center justify-center relative">
                    <span x-bind:class="open ? 'translate-y-0 rotate-45' : '-translate-y-2'"
                          class="transform transition w-full h-0.5 bg-current absolute"></span>
                    
                    <span x-bind:class="open ? 'opacity-0 translate-x-3' : 'opacity-100'"
                          class="transform transition w-full h-0.5 bg-current absolute"></span>
                    
                    <span x-bind:class="open ? 'translate-y-0 -rotate-45' : 'translate-y-2'"
                          class="transform transition w-full h-0.5 bg-current absolute"></span>
                  </div>

            </button>
        </div>
    </nav>

    <div x-show="open" class="lg:hidden">
        <div x-cloak x-show="open" x-ref="mobileMenuContainer" @keydown.escape.window="open = false; utilsBsd(false)"
            class="w-full fixed inset-0 z-40 bg-white/[0.5] lg:hidden">
        </div>
        <nav class="shadow-md fixed right-0 flex flex-col w-5/6 max-w-sm bg-white z-50">
            <ul class="w-full">
                <li class="border-b border-ocre py-6 px-8">
                    <a class="font-bold text-lg" href="{{ route('events.index') }}">Eventos</a>
                </li>
                <li class="border-b border-ocre py-6 px-8">
                    <a class="font-bold text-lg" href="{{ route('sessions.index') }}">Búsquedas</a>
                </li>
                <li class="py-6 px-8">
                    <a class="font-bold text-lg" href="{{ route('login') }}">Accede
                        a su cuenta</a>
                </li>
            </ul>
        </nav>
    </div>

</div>
