<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TablaMarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar marca Samsung (ID: 1)
        DB::table('marcas')->insert([
            'marca' => 'Samsung',
        ]);

        // Insertar marca Xiaomi (ID: 2)
        DB::table('marcas')->insert([
            'marca' => 'Xiaomi',
        ]);

        // Insertar marca Apple (ID: 3)
        DB::table('marcas')->insert([
            'marca' => 'Apple',
        ]);

        // Insertar marca HP (ID: 4)
        DB::table('marcas')->insert([
            'marca' => 'HP',
        ]);

        // Insertar marca Microsoft (ID: 5)
        DB::table('marcas')->insert([
            'marca' => 'Microsoft',
        ]);

        // Insertar marca Logitech (ID: 6)
        DB::table('marcas')->insert([
            'marca' => 'Logitech',
        ]);

        // Insertar marca Turtle Beach (ID: 7)
        DB::table('marcas')->insert([
            'marca' => 'Turtle Beach',
        ]);

        // Insertar marca Turtle Beach (ID: 8)
        DB::table('marcas')->insert([
            'marca' => 'Lenovo',
        ]);

        // Insertar marca Turtle Beach (ID: 9)
        DB::table('marcas')->insert([
            'marca' => 'Huawei',
        ]);

        // Insertar marca Turtle Beach (ID: 10)
        DB::table('marcas')->insert([
            'marca' => 'Honor',
        ]);

        // Insertar marca Turtle Beach (ID: 11)
        DB::table('marcas')->insert([
            'marca' => 'LG',
        ]);

        // Insertar marca Turtle Beach (ID: 12)
        DB::table('marcas')->insert([
            'marca' => 'Alcatel',
        ]);

        // Insertar marca Turtle Beach (ID: 13)
        DB::table('marcas')->insert([
            'marca' => 'Nothing Phone',
        ]);
    }
}
