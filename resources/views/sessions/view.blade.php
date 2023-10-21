@extends('layouts.app')

@section('page-class', 'sessionsIndex')

@section('content')
    <div class="sm:px-8 px-4">
        <a class=" text-gris-oscuro lg:text-gris-claro lg:text-xl" href="{{ route('sessions.index') }}"> < Volver</a>
    </div>
    <div class="container">
        <div class="lg:mx-8 mt-5">
            <h3 class="h3 uppercase my-2"> XXXIV Reunión GEDET </h3>
            <h1 class="h1 font-bold">Retos terapéuticos en la consulta privada</h2>
        </div>
        <div class="lg:mx-8 ">
            <div class="lg:gridA">
                <div class="video lg:pt-6 my-5">
                    <div style="height:0;width:100%;padding-bottom:56%" class="mb-2 overflow-hidden">
                        <video src="/img/video_prueba.mp4"></video>
                    </div>
                </div>
                <div class="obj lg:mx-8 lg:py-16 border-b-2 border-ocre lg:border-b-0 mb-7">
                    <div class="border-t-2 border-gris-claro/[.5] lg:flex flex-row justify-between items-start pt-2 pb-5">
                        <h3 class="font-bold">Fecha</h3>
                        <p class="3xl:w-1/2 lg:w-2/3">Miércoles, 10 de mayo. 16:00-19:00</p>
                    </div>
                    <div class="border-t-2 border-gris-claro/[.5] lg:flex flex-row justify-between items-start pt-2 pb-5">
                        <h3 class="font-bold">Modera</h3>
                        <p class="3xl:w-1/2 lg:w-2/3">Cristina Muniesa Montserrat</p>
                    </div>
                    <div class="border-t-2 border-gris-claro/[.5] lg:flex flex-row justify-between items-start pt-2 pb-5 hidden">
                        <h3 class="font-bold">Objetivos</h3>
                        <p class="3xl:w-1/2 w-2/3">Al finalizar esta sesión el asistente deberá ser capaz de:1. Conocer los elementos moleculares más relevantes en la vía se señalización intracelular JAK-STAT2. Asimilar la relevancia patogénica de los nuevos concimientos sobre respuesta inmune en la dermatitis atópica, la alopecia reata y las alopecias cicatriciales3. Identificar los puntos de control de la respuesta inmune más relevantes, la posibilidad de bloqueo y la repercusion que esto puede tener en el tratamiento del cáncer cutáneo.</p>
                    </div>
                </div>

                <div class="coord border-b-2 border-gris-claro/[.5] pb-5">
                    <h2 class="h2 font-bold">Coordinadores</h3>
                    <p>José Manuel Carrascosa Carrillo, Hospital Universitari Germans Trias i Pujol. UAB. IGTP, Badalona Rafael Botella Estrada, Hospital Universitari i Politécnic La Fe, Valencia</p>
                </div>
                <div class="devel">
                    <div class="border-b-2 border-gris-claro/[.5] pb-5 mt-3">
                        <p class="uppercase my-2">09:00-09:15</p>
                        <h2 class="h2 font-bold my-2"> Introducción al conocimiento de la vía JAK-STAT  </h3>
                        <p class="my-2"> Lluis Puig Sanz, Hospital Santa Creu i Sant Pau, Barcelona</p>
                    </div>
                    <div class="lg:border-b-2 lg:border-gris-claro/[.5] pb-5 mt-3">
                        <p class="uppercase my-2">09:15-09:30</p>
                        <h2 class="h2 font-bold my-2"> Novedades en patogenia y tratamiento de la dermatitis atópica </h3>
                        <p class="my-2"> José Manuel Carrascosa Carrillo, Hospital Universitari Germans Trias i Pujol. UAB. IGTP, Badalona</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <aside class="flex flex-row justify-center items-center bg-gris-patrocinio/[0.05] lg:my-24 my-10 h-64 relative">
        <img class="absolute" src="/img/patrocinador-fondo.png" alt="patrocinio">
        <div class="flex flex-row justify-center items-center container">
            <p class="text-end p-1">GEDET 365 está patrocinado por</p>
            <img class="p-1 h-14 w-auto" src="/img/patrocinador.png" alt="patrocinio">
        </div>
    </aside>
@endsection
