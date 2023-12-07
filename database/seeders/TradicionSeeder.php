<?php

namespace Database\Seeders;

use App\Models\Tradicion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TradicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tradicion::firstOrCreate([
            'nombre' => 'Semana Cultural y Festiva de San Roque',
        ],
        [
            'imagen_id' => 42,
            'fecha' => 'Mediados de agosto',
            'direccion' => 'Recinto histórico de Combarro',
            'descripcion' => 'Combarro se llena durante una semana de múltiples experiencias culturales y artísticas. También suelen incluirse actos gastronómicos como la fiesta del mejillón. Además de todo esto, se celebra la fiesta de San Roque, con actos religiosos y verbenas.',
            'detalles' => '',
            'lugar_id' => '1'
        ]);
        Tradicion::firstOrCreate([
            'nombre' => 'Fiesta de la Virgen de Carmen',
        ],
        [
            'imagen_id' => 43,
            'fecha' => '16 de Julio y días próximos a este',
            'direccion' => 'Recinto histórico y puerto de Combarro',
            'descripcion' => 'Como es habitual en las poblaciones marineras, el 16 de julio Combarro celebra esta festividad. La tradición manda engalanar los barcos con flores y banderas, para participar en una emotiva procesión marítima; la embarcación mejor adornada es la que portará la imagen de la Virgen.',
            'detalles' => 'Los asistentes a esta jornada podrán, además, participar en los actos litúrgicos en honor a la Santa y deleitarse con las actuaciones musicales',
            'lugar_id' => '1'
        ]);
        Tradicion::firstOrCreate([
            'nombre' => 'Festival “Armadiña Rock” ',
        ],
        [
            'imagen_id' => 44,
            'fecha' => 'Agosto (fechas concretas depende del año)',
            'direccion' => 'Recinto histórico de Combarro',
            'descripcion' => 'Festival de Rock que se celebra todos os anos en Combarro. Intenta poner en valor el rock gallega de artistas emergentes y de grupos con historia.',
            'detalles' => 'Entrada: todos los interesados en asistir y disfrutar de las actividades del festival podrán hacerlo de forma completamente gratuita.
            Visita su web: https://festival.armadinha.gal/',
            'lugar_id' => '1'
        ]);

    }
}
