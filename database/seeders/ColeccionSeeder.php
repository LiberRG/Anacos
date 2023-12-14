<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coleccion;

class ColeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coleccion::firstOrCreate([
            'nombre' => 'Horreo',
            'descripcion' => 'Rinde homenaje a la arquitectura tradicional y a la conexión entre la naturaleza y la cultura. Inspirada en esta emblemática estructura. 
            Horreo invita a los espectadores a explorar la poesía visual de estas estructuras atemporales, donde el arte encuentra su raíz en la herencia arquitectónica que perdura en el corazón de la naturaleza.',
        ],
        [
            'imagen_id' => 1,
        ]);

        Coleccion::firstOrCreate([
            'nombre' => 'Solpor',
            'descripcion' => 'Se busca capturar la efímera pero eternamente cautivadora transición de colores cálidos que se despliega en el cielo al final de cada día. 
            Los tonos rojizos y anaranjados son los protagonistas, evocando la danza final entre la luz y la sombra. Solpor invita a los espectadores a sumergirse en la magia del ocaso, explorando paisajes etéreos que celebran la belleza efímera del momento.',
        ],
        [
            'imagen_id' => 6,
        ]);

        Coleccion::firstOrCreate([
            'nombre' => 'Ollar da natureza',
            'descripcion' => 'Dedicada a la flora gallega. Busca capturar la diversidad y la armonía de los campos y bosques gallegas. La colección no solo representa visualmente la flora, queriendo reflejar la belleza intrincada de las plantas gallegas. Ollar da Natureza es un recordatorio de la importancia de apreciar y preservar el entorno natural que nos rodea.',
        ],
        [
            'imagen_id' => 9,
        ]);

        Coleccion::firstOrCreate([
            'nombre' => 'Froitos do mar',
            'descripcion' => 'Cada obra busca capturar la diversidad y vitalidad de las criaturas marinas. La colección es un viaje visual a través de los ecosistemas submarinos, celebrando la biodiversidad y la interconexión que define la vida en el mar. Invitando a los espectadores a explorar la belleza oculta de las profundidades y a reflexionar sobre la importancia de preservar y apreciar la vida marina.',
        ],
        [
            'imagen_id' => 13,
        ]);

        Coleccion::firstOrCreate([
            'nombre' => 'Salitre',
            'descripcion' => 'Esta colección es dedicada al mundo marineros, busca capturan la dualidad del mar, entendido como el mas duro de los jefes, sin perder su belleza. Su nombre, Salitre, encapsula la salinidad del mar y la resistencia de aquellos que desafían sus mareas. La colección invita a los espectadores a explorar la relación simbiótica entre el hombre y el océano.',
        ],
        [
            'imagen_id' => 18,
        ]);

        Coleccion::firstOrCreate([
            'nombre' => 'Combarro',
            'descripcion' => 'Inspirada en el encantador pueblo de Combarro, un homenaje a su rica cultura y belleza única. Combarro no solo es una colección, sino un diálogo visual con la naturaleza de este pueblo, invitando a los espectadores a sumergirse en este lugar y a sentir la magia que emana.',
        ],
        [
            'imagen_id' => 21,
        ]);

        Coleccion::firstOrCreate([
            'nombre' => 'Caleidoscopio azul',
            'descripcion' => 'Inspirada en la cambiante paleta de colores del océano, cada obra refleja la magia caleidoscópica del mar. La elección del azul como hilo conductor simboliza la calma y el misterio del océano, creando un ballet acuático de formas y tonalidades. Invitando a los espectadores a sumergirse en la poesía del océano y a celebrar la belleza diversa que nos regala en su expresión más vibrante.',
        ],
        [
            'imagen_id' => 26,
        ]);
    }
}
