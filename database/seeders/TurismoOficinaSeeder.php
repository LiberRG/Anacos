<?php

namespace Database\Seeders;

use App\Models\TurismoOficina;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TurismoOficinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TurismoOficina::firstOrCreate([
            'nombre' => 'Oficina de turismo de Combarro',
            'lugar_id' => 1,
        ],
        [
            'imagen_id' => 37,
            'telefono' => '(+34)986770001',            
            'direccion' => 'Carreiro do Campo, 17, 36993 Combarro, Pontevedra',
            'descripcion' => 'Combarro es uno de los pueblos marineros de Galicia que mejor ha conservado su arquitectura tradicional. Construido íntegramente en granito, mantiene casi intactas su estructura urbanística y edificaciones',
            'detalles' => 'Horario: 
            L: Cerrado 
            M-S: 09:30h-20:30h 
            D: 11:00h-13:30h',
        ]);  

        TurismoOficina::firstOrCreate([
            'nombre' => 'Centro de Visitantes de las Islas Atlánticas',
            'lugar_id' => 2,
        ],
        [
            'imagen_id' => 57,
            'telefono' => '(+34)886218082',            
            'direccion' => ' Rúa Palma, 4, 36202 Vigo, Pontevedra',
            'descripcion' => 'El Centro, intenta mostrar los valores naturales y culturales de las islas atlánticas de una manera muy artístico con la intención de trasladarnos a este singular espacio protegido.',
            'detalles' => 'El Centro trata de ser un referente para la visita a las islas, de suerte que los visitantes puedan disfrutar insitu de la riqueza natural y cultural de las islas teniendo una muestra previa de su valía. El fin último será posibilitar la conservación de este emblemático lugar con el uso y disfrute por parte de todos.
            Se recomienda comprobar horarios según la época del año.',
        ]); 
    }
}
