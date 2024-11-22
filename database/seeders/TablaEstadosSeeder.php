<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TablaEstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estados')->insert([
            'descripcion' => 'Pendiente',
        ]);
        DB::table('estados')->insert([
            'descripcion' => 'Comprado',
        ]);
    }
}
