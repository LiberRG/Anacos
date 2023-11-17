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
            'rutaImg' => 'img/juego1/1.jpg',
            'descripcion' => "El horreo",
            'titulo' => "El horreo",
        ]);
        DB::table('emparejas')->insert([
            'imagen_id' => 2,
            'rutaImg' => 'img/juego1/2.jpg',
            'descripcion' => "La queimada",
            'titulo' => "La queimada",
        ]);
        DB::table('emparejas')->insert([
            'imagen_id' => 3,
            'rutaImg' => 'img/juego1/3.jpg',
            'descripcion' => "Meiga",
            'titulo' => "Meiga",
        ]);
        DB::table('emparejas')->insert([
            'imagen_id' => 4,
            'rutaImg' => 'img/juego1/4.jpg',
            'descripcion' => "Castros",
            'titulo' => "Castros",
        ]);
    }
}
