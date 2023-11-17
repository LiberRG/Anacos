<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('imagens')->insert([
            'rutaImg' => 'img/colecciones/horreo.jpg',
            'alt' => '',
            'categoria' => 'juego',
        ]);
        DB::table('imagens')->insert([
            'rutaImg' => 'img/colecciones/queimada.jpg',
            'alt' => '',
            'categoria' => 'juego',
        ]);
        DB::table('imagens')->insert([
            'rutaImg' => 'img/colecciones/meiga.jpg',
            'alt' => '',
            'categoria' => 'juego',
        ]);
        DB::table('imagens')->insert([
            'rutaImg' => 'img/colecciones/castro.jpg',
            'alt' => '',
            'categoria' => 'juego',
        ]);
    }
}
