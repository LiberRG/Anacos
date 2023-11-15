@extends('layouts.app')

@section('page-class', 'descubreJuego1')

@section('content')
{{-- Página de resultados de búsqueda, con el mosaico de sesiones.--}}

<div class="flex justify-between gap-x-8 container py-3 h-[81.6vh] xl:max-w-7xl relative">
    <main id="tablero" class="flex items-center justify-evenly flex-wrap overflow-y-auto basis-3/4" role="main">
        @foreach ($dataJuego1 as $data)
        <x-card></x-card>
        <x-card></x-card>
        @endforeach
    </main>
    <aside class="flex flex-col gap-y-5 basis-1/4 h-[76.3vh] sticky top-24">
        <div class="flex w-full h-full">
            <div class="w-full h-[95%] bg-gris-oscuro flex items-end rounded-xl my-auto p-3">
                <div id="description">
                    <div id="title-description"></div>
                    <div id="text-description"></div>
                </div>
                <div id="name-collection">
                    <div>
                        <p>¿Jugamos a emparejar cartas?</p>
                        <p>El juego es sencillo selecciona una carta y se te mostrará una imagen.</p>
                        <p>Las imagenes están relacionadas de dos en dos según lo que representan.</p>
                        <p>Intenta unir las parejas levantando las carta y haciendo memoria para recordar si ya la has visto antes</p>
                    </div>
                    <h3 class="h3 font-normal">Descubre</h3>
                    <h1 id="titleDescubre" class="h1">Combarro</h1>
                </div>
            </div>
        </div>
        <button type="button" class="boton mt-3 px-3" onclick="dashboard()">
            Jugar de nuevo
        </button>
    </aside>
</div>

<script>
    var selects = []
    var description = []
    var DATA_JUEGO = <?= json_encode($dataJuego1); ?>;
    var data = []
    window.addEventListener("DOMContentLoaded", dashboard(), false);

    function dashboard() {

        data = []
        selects = []
        document.getElementById("title-description").innerHTML = ""
        document.getElementById("text-description").innerHTML = ""        
        document.getElementById("name-collection").setAttribute("style", "diplay:inline-block")

        for (let i = 0; i < DATA_JUEGO.length; i++) {
            for (let j = 0; j < DATA_JUEGO[i].length; j++) {
                const element = DATA_JUEGO[i][j];
                if (j == (DATA_JUEGO[i].length - 1)) {
                    description.push(element)
                } else {
                    id = j + "-" + i
                    data.push({
                        id: id,
                        img: element
                    })
                }
            }
        }
        if (data.length > 0) {
            data.sort((img) => Math.random() - 0.8, )
        }
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