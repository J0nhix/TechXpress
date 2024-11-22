<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TablaDescuentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('descuentos')->insert([
            'min_puntos' => 100,
            'porcentaje' =>10
        ]);
        DB::table('descuentos')->insert([
            'min_puntos' => 150,
            'porcentaje' =>15
        ]);
        DB::table('descuentos')->insert([
            'min_puntos' => 200,
            'porcentaje' =>20
        ]);
        DB::table('descuentos')->insert([
            'min_puntos' => 250,
            'porcentaje' =>25
        ]);
        DB::table('descuentos')->insert([
            'min_puntos' => 300,
            'porcentaje' =>30
        ]);
        DB::table('descuentos')->insert([
            'min_puntos' => 350,
            'porcentaje' =>35
        ]);
        DB::table('descuentos')->insert([
            'min_puntos' => 400,
            'porcentaje' =>40
        ]);
        DB::table('descuentos')->insert([
            'min_puntos' => 450,
            'porcentaje' =>45
        ]);
        DB::table('descuentos')->insert([
            'min_puntos' => 500,
            'porcentaje' =>50
        ]);
        DB::table('descuentos')->insert([
            'min_puntos' => 550,
            'porcentaje' =>55
        ]);
        DB::table('descuentos')->insert([
            'min_puntos' => 600,
            'porcentaje' =>60
        ]);
    }
}
