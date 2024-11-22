<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TablaUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'password' => Hash::make('admin'),
            'dni' => '00000000A',
            'alias' => 'admin',
            'municipio' => 'calle admin',
            'puntos' => 0,
            'suscripcione_id' => 3
        ]);
        DB::table('users')->insert([
            'name' => 'reacondicionado',
            'email' => 'reacondicionado@reacondicionado.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'password' => Hash::make('reacondicionado'),
            'dni' => '00000000B',
            'alias' => 'reacondicionado',
            'municipio' => 'calle reacondicionado',
            'puntos' => 0,
            'suscripcione_id' => 4
        ]);
        DB::table('users')->insert([
            'name' => 'prueba',
            'email' => 'prueba@prueba.com',
            'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'password' => Hash::make('prueba'),
            'dni' => '00000000C',
            'alias' => 'prueba',
            'municipio' => 'calle prueba',
            'puntos' => 0,
            'suscripcione_id' => 1
        ]);
    }
}
