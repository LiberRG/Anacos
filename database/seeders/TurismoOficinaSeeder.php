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
            'lugar_id' => '1'
        ]);  
    }
}
