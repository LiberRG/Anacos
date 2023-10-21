<div class="bg-white m-2 p-3 flex flex-col justify-between item-center">
    <div style="height:0;width:100%;padding-bottom:56%" class="mb-2 overflow-hidden">
        <img src={{ $pathImg }} alt={{ $nameImg }}>
    </div>
    <div class="flex flex-row justify-end items-center my-2">
        <p class="uppercase text-gris-claro">{{ $accessMode }}</p>
        @if ($registerLink != '' && $registerLink != null)<a class="ml-2"
                href={{ $registerLink }}>
                @svg("ico-registro")
            </a>
        @endif
    </div>

    <div class="border-b p-1 grow">
        <p class="uppercase">{{ $date }}</p>
        <h2 class="h2 font-bold py-3">{{ $title }}</h2>
    </div>
    <div>
        <div class="flex flex-row justify-between items-center p-2">
            <p >{{ $category }}</p>
            <img src={{ $pathLogo }} alt="logo">
        </div>
        <div class="my-2">
            <button class="boton" type="button" name="detalles" id={{ $id }}>Ver
                detalles</button>
        </div>
    </div>
</div>
