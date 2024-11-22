<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TablaOfertasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ofertas')->insert([
            'descripcion' => 'Post navidad',
            'fecha_inicio' => date("Y-m-d"),
            'fecha_fin' => '2024-1-31',
            'rebaja' => 25,
        ]);

        DB::table('ofertas')->insert([
            'descripcion' => 'Post navidad',
            'fecha_inicio' => date("Y-m-d"),
            'fecha_fin' => '2024-1-31',
            'rebaja' => 35,
        ]);

        DB::table('ofertas')->insert([
            'descripcion' => 'Post navidad',
            'fecha_inicio' => date("Y-m-d"),
            'fecha_fin' => '2024-1-31',
            'rebaja' => 68,
        ]);

        DB::table('ofertas')->insert([
            'descripcion' => 'Post navidad',
            'fecha_inicio' => date("Y-m-d"),
            'fecha_fin' => '2024-1-31',
            'rebaja' => 26,
        ]);

    }
}
