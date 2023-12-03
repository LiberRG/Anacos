<div id="map">
    <div id="modal"
        class="flex justify-center items-center w-full h-[89.3vh] absolute inset-0 z-40 bg-imagen-map bg-cover">
        <div class="flex flex-col justify-center items-center bg-blanco rounded-xl w-[90%] lg:w-[80%] min-h-[65%] m-auto p-4 md:p-8 pt-4 text-center">
            <div class="my-0 h-fit">
                <h1 class="text-7xl sm:text-8xl md:text-9xl font-bold text-azul-oscuro pb-3">Explora</h1>
                <h2 class="h2 text-azul-oscuro pb-5">¿Quieres descubrir lugares único que nos inspiran y emocionan?</h2>
            </div>
            <div class="grow flex flex-col-reverse md:flex-row justify-center items-center gap-5 lg:gap-x-10 mt-0">
                <div class="flex flex-col gap-5 md:max-w-xs text-left">
                    <p class="p w-full hidden sm:inline">Elige el lugar que deseas explorar y atreveté a descubrir su historía.</p>
                    <p class="p w-full hidden md:inline">En este mapa podrás navegar por cada uno de ellos.</p>
                    <p class="p w-full hidden md:inline">Los paisajes, que representan a la perfección la magia de
                        Galicia, se yerguen como observadores incansables del paso del tiempo y cuentan historias a
                        aquellos dispuestos a escuchar.</p>
                </div>
                <div class="flex justify-center items-center">
                    <div class="relative w-fit">
                        @svg("map-galicia")
                        <div>
                            <ul>
                                @foreach ($lugares as $lugar)
                                    @php($style = 'top: ' . $lugar->posicionTop . '%; left: ' . $lugar->posicionLeft .
                                        '%')
                                        <li class="group absolute text-magenta-oscuro font-semibold"
                                            style="{{ $style }}">
                                            <a id="{{ $lugar->id }}" class="absolute group-hover:scale-150"
                                                href="{{ route('map.index', $lugar->nombre) }}">
                                                @svg("ico-position-map", "w-7 h-auto")
                                            </a>
                                            <span
                                                class="capitalize absolute -translate-x-1/3 translate-y-full min-w-max p-1 hidden group-hover:inline">
                                                {{ $lugar->nombre }}
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
