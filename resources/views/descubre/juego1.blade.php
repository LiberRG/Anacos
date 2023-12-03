@extends('layouts.app')

@section('page-class', 'descubreEmpareja')

@section('content')

<div class="flex flex-col-reverse md:flex-row justify-between gap-x-8 container py-3 md:h-[81.6vh] xl:max-w-7xl relative">
    <main id="tablero" class="flex justify-center flex-wrap md:overflow-y-auto md:basis-3/4 h-full" role="main">

        @foreach ($dataJuego as $data)
        <x-card id="{{ $data[0] }}" path="{{ $data[1] }}"></x-card>
        @endforeach
    </main>
    <aside class="flex md:flex-col justify-between gap-y-5 gap-x-3 md:basis-1/4 mb-3 md:mb-0" x-cloak x-data="{ dropdown: false }">
        <div @click="dropdown=!dropdown" class="flex md:hidden items-center justify-between gap-x-3 boton mt-3 px-3 grow cursor-pointer"> 
            Descubre Galicia
            <span x-bind:class="dropdown ? 'rotate-180':'rotate-0'">@svg("ico-down", "h-3 w-auto")</span>
        </div>
        <div class="w-full min-w-[200px] bg-gris-oscuro md:flex items-center rounded-xl p-5 md:h-[85%]" x-bind:class="dropdown ? 'flex absolute top-[4.5rem]': 'hidden'">
            <div id="description" class="overflow-y-auto h-full">
                <div id="title-description" class="h2 pb-5"></div>
                <div id="text-description"></div>
            </div>
            <div id="name-collection" class="h-full flex flex-col justify-between">
                <div class="my-auto flex flex-col gap-3">
                    <p class="p pl-0 font-bold">¿Jugamos a emparejar cartas?</p>
                    <p class="p pl-0">El juego es sencillo selecciona una carta y se te mostrará una imagen. Las imagenes están relacionadas de dos en dos según lo que representan. Intenta unir las parejas levantando las carta y haciendo memoria para recordar si ya la has visto antes</p>
                </div>
                <div>
                    <h3 class="h3 font-normal">Descubre</h3>
                    <h1 id="titleDescubre" class="h1">Galicia</h1>
                </div>
            </div>
        </div>
        <button type="button" class="boton mt-3 px-3" onclick="reload()">
            Nuevo juego
        </button>
    </aside>
</div>

<script>
    var selects = []
    var description = <?= json_encode($description) ?>;
    var data = <?= json_encode($dataJuego) ?>;
    window.addEventListener("DOMContentLoaded", dashboard(), false);

    //Método que prepara el tablero para comezar el juego, rotando todas las cartas a la posición inicial y poniendolas a la escucha del click
    function dashboard() {
        selects = []

        document.getElementById("title-description").innerHTML = ""
        document.getElementById("text-description").innerHTML = ""
        document.getElementById("name-collection").setAttribute("style", "diplay: flex")
        let tablero = document.getElementById("tablero");
        cards = tablero.children
        console.log(cards)
        for (let i = 0; i < cards.length; i++) {
            card = cards[i]
            console.log(card)
            if (card.querySelector('.card').style.transform == "rotateY(180deg)") {
                card.querySelector('.card').style.transform = "rotateY(0deg)"
            }
            card.addEventListener('click', () => {
                selectCard(cards[i].firstElementChild.id)
            })

        }
    }

    //Método que dado el id de una carta la gira y la añade al array de cartas seleccionadas
    function selectCard(i) {
        let selectCard = document.getElementById(i)
        let logo = selectCard.lastElementChild;

        if (selectCard.style.transform != "rotateY(180deg)") {
            selectCard.style.transform = "rotateY(180deg)"
            // Dado que en firefox se queda visible el logo lo quitamos
            logo.setAttribute("style", "display:none");
            selects.push(i)
        }
        if (selects.length == 2) {
            unselect(selects)
            selects = []
        }
    }

    //Método que comprueba si las dos cartas selecionadas pertenecen a la misma pareja. En caso afirmativo escribe la descripcion.
    function unselect(selects) {
        setTimeout(() => {

            if (selects[0].slice(-1) != selects[1].slice(-1)) {
                let card1 = document.getElementById(selects[0])
                let card2 = document.getElementById(selects[1])
                card1.style.transform = "rotateY(0deg)"
                card2.style.transform = "rotateY(0deg)"
                // Hacemos visible el log de nuevo
                let logo1 = card1.lastElementChild;
                let logo2 = card2.lastElementChild;
                logo1.setAttribute("style", "display:flex")
                logo2.setAttribute("style", "display:flex")
            } else {
                document.getElementById("name-collection").setAttribute("style", "display:none")
                description.forEach(element => {
                    if (element[0] == selects[0].slice(-1)) {
                        document.getElementById("title-description").innerHTML = element[1];
                        document.getElementById("text-description").innerHTML = element[2];
                    }
                });

            }

        }, 800);
    }

    //Método que reordena el array de datos y lo vuelve e introduce los nuevos datos en las cartas del tablero. 
    function reload() {
        if (data.length > 0) {
            console.log(data);
            data.sort((img) => Math.random() - 0.8);
            let tablero = document.getElementById("tablero");
            cards = tablero.children;
            for (let i = 0; i < data.length; i++) {
                card = cards[i]
                card.querySelector('.card').id = "card" + data[i][0];
                card.querySelector('img').src = data[i][1];
            }
            dashboard();
        }

    }
</script>

@endsection