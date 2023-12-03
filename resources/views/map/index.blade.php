@extends('layouts.appInicio')

@section('page-class', 'mapIndex')

@section('contentMap')
<div class="h-[89.3vh]">
    @if(isset($lugar) && $lugar != null)    
    <x-map :lugar=$lugar ></x-map>
    @else
    <x-choose :lugares=$lugares></x-choose> 
    @endif
</div>
@endsection

@section('content')
<main class="py-8" role="main">
    <article class="my-14">
        <h1 class="h1 text-center text-magenta-oscuro my-5 uppercase">El Patrimonio Gallego</h1>
        <section class="bg-gris-oscuro">
            <div class="flex py-4 relative container max-w-6xl m-auto"> 
                <div class="relative" style="height:0;width:100%;padding-bottom:24%">
                    <div class="absolute w-full h-full flex justify-center">
                        <img class="w-full object-cover" src="/img/inicio/patrimonio/1.png" alt="piedra con el simbolo del camino de Santiago que marca el kilometro 0. Se ve el mar de fondo">
                    </div>
                </div>
                <div class="relative" style="height:0;width:100%;padding-bottom:24%">
                    <div class="absolute w-full h-full flex justify-center">
                        <img class="w-full object-cover" src="/img/inicio/patrimonio/2.png" alt="Boceto de la torre de Hercules hecho a boli y pintado con acuarela">
                    </div>
                </div>
                <div class="relative" style="height:0;width:100%;padding-bottom:24%">
                    <div class="absolute w-full h-full flex justify-center">
                        <img class="w-full object-cover" src="/img/inicio/patrimonio/3.png" alt="Muralla de Lugo en primer y al fondo se ven las torres de la catedral">
                    </div>
                </div>
                <div class="relative hidden md:inline-block" style="height:0;width:100%;padding-bottom:24%">
                    <div class="absolute w-full h-full flex justify-center">
                        <img class="w-full object-cover" src="/img/inicio/patrimonio/4.png" alt="Hombre vestido de druida, con una camisola hecha de hoja y una careta de madera. Porta una antorcha encendida en la mano izquierda">
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 container max-w-3xl m-auto">
            <p>El patrimonio cultural de Galicia es una auténtica joya, y lo tiene todo: diversidad, historia y una conexión profunda con su paisaje. Aquí, te encuentras con monumentos antiguos, como dólmenes misteriosos, grabados rupestres intrigantes y castros, esos poblados fortificados de la Edad del Hierro. No podemos olvidarnos de los vestigios romanos, como la famosa <b>muralla de Lugo</b>, ¡una maravilla reconocida por la Unesco! Y, claro está, la icónica <b>torre de Hércules</b> en A Coruña.</p>
            <br>
            <p>Pero lo que realmente pone a Galicia en el mapa europeo es el <b>Camino de Santiago</b>, con sus multiples rutas que recorren el mundo y tienen como único destino la capital de nuestra provinca. Imagina recorrer la misma ruta que millones de peregrinos a lo largo de la historia mientras escribes parte de la tuya . ¡Eso es épico! Santiago de Compostela, con su catedral majestuosa y su increible arquitectura, es el destino final de esta aventura, y es un símbolo importante no solo para Galicia, sino también para la identidad europea.</p>
            <br>
            <p>Y el paisaje gallego, ¡guau! Más de 30,000 núcleos de población se esparcen por todo el territorio, y la mayoría de las construcciones son de piedra. Te encuentras con iglesias encantadoras, hórreos peculiares y cruceros que te hacen viajar en el tiempo.</p>
            <br>
            <p>La cultura gallega es un <b>festín para los sentidos</b>. La música, la literatura, el teatro,... Son pilares fundamentales a la hora de conocer y entender Galicia. Pero lo que realmente enriquece el parimonio es <b>la cultura oral</b>, que mantiene viva una rica tradición de historias, mezclando la realidad con la fantasía compartida, la magia y sentidos. Porque si preguntas a un Gallego siempre conocerá a alguién que sepa de <i>feitizos</i> y <i>meigas</i>. Porque como se suele decir <i>
                    << Non creo nas meigas, mais habelas, hainas>>
                </i>. Durante siglos, esta cultura popular ha transmitido la memoria colectiva y <b>la lengua única de Galicia</b> de generación en generación. ¡Un auténtico tesoro!.</p>
            <br>
            <p>En resumen, el patrimonio cultural gallego es rico y diverso, con monumentos megalíticos, restos romanos, y los famosos Caminos de Santiago. Que mezclan lo tangible con lo espiritual. El paisaje gallego está lleno de construcciones en piedra, como iglesias, hórreos,... que se mezclan con la naturaleza. Además, Galicia tiene una cultura musical, literaria y teatral vibrante, y una rica tradición de cultura oral que ha transmitido, salvadola del olvido, la memoria colectiva y la lengua gallega a lo largo de los siglos.</p>
        </section>
    </article>
    <article class="my-14">
        <h1 class="h1 text-center text-magenta-oscuro my-5 uppercase">La Cultura Gallega</h1>
        <section class="bg-gris-oscuro">
            <div class="flex py-4 relative container max-w-6xl m-auto">
                <div class="relative" style="height:0;width:100%;padding-bottom:24%">
                    <div class="absolute w-full h-full flex justify-center">
                        <img class="w-full object-cover" src="/img/inicio/cultura/1.png" alt="mujeres vestidas con untraje tradicional gallega, de espaldas y con una pandereta en las manos">
                    </div>
                </div>
                <div class="relative" style="height:0;width:100%;padding-bottom:24%">
                    <div class="absolute w-full h-full flex justify-center">
                        <img class="w-full object-cover" src="/img/inicio/cultura/2.png" alt="Cuatro dibujos de rosalia de castro estanpados en diferentes colores (rojo, marrón, azul oscuro y amarillo)">
                    </div>
                </div>
                <div class="relative" style="height:0;width:100%;padding-bottom:24%">
                    <div class="absolute w-full h-full flex justify-center">
                        <img class="w-full object-cover" src="/img/inicio/cultura/3.png" alt="Rodaje de una serie por una calle Vigo, el actor canima entre el personal de camaras y sonido">
                    </div>
                </div>
                <div class="relative hidden md:inline-block" style="height:0;width:100%;padding-bottom:24%">
                    <div class="absolute w-full h-full flex justify-center">
                        <img class="w-full object-cover" src="/img/inicio/cultura/4.png" alt="Dibujo a acuarela, en tonos azules, de la estatua de Julio Verne sobre un calamar que esta en Vigo">
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 container max-w-3xl m-auto">
            <p><b>¡La historia de Galicia es una locura!</b> Desde los misteriosos kallaikoi, los primeros pobladores que marcaron el territorio, hasta la explosión cultural de la Edad Media, ¡tenemos de todo!</p>
            <br>
            <p>Imagina monumentos megalíticos y asentamientos de la Edad de Hierro que aún están en pie hoy en día. Y no olvidemos los romanos, que trajeron su toque especial y la base de lo que ahora es el gallego.</p>
            <br>
            <p>Pero la Edad Media fue una época de oro. ¡El descubrimiento del sepulcro del Apóstol en el siglo IX cambió todo! Santiago de Compostela se convirtió en un epicentro cultural y punto de peregrinación. Se difundieron conocimientos y el arte románico por todo el territorio, algo increíble para el momento. La literatura también despegó con autores como <b>Airas Nunez</b> y <b>Martín Códax</b>. Incluso <b>Alfonso X "El Sabio"</b> Encontró en el gallego la manera perfecta de expresar su espiritualidad.</p>
            <br>
            <p>Después, la influencia de la nobleza disminuyó y la creación literaria oral se mantuvo fuerte. La arquitectura y la música se lucieron en el Renacimiento y el Barroco, ¡una explosión de creatividad! También hubo ilustrados de nivel europeo y el surgimiento de la universidad compostelana.</p>
            <br>
            <p>A pesar de las crisis y la emigración, el Romanticismo trajo una nueva ola literaria, con autores como <b>Rosalía de Castro</b>. La música también brilló con compositores como <b>Juan Montes</b>. La emigración hizo que se extendiera por el mundo mundo, prueba se ello son la <b>arquitectura modernista cubana</b> o la <b>biblioteca gallega de Buenos Aires</b>.</p>
            <br>
            <p>La cultura gallega sufrió durante la dictadura franquista, pero con la democracia, hubo un resurgimiento cultural impresionante. La profesionalización y proyección internacional de la cultura se convirtieron en la norma, especialmente en el ámbito audiovisual y editorial. No podemos olvidar la fascinación de autores como <b>Julio Verne</b> o el a arquitecto <b>Michel Pacewicz</b> por la ciudad de Vigo y la cultura gallega.</p>
            <br>
            <p>Hoy en día, nuestra cultura es una mezcla de tradición y modernidad. Galicia es un crisol de influencias europeas y americanas, y nuestra cultura es un activo estratégico para el desarrollo social y económico de la región. Grupos de música que mezclan la tradición con lo moderno, como <i><b>Tanxugeiras</b></i> o <i><b>Fillas de Cassandra</b></i>, se estan haciendo cada vez más fuertes en el panorama nacional. Tampoco podemos olvidar la explosión cinematográfica que sufre Galicia en este momento donde tanto produciones de <b>Netflix</b> como reconocidos cineastas, <b>J.A. Bayona</b> o <b>Alejandro Amenábar</b>, escogen nuestros paisajes para ambientar sus creaciones. </p>
            <br><br>
            <p class="text-xl text-center text-magenta-oscuro"><b>¡Ven y descubre la magia de Galicia!</b></p>
        </section>
    </article>
</main>
@endsection