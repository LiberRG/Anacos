@extends('layouts.app')

@section('page-class', 'login')

@section('content')
    <div class="flex flex-row justify-center items-center mb-8 relative">        
        @svg("logo-gedet-365-vertical", "absolute opacity-25 h-64 w-auto")
        <div class="bg-ocre-claro/[0.29] h-64 w-full z-20 p-16">
            <h1 class="h1 text-center p-1 container">Bienvenidos</h1>
        </div>
    </div>
    <article class="flex flex-row container w-4/5 m-auto">
        <div class="w-1/2">
            <h3 class="h3">¡Bienvenido/a al 50 Congreso de la Academia Española de Dermatología y Venereología! </h2>
            <p>Recuerde que para poder acceder a las sesiones en directo y/o en diferido, es requisito indispensable estar inscrito al 50 Congreso de la Academia Española de Dermatología y Venereología. Si todavía no está inscrito puede realizar aquí su Inscripción al 50 Congreso AEDV 2023</p>
            <p>Si es usted Participante presencial, debe acudir al Stand de Abbvie situado en el Hall de Exposición Comercial en la planta 0 del palacio de Congresos de Santiago de Compostela, para recoger sus claves de acceso virtual. Si usted es Participante exclusivamente virtual, revise su correo electrónico. Desde la secretaría técnica del Congreso se le han enviado sus claves de acceso.</p>
            <p>Todas las sesiones serán emitidas en directo y todos los contenidos quedarán grabados para su posterior visualización durante 6 meses. Esperamos que disfrute del Congreso.</p>
        </div>
        <div class="w-1/3 m-auto">
            <h2>Acceso al 50 Congreso de la Academia Española de Dermatología y Venereología disponible a partir del 10 de mayo</h2>
            <x-form></x-form>
        </div>
    </article>
    <aside class="flex flex-row justify-center items-center h-64 relative">
        <img class="absolute" src="/img/patrocinador-fondo.png" alt="patrocinio">
        <div class="flex flex-row justify-center items-center container">
            <p class="text-end p-1">GEDET 365 está patrocinado por</p>
            <img class="p-1 h-14 w-auto" src="/img/patrocinador.png" alt="patrocinio">
        </div>
    </aside>
@endsection
