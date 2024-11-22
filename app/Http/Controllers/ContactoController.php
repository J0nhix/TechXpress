<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use App\Models\Pedido;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    function index(){
        $pedidos = Pedido::all();
        $users = User::where('suscripcione_id', "!=", 3)->where('suscripcione_id', "!=", 4)->get();

        return Inertia::render('Contactoview', ['pedidos' => $pedidos, 'users' => $users]);
    }
}
