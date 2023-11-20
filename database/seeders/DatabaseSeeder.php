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
        // $this->call(LugarSeeder::class);
        // $this->call(SitioSeeder::class);
        $this->call(ImagenSeeder::class);
        // $this->call(EmparejaSeeder::class);
        //$this->call(ColeccionSeeder::class);
    }
}
