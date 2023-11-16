<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LugarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lugars')->insert([
            'nombre' => 'combarro',
            'provincia' => 'Pontevedra',
            'posicionTop' => 60,
            'posicionLeft' => 16,
            'rutaMapa' => 'img/mapas/map-combarro.png'
        ]);
        DB::table('lugars')->insert([
            'nombre' => 'illas cies',
            'provincia' => 'Pontevedra',
            'posicionTop' => 66,
            'posicionLeft' => 10,
            'rutaMapa' => 'img/mapas/map-combarro.png'
        ]);
        DB::table('lugars')->insert([
            'nombre' => 'playa catedrales',
            'provincia' => 'Lugo',
            'posicionTop' => 3,
            'posicionLeft' => 78,
            'rutaMapa' => 'img/mapas/map-combarro.png'
        ]);
    }
}