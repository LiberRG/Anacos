<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(LugarSeeder::class);
        $this->call(SitioSeeder::class);
        $this->call(ImagenSeeder::class);
        $this->call(ColeccionSeeder::class);
        $this->call(EmparejaSeeder::class);
        $this->call(RestauranteSeeder::class);
        $this->call(AlojamientoSeeder::class);
        $this->call(TurismoOficinaSeeder::class);
        $this->call(PaisajeSeeder::class);
        $this->call(TransporteSeeder::class);
        $this->call(TradicionSeeder::class);
    }
}
