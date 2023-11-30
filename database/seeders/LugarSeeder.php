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
            'posicionTop' => 60.00,
            'posicionLeft' => 16.00,
            'rutaMapa' => 'img/mapas/map-combarro.png'
        ]);
        DB::table('lugars')->insert([
            'nombre' => 'illas cies',
            'provincia' => 'Pontevedra',
            'posicionTop' => 66.00,
            'posicionLeft' => 10.00,
            'rutaMapa' => 'img/mapas/map-combarro.png'
        ]);
        DB::table('lugars')->insert([
            'nombre' => 'playa catedrales',
            'provincia' => 'Lugo',
            'posicionTop' => 3.00,
            'posicionLeft' => 78.00,
            'rutaMapa' => 'img/mapas/map-combarro.png'
        ]);
    }
}