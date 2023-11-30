<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmparejaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('emparejas')->insert([
            'imagen_id' => 1,
            'rutaImg' => 'img/juego1/1.webp',
            'descripcion' => 'En el norte de España se criaron desde el
            suelo los espacios destinados a almacenar
            productos agrícolas, y atormentaron sus
            cerebros para idear una construcción que
            impediría la entrada de agua y garantizaría
            ventilación constante, manteniendo así los alimentos y
            los recursos se secan. Los llamaban Hórreos,
            de la forma latina de granero.
            Los graneros de Galicia eran pequeños, y no tanto
            pequeños (incluso se convirtieron en un signo del propietario
            estado), construcciones de viviendas rurales y domésticas.
            apoyo. Pueden construirse en piedra, madera o
            paja, y hoy son edificios protegidos
            y parte del patrimonio gallego.',
            'titulo' => "El horreo",
        ]);
        DB::table('emparejas')->insert([
            'imagen_id' => 2,
            'rutaImg' => 'img/juego1/2.webp',
            'descripcion' => "Tiene una longitud promedio de 14 centímetros y pesa aproximadamente 12 gramos. La cabeza y el cuello de los machos son de un negro brillante, mientras que la nuca está adornada con un blanco contrastante. Sus alas y espalda presentan tonos de amarillo limón, que
            combinar con un azul característico en el alas y cola.
            Construyen nidos en huecos de árboles, cavidades de paredes, o estructuras humanas.
            Es conocido por su carácter lúdico y curioso. También son notables imitadores.",
            'titulo' => "Ferreiriño Real",
        ]);
        DB::table('emparejas')->insert([
            'imagen_id' => 3,
            'rutaImg' => 'img/juego1/3.webp',
            'descripcion' => "Embarcación tradicional de fondo plano, que le permite navegar en aguas poco profundas. Utilizado como embarcación auxiliar o también para el marisqueo artesanal de pesca de bajura. Son embarcaciones pequeñas, de hasta 5 metros de largo y hasta dos metros de
            de ancho, fabricado en madera de pino y con sencillas construcción mediante cinco tablones unidos de extremo a extremo. Tradicionalmente impulsado por remo o vela (latina o espíritu), hoy llevan incorporados pequeños motores fuera de borda.
            En el sur tienen proa y popa planas (doble popa), pero en el norte de Pontevedra tienen un arco apuntado, o doble arco (choupán).",
            'titulo' => "Gamela",
        ]);
        DB::table('emparejas')->insert([
            'imagen_id' => 4,
            'rutaImg' => 'img/juego1/4.webp',
            'descripcion' => "Pollicipes pollicipes, habita en rocas batidas por las olas del Atlántico lo que implica siempre riego en su recolección. Los perceberos siempre acuden en parejas, uno asiste desde la altura y el otro desciende hasta la zona donde anida.
            El percebe adulto presenta dos partes claramente diferenciadas, parte superior o capítulo, y parte inferior o pedúnculo, que sería la parte que se fija a la roca. Es un animal hermafrodita, por lo que cada individuo presenta dos sistemas reproductores: uno masculino y uno femenino.
            El período reproductor del percebe en Galicia comienza en marzo y finaliza en septiembre.",
            'titulo' => "Percebe",
        ]);
    }
}
