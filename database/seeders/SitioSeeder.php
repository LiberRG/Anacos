<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sitio;

class SitioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sitio::firstOrCreate([
            'nombre' => 'playa',
            'lugar_id' => 1,
        ],
        [
            'posicionTop' => 60,
            'posicionLeft' => 16,
            'descripcion' => 'descripción',
        ]);
    }
}
