<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;

class GraficoController extends Controller
{
    public function index(){

        
        /*$marcas = Producto::select(DB::raw('marca_id as marca'), DB::raw('sum(stock) as cantidad'))
            ->groupBy('marca')
            ->get();*/
        $marcas = Producto::select('marcas.marca as marca', DB::raw('sum(stock) as cantidad'))
            ->join('marcas', 'productos.marca_id', '=', 'marcas.id')
            ->groupBy('marca')
            ->get();
        $pedidosMes = Pedido::select(
                DB::raw('DATE_FORMAT(created_at, "%Y-%m") as fecha'), 
                DB::raw('count(*) as cantidad'))
            ->where('created_at', '>=', now()->subMonths(12))
            ->groupBy('fecha')
            ->orderBy('fecha', 'asc')
            ->get();

        $pedidosAnio = Pedido::select(
                DB::raw('YEAR(created_at) as anio'), 
                DB::raw('count(*) as cantidad'))
            ->where('created_at', '>=', now()->subYears(4))
            ->groupBy('anio')
            ->orderBy('anio', 'asc')
            ->get();
        if (Gate::allows('admin')) {
            $admin = true;
            return Inertia::render('Grafico', [
                'can' => [
                    'create_user' => Auth::user()->can('create', User::class),
                ],
                'pedidosM' => $pedidosMes,
                'pedidosA' => $pedidosAnio,
                'productos' => $marcas,
            ])->with('admin', $admin);
        } else {
            $admin = false;
            return Redirect::to('dashboard');
        }
        

    }
}
