@extends('layouts.app')

@section('page-class', 'descubreEmpareja')

@section('content')
{{-- Página de resultados de búsqueda, con el mosaico de sesiones.--}}

<div class="flex justify-between items-center gap-x-8 container py-3 h-[86.6vh] xl:max-w-7xl relative">
    <main id="tablero" class="flex items-center justify-evenly flex-wrap overflow-y-auto basis-3/4 h-full" role="main">
        @foreach ($dataJuego as $data)
        <x-card id="card1-{{$data->id}}" path="{{$data->rutaImg}}"></x-card>
        <x-card id="card2-{{$data->id}}" path="{{$data->ImgDiseño->rutaImg}}" alt="alt"></x-card>
        @endforeach
    </main>
    <aside class="flex flex-col gap-y-5 basis-1/4 h-[76.3vh] sticky top-24">
        <div class="flex w-full h-full">
            <div class="w-full min-w-[200px] h-[95%] bg-gris-oscuro flex items-end rounded-xl my-auto p-5">
                <div id="description">
                    <div id="title-description"></div>
                    <div id="text-description"></div>
                </div>
                <div id="name-collection" class="h-full flex flex-col justify-between">
                    <div class="my-auto flex flex-col gap-8">
                        <p class="p pl-0 font-bold">¿Jugamos a emparejar cartas?</p>
                        <p class="p pl-0">El juego es sencillo selecciona una carta y se te mostrará una imagen.</p>
                        <p class="p pl-0">Las imagenes están relacionadas de dos en dos según lo que representan.</p>
                        <p class="p pl-0">Intenta unir las parejas levantando las carta y haciendo memoria para recordar si ya la has visto antes</p>
                    </div>
                    <div>
                        <h3 class="h3 font-normal">Descubre</h3>
                        <h1 id="titleDescubre" class="h1">Combarro</h1>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="boton mt-3 px-3" onclick="dashboard()">
            Jugar de nuevo
        </button>
    </aside>
</div>

<script>
    var data = []
    var selects = []
    var description = []
    
    window.addEventListener("DOMContentLoaded", dashboard(), false);

    function dashboard() {

        data = []
        selects = []
        document.getElementById("title-description").innerHTML = ""
        document.getElementById("text-description").innerHTML = ""        
        document.getElementById("name-collection").setAttribute("style", "diplay:inline-block")

        let tablero = document.getElementById("tablero");
        cards = tablero.children
        for (let i = 0; i < data.length; i++) {
            card = cards[i]
            if (card.querySelector('.card').style.transform == "rotateY(180deg)") {
                card.querySelector('.card').style.transform = "rotateY(0deg)"
            }
            card.addEventListener('click', () => {
                selectCard(data[i].id)
            })
            card.querySelector('.card').id = "card" + data[i].id
            card.querySelector('img').src = data[i].img

        }
    }

    function selectCard(i) {
        let selectCard = document.getElementById("card" + i)

        if (selectCard.style.transform != "rotateY(180deg)") {
            selectCard.style.transform = "rotateY(180deg)"
            selects.push(i)
        }
        if (selects.length == 2) {
            unselect(selects)
            selects = []
        }
    }

    function unselect(selects) {
        setTimeout(() => {

            if (selects[0].slice(-1) != selects[1].slice(-1)) {
                let card1 = document.getElementById("card" + selects[0])
                let card2 = document.getElementById("card" + selects[1])
                card1.style.transform = "rotateY(0deg)"
                card2.style.transform = "rotateY(0deg)"
            } else {
                document.getElementById("name-collection").setAttribute("style", "display:none")
                document.getElementById("title-description").innerHTML = description[selects[0].slice(-1)] //añadir nombre
                document.getElementById("text-description").innerHTML = description[selects[0].slice(-1)]
            }

        }, 800);
    }
</script>


</body>

</html>

@endsection