<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 200; $i++) {
            $randomDays = rand(1, 12);
            $randomYears = rand(0, 1);
            DB::table('pedidos')->insert([
                'user_id' => '3',
                'precio' => rand(200,3000),
                'estado_id' => '1',
                'created_at' => Carbon::now()->subMonths($randomDays)->subYears($randomYears)->format('Y-m-d H:i:s'),
            ]);
        }
        
    }
}
