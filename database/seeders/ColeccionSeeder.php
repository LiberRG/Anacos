<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('coleccions')->insert([
            'nombre' => 'Galiza máxica',
            'descripcion' => 'Esta es una pequeña descripcion 2',
            'imagen_id' => 1,
        ]);
        DB::table('coleccions')->insert([
            'nombre' => 'Sons',
            'descripcion' => 'Esta es una pequeña descripcion 2',
            'imagen_id' => 1,
        ]);
        DB::table('coleccions')->insert([
            'nombre' => 'Ollar da natureza',
            'descripcion' => 'Esta es una pequeña descripcion 2',
            'imagen_id' => 1,
        ]);
        DB::table('coleccions')->insert([
            'nombre' => 'A liberdade do toxo',
            'descripcion' => 'Esta es una pequeña descripcion 2',
            'imagen_id' => 1,
        ]);
    }
}
