<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Colore;
use App\Models\Pedido;
use App\Models\Calidade;
use App\Models\Producto;
use App\Models\Combinacione;
use Illuminate\Http\Request;
use App\Models\Almacenamiento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\CombinacioneProductoPedido;

class PedidoController extends Controller
{
    function index(){
        $productos = null;
        $usuarioAutenticado = Auth::user();
        $pedido = Pedido::where('user_id', '=', $usuarioAutenticado->id)->get()->first();
        if ($pedido != null){
            $productos = $pedido->productos()->get();
        }
        return Inertia::render('Pedido',['productos' => $productos]);
    }
    
    function añadirCarrito(Request $request){
        $productocomprado = $request->producto;
        $producto = Producto::where('id', '=', $productocomprado['id'])->get()->first();
        $usuarioAutenticado = Auth::user();
        $pedido = Pedido::where('user_id', '=', $usuarioAutenticado->id)->get()->first();
        if ($pedido != null){
            $pedido->productos()->attach($producto->id);
            if ($request->producto['precio_oferta']) $pedido->precio += $request->producto['precio_oferta'];
            else $pedido->precio += $request->producto['precio'];
            $pedido->save();
        } else{
            $pedido = new Pedido();
            $pedido->user_id = $usuarioAutenticado->id;
            $pedido->estado_id = 1;
            if ($request->producto['precio_oferta']) $pedido->precio = $request->producto['precio_oferta'];
            else $pedido->precio = $request->producto['precio'];
            $pedido->save();
            $pedido->productos()->attach($producto->id);
        }
        $productos = $pedido->productos()->get();
        return Redirect::to("/pedido");
    }

    public function delete(Request $request, $id)
    {
        $usuarioAutenticado = Auth::user();
        $producto = Producto::find($id);
        $pedido = Pedido::where('user_id', $usuarioAutenticado->id)->first();

        if ($pedido && $producto) {
            $pedido->productos()->detach($producto->id);
            if ($producto->precio_oferta !== null) $pedido->precio -= $producto->precio_oferta;
            else $pedido->precio -= $producto->precio;
            $pedido->save();
            $productos = $pedido->productos()->get();
            if (count($productos) == 0) {
                $pedido->delete();
            }
            return Redirect::to('/pedido')->with('productos', $productos);
        }
        return Redirect::to('/pedido');
    }

    function metodopago(Request $request){
        return Inertia::render('Pagoview',['pagodata' => $request]);
    }

    function procesopago(Request $request){
        $restaP=$request->puntos;
        $numeroComoCadena = "";
        $usuarioAutenticado = Auth::user();
        $pedido = Pedido::where('user_id', $usuarioAutenticado->id)->first();
        foreach ($request->productos as $key => $product) {
            $producto = Producto::find($product['id']);
            $producto->stock -= 1;
            $producto->save();
            $pedido->productos()->detach($product['id']);
        }
        $pedido->estado_id = 2;
        $pedido->precio = $request->precio;
        $pedido->save();
        $numero = $request->precio;
        if ($numero>=100) {
            $numeroComoCadena = (string)$numero;
            if (strlen(round($numeroComoCadena)) === 3) {
                $cifra = (int)$numeroComoCadena[0];
            } elseif (strlen(round($numeroComoCadena)) === 4) {
                $cifra = (int)substr($numeroComoCadena, 0, 2);
            }
            $num = (int)$cifra;

            if ($usuarioAutenticado->suscripcione_id == 1) {
                $puntos = $cifra*10;
            } elseif ($usuarioAutenticado->suscripcione_id == 2) {
                $puntos = $cifra*10;
                $puntosSuscripcion = $puntos*0.5;
                $puntos += $puntosSuscripcion; 
            }
            $usuarioAutenticado->puntos += $puntos;
            $usuarioAutenticado->puntos -= $restaP;
            $usuarioAutenticado->save();
        }else{
            $usuarioAutenticado->puntos -= $restaP;
            $usuarioAutenticado->save();
        }
        return Redirect::to('/dashboard');

    }

}
