<div class="mx-3 my-6" x-data="{ responder: false }" >
    <h2 class="h2 my-6">Tu opinión es importante para nosotros</h2>
    <div x-bind:class="responder ? 'inline-block':'hidden'">
    <p class="p p-0">Gracias por tomarte un tiempo para responder, tu nos ayudas a mejorar.</p>
    <p class="p p-0">Disfruta de la experiencia.</p>
    </div>
    <div x-bind:class="responder ? 'hidden':'inline-block'">
        <p class="p px-0">Por favor valore estas afirmaciones y conteste a las siguentes preguntas sobre su experiencia de uso de nuestra pagina. Solo te llevará un par de minutos:</p>
        <p class="px-0 text-sm"><i></i>Recuerde que el 0 es totalmente en desacuerdo y el 10 es totalmente de acuerdo</i></p>
        <br>
        <form class="flex flex-col" wire:submit="save">
            <div class="my-2">
                <p class="p px-0">La web es facil de usar:</p>
                <div id="p1" class="flex items-center gap-x-3">
                    <label><input class="mx-2" type="radio" value="0" name="p1" wire:model="p1">0</label>
                    <label><input class="mx-2" type="radio" value="2" name="p1" wire:model="p1">2</label>
                    <label><input class="mx-2" type="radio" value="4" name="p1" wire:model="p1">4</label>
                    <label><input class="mx-2" type="radio" value="6" name="p1" wire:model="p1">6</label>
                    <label><input class="mx-2" type="radio" value="8" name="p1" wire:model="p1">8</label>
                    <label><input class="mx-2" type="radio" value="10" name="p1" wire:model="p1">10</label>
                </div>
            </div>
            <div class="my-2">
                <label for="p2">Normalmente uso 'anacos' para:</label>
                <select class="w-full rounded-lg" wire:model="p2">
                    <option value="">Selecione una opción</option>
                    <option value="Informarme de sitios distintos que visitar">Informarme de sitios distintos que visitar</option>
                    <option value="Descubrir los nuevos productos de artesania">Descubrir los nuevos productos de artesania</option>
                    <option value="Por los servicios que recoge la web">Por los servicios que recoge la web</option>
                    <option value="Descubrir la historia de Galicia de una manera diferente">Descubrir la historia de Galicia de una manera diferente</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>
            <div class="my-2">
                <p class="p px-0">He encontrado lo que estabas buscando:</p>
                <div class="flex items-center gap-x-3">
                    <label><input class="mx-2" type="radio" value="0" name="p3" wire:model="p3">0</label>
                    <label><input class="mx-2" type="radio" value="2" name="p3" wire:model="p3">2</label>
                    <label><input class="mx-2" type="radio" value="4" name="p3" wire:model="p3">4</label>
                    <label><input class="mx-2" type="radio" value="6" name="p3" wire:model="p3">6</label>
                    <label><input class="mx-2" type="radio" value="8" name="p3" wire:model="p3">8</label>
                    <label><input class="mx-2" type="radio" value="10" name="p3" wire:model="p3">10</label>
                </div>
            </div>
            <div class="my-2">
                <label for="p4">¿Hay algo que buscas que no hayas encontrado?</label>
                <input class="w-full rounded-lg" type="text" id="p4" wire:model="p4">
            </div>
            <div class="my-2">
                <p class="p px-0">La web me ha resultado útil:</p>
                <div class="flex items-center gap-x-3">
                    <label><input class="mx-2" type="radio" value="0" name="p5" wire:model="p5">0</label>
                    <label><input class="mx-2" type="radio" value="2" name="p5" wire:model="p5">2</label>
                    <label><input class="mx-2" type="radio" value="4" name="p5" wire:model="p5">4</label>
                    <label><input class="mx-2" type="radio" value="6" name="p5" wire:model="p5">6</label>
                    <label><input class="mx-2" type="radio" value="8" name="p5" wire:model="p5">8</label>
                    <label><input class="mx-2" type="radio" value="10" name="p5" wire:model="p5">10</label>
                </div>
            </div>
            <div class="my-2">
                <p class="p px-0">Mi Experiencia general a sido satisfactoria:</p>
                <div class="flex items-center gap-x-3">
                <label><input class="mx-2" type="radio" value="0" name="p5" wire:model="p6">0</label>
                    <label><input class="mx-2" type="radio" value="2" name="p5" wire:model="p6">2</label>
                    <label><input class="mx-2" type="radio" value="4" name="p5" wire:model="p6">4</label>
                    <label><input class="mx-2" type="radio" value="6" name="p5" wire:model="p6">6</label>
                    <label><input class="mx-2" type="radio" value="8" name="p5" wire:model="p6">8</label>
                    <label><input class="mx-2" type="radio" value="10" name="p5" wire:model="p6">10</label>
                </div>
            </div>
            <div class="my-2">
                <label for="p7">Si no estás satisfecho ¿qué podemos hacer para mejorar su experiencia?</label>
                <div><input class="w-full rounded-lg" type="text" id="p7" wire:model="p7"></div>
            </div>
            <div class="my-2">
                <label for="p8">Nos encantaría conocer sus sugerencias para mejorar la pagina:</label>
                <div><input class="w-full rounded-lg" type="text" id="p8" wire:model="p8"></div>
            </div>
            <input class="boton mt-6" type="submit" value="enviar" name="Enviar" @click="responder=!responder">
        </form>
    </div>
</div>

<script>
    window.addEventListener("DOMContentLoaded", onlyOne(), false);
    //Método que hace que solo puedas elegir una única opcion en los checkbox                    
    function onlyOne() {
        for (let CheckBox of document.querySelectorAll('[name="p1"]')) {
            CheckBox.onclick = function() {
                if (Checked != null) {
                    Checked.checked = false;
                    Checked = CheckBox;
                }
                Checked = CheckBox;
            }
        }
        for (let CheckBox of document.querySelectorAll('[name="p3"]')) {
            CheckBox.onclick = function() {
                if (Checked != null) {
                    Checked.checked = false;
                    Checked = CheckBox;
                }
                Checked = CheckBox;
            }
        }
        for (let CheckBox of document.querySelectorAll('[name="p5"]')) {
            CheckBox.onclick = function() {
                if (Checked != null) {
                    Checked.checked = false;
                    Checked = CheckBox;
                }
                Checked = CheckBox;
            }
        }
        for (let CheckBox of document.querySelectorAll('[name="p6"]')) {
            CheckBox.onclick = function() {
                if (Checked != null) {
                    Checked.checked = false;
                    Checked = CheckBox;
                }
                Checked = CheckBox;
            }
        }
    }
</script>