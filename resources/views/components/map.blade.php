<div x-data="{ explora: false }">
    <div class="h-[89.3vh]">
        <img  id={{ $id }} class="w-full h-full object-cover" src={{ $pathImg }} alt="">
    </div>
    <div x-cloak x-bind:class="explora ? 'hidden' : 'inline'" class="flex justify-center item-center w-full h-[89.3vh] absolute inset-0 z-30 bg-white/[0.1]" >
        <div class="flex flex-col justify-between items-center bg-blanco rounded-xl w-[75%] min-h-[65%] m-auto p-4">
            <div class="text-center">
                <h1 class="text-9xl font-bold text-azul-oscuro">Explora</h1>
                <h2 class="h2 text-azul-oscuro py-8">¿Quieres descubrir los lugares único que nos inspiran y emocionan?</h2>
                <h3 class="h3 max-w-4xl">En este mapa podrás navegar por todos ellos y descubrir la historia que hay detrás. Paisajes que representan a la perfección la magia de Galicia. Observadores incansables del paso del tiempo que cuentan historias a aquellos dispuestos a escuchar.</h3>
            </div>
            <button type="button" class="boton my-10 min-w-max uppercase" @click="explora=!explora">
                Comenzamos
            </button>
        </div>
    </div>
</div>