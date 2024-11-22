<?php

namespace Database\Seeders;

use App\Models\Producto;
use App\Models\Combinacione;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TablaCombinacioneProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $products = Producto::all();
        $combinations = Combinacione::all();

        // Tomar las primeras 19 combinaciones
        $firstCombinations = $combinations->take(432);

        // Tomar las combinaciones restantes
        $remainingCombinations = $combinations->slice(432);

        // Asignar las primeras 19 combinaciones a los primeros 19 productos
        foreach ($products->take(19) as $product) {
            //$randomCombinations = $combinations->random(rand(1, 432));
            $product->combinaciones()->attach($firstCombinations->pluck('id')->toArray());
        }

        // Asignar las combinaciones restantes a los productos restantes
        foreach ($products->slice(19) as $product) {
            //$randomCombinations2 = $combinations->random(rand(433, 440));
            $product->combinaciones()->attach($remainingCombinations->pluck('id')->toArray());
        }
    }
}
