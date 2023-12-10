<footer class="bg-azul-claro relative" x-data="footer()" role="contentinfo">
    <div class="container h-[7.5vh] flex flex-row justify-between items-center">
        <div class="grow text-blanco">
            @svg("logo-anacos-galicia", "h-12 w-auto hidden lg:inline")
            @svg("logo-anacos", "h-6 w-auto lg:hidden hidden xs:inline")
        </div>
        <div class="flex justify-between gap-3">
            <button @click="desplega('cookie')" class="text-sm hover:scale-105">
                @svg("ico-cookie", "h-9 w-auto")
            </button>

            {{-- Codigo: Por ahora el trato de las cookies no esta implimentado --}}
            <div x-cloak class="bg-azul-claro/[0.9] font-medium absolute right-0 bottom-14 w-full text-start z-10 ">
                <div class="container flex justify-center sm:justify-end">
                    <div x-bind:class="cookie ? 'py-4' :'hidden'">
                        <div class="sm:flex items-center gap-x-9 max-w-3xl">
                            <div>
                                <h3 class="h3 font-bold py-2 pl-3">Uso de cookies</h3>
                                <p class="p">Este portal utiliza cookies propias de tipo técnico y de terceros para mejorar, mediante el análisis de la navegación, el servicio ofrecido. Las cookies no se utilizan para recoger datos personales.</p>
                            </div>
                            <div class="flex flex-col gap-y-3 mt-4 sm:mt-0">
                                <button class="boton w-full text-magenta-oscuro border-magenta-oscuro" @click="desplega('cookie')">Opciones</button>
                                <button class="boton w-full text-verde-oscuro border-verde-oscuro" @click="desplega('cookie')">Acepto</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button @click="desplega('contacto')" class="text-sm hover:scale-105">
                <span>@svg("ico-ubicacion", "h-9 w-auto")</span>
            </button>

            <div x-cloak class="bg-azul-claro/[0.9] font-medium absolute right-0 bottom-14 w-full text-start z-10 ">
                <div class="container flex justify-center sm:justify-end">
                    <div x-bind:class="contacto ? 'py-4' :'hidden'">
                        <div class="sm:flex items-center justify-between gap-x-4">
                            <div>
                                <h3 class="h3 font-bold py-2 pl-3">Contacta con nosotros:</h3>
                                <p class="p"><b>Telefono: </b>+34 000 000 000</p>
                                <p class="p"><b>Email: </b><a href="mailto:info@anacos.com?subject=Contacto }}" class="text-azul-oscuro font-bold hover:scale-105">info@anacos.com</a></p>
                                <p class="p"><b>Dirección: </b>Rúa do Mar nº22<br>Combarro, Pontevedra - C.P.:36993</p>
                            </div>
                            <iframe class="sm:w-1/3 h-auto border-4 border-blanco mt-4 sm:mt-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184.0496775212856!2d-8.704583534417495!3d42.43210163961175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2f6ef58e9a133f%3A0x963c1473b696d4f8!2sR%C3%BAa%20do%20Mar%2C%2016%2C%2036993%20Combarro%2C%20Pontevedra!5e0!3m2!1ses!2ses!4v1698016102188!5m2!1ses!2ses" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </div>
            </div>

            <button @click="desplega('encuesta')" class="text-sm hover:scale-105">
                <span>@svg("ico-encuesta", "h-9 w-auto")</span>
            </button>


            <div x-cloak class="bg-azul-claro/[0.9] font-medium absolute right-0 bottom-14 w-full text-start z-10 ">
                <div class="container flex justify-center sm:justify-end">
                    <div x-bind:class="encuesta ? 'py-4' :'hidden'">
                        <livewire:encuesta></livewire:encuesta>
                    </div>
                </div>
            </div>

            <a class="text-sm hover:scale-105" href="https://instagram.com/anacos.gal?igshid=MzRlODBiNWFlZA==" target="_blank">
                @svg("ico-instagram", "h-9 w-auto")
            </a>
        </div>
    </div>


</footer>

<script>
    function footer() {
        return {
            cookie: false,
            contacto: false,
            encuesta: false,
            instagram: false,

            // Método que cierra todos los desplagables excepto el que se acaba de pulsar
            desplega(event) {
                switch (event) {
                    case 'cookie':
                        this.cookie = !this.cookie
                        this.contacto = false
                        this.encuesta = false
                        this.instagram = false
                        break;
                    case 'contacto':
                        this.cookie = false
                        this.contacto = !this.contacto
                        this.encuesta = false
                        this.instagram = false
                        break;
                    case 'encuesta':
                        this.cookie = false
                        this.contacto = false
                        this.encuesta = !this.encuesta
                        this.instagram = false
                        break;
                    case 'instagram':
                        this.cookie = false
                        this.contacto = false
                        this.encuesta = false
                        this.instagram = !this.instagram
                        break;
                    default:
                        this.cookie = false
                        this.contacto = false
                        this.encuesta = false
                        this.instagram = false
                        break;
                }

            }
        }
    }
</script>