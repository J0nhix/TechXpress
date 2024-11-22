<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TablaSuscripcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suscripciones')->insert([
            'descripcion' => 'Gratuito',
            'precio' => 0,
        ]);
        DB::table('suscripciones')->insert([
            'descripcion' => 'Premium',
            'precio' => 20,
        ]);
        DB::table('suscripciones')->insert([
            'descripcion' => 'Admin',
            'precio' => 0,
        ]);
        DB::table('suscripciones')->insert([
            'descripcion' => 'Reacondicionador',
            'precio' => 0,
        ]);
    }
}
