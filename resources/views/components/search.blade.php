<div class="shadow-md p-5 my-7 lg:my-12">
    
    <div class="m-auto lg:flex lg:flex-row">
        <div class="lg:w-2/5 lg:pt-6">
            <div style="height:0;width:100%;padding-bottom:56%" class="mb-2 overflow-hidden">
                <video src={{ $pathVideo }}></video>
            </div>
        </div>

        <div class="grow lg:ml-12">
            <div class="flex flex-row justify-end items-center">
                <p class="uppercase text-gris-claro">{{ $accessMode }}</p>
                @if ($registerLink != "" && $registerLink !=null) <a class="ml-2" href={{ $registerLink }}> @svg("ico-registro") </a> @endif
            </div>

            <div class="grow xl:w-4/5">
                <div class="">
                    <p class="uppercase">{{ $format }}</p>
                    <h3 class="h3 font-bold">{{ $title }}</h2>
                </div>

                <div class="flex flex-row justify-between mt-5 mb-3 border-t-2 border-gris-claro/[.5]">
                    <div class="xl:w-3/4">
                        <div class="xl:border-b-2 border-gris-claro/[.5]">
                            <p class="uppercase my-2">{{ $date }} / {{ $time }}</p>
                            <p class="uppercase my-2">{{ $chapter }}</p>
                        </div>

                        <div class="xl:border-b-2 py-2 border-gris-claro/[.5]">
                            <p>{{ $author }}</p>
                        </div>
                    </div>

                    <div class="pt-2 hidden xl:inline">
                        <img src={{ $pathLogo }} alt="logo" class="">
                    </div>
                </div>

            </div>


            <div class="flex flex-row lg:justify-end xl:justify-between">
                <p class="hidden xl:inline">Patrocinado por {{ $sponsor }}</p>
                <a class="boton" href="{{ route('sessions.view') }}" >Ver
                    sesión</a>
            </div>
        </div>
    </div>
</div>
