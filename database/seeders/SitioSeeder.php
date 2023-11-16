<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SitioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sitios')->insert([
            'nombre' => 'playa',
            'lugar_id' => 1,
            'posicionTop' => 60,
            'posicionLeft' => 16,
            'descripcion' => 'descripción',
        ]);
    }
}
