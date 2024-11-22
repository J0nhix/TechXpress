<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Producto;
use App\Models\Combinacione;
use Illuminate\Database\Seeder;
use Database\Seeders\TablaRamSeeder;
use Database\Seeders\TablaMarcaSeeder;
use Database\Seeders\TablaUsersSeeder;
use Database\Seeders\TablaColoreSeeder;
use Database\Seeders\TablaOfertasSeeder;
use Database\Seeders\TablaCalidadeSeeder;
use Database\Seeders\TablaProductosSeeder;
use Database\Seeders\TablaDescuentosSeeder;
use Database\Seeders\TablaSuscripcionesSeeder;
use Database\Seeders\TablaAlmacenamientoSeeder;
use Database\Seeders\TablaCombinacioneProductoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TablaSuscripcionesSeeder::class);
        $this->call(TablaEstadosSeeder::class);
        $this->call(TablaUsersSeeder::class);
        $this->call(TablaOfertasSeeder::class);
        $this->call(TablaMarcaSeeder::class);
        $this->call(TablaProductosSeeder::class);
        $this->call(PedidoSeeder::class);
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
