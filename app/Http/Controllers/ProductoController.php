<?php

namespace App\Http\Controllers;

use App\Models\Ram;
use Inertia\Inertia;
use App\Models\Marca;
use App\Models\Colore;
use App\Models\Calidade;
use App\Models\Producto;
use App\Models\Combinacione;
use Illuminate\Http\Request;
use App\Models\Almacenamiento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ProductoController extends Controller
{

    function index () {
        $productosAleatorios = Producto::where('oferta_id', '=', null)->where('stock', '>', 0)->inRandomOrder()->take(12)->get();
        $productosDesc = Producto::where('stock', '>', 0)->has('oferta')->get();
        foreach ($productosDesc as $key => $value) {
            $porcentaje = $productosDesc[$key]->oferta->rebaja / 100;
            $precio_descontado = $productosDesc[$key]->precio * $porcentaje;
            $productosDesc[$key]->precio_oferta = $productosDesc[$key]->precio - $precio_descontado;
            $productosDesc[$key]->save();
        }
        return Inertia::render('App', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'productosCarrusel' => $productosAleatorios,
            'productosOfertas' => $productosDesc,
        
        ]);
    }

    public function mobil(){
      $moviles = Producto::where("tipo", "like", "Movil")->where("stock", ">", 0)->get();
      $marcas = Marca::all();
        return Inertia::render('Mobiles', ['productos' => $moviles, 'marcas' => $marcas]);
    }
    public function tablet(){
        $tablet = Producto::where("tipo", "like", "Tablet")->where("stock", ">", 0)->get();
        $marcas = Marca::all();
        return Inertia::render('Tablets', ['productos' => $tablet, 'marcas' => $marcas]);
    }
    public function auriculares(){
        $auriculares = Producto::where("tipo", "like", "Auriculares")->where("stock", ">", 0)->get();
        $marcas = Marca::all();
        return Inertia::render('Auriculares', ['productos' => $auriculares, 'marcas' => $marcas]);
    }
    public function portatil(){
        $portatil = Producto::where("tipo", "like", "Portatil")->where("stock", ">", 0)->get();
        $marcas = Marca::all();
        return Inertia::render('Portatiles', ['productos' => $portatil, 'marcas' => $marcas]);
    }
    public function reloj(){
        $smartwatch = Producto::where("tipo", "like", "Smartwatch")->where("stock", ">", 0)->get();
        $marcas = Marca::all();
        return Inertia::render('Relojes', ['productos' => $smartwatch, 'marcas' => $marcas]);
    }
    public function productos($id){
        $producto = Producto::find($id);
        return Inertia::render('Producto', ['producto' => $producto]);
    }
    public function venta(){
        $productos = Producto::all();
        $marcas = Marca::all();
        return Inertia::render('VentaForm', ['marcas' => $marcas, 'productos' => $productos]);
    }

    public function gestionProductos(){
        $productos = Producto::all();
        $marcas = Marca::all();
        if (Gate::allows('admin')) {
            return Inertia::render('AdminGestionProductos', ['marcas' => $marcas, 'productos' => $productos]);
        } else {
            return Redirect::to('dashboard');
        }
    }

    public function añadirProducto(Request $request){ 
        if ($request->modelo == 'otro') {
            if ($request->marca==1) {
                if ($request->tipo == 'Smartwatch' || $request->tipo == 'Auriculares') {
                    $blTr=0;$inTr=0;$miTr=0;
                    if ($request->bluetooth === 'true') {
                        $blTr=1;
                    }else{
                        $blTr=0;
                    }
                    if ($request->inalambrico === 'true') {
                        $inTr=1;
                    }else{
                        $inTr=0;
                    }
                    if ($request->microfono === 'true') {
                        $miTr=1;
                    }else{
                        $miTr=0;
                    }
                    $prodNuev=new Producto;
                    $prodNuev->marca_id=$request->marca;
                    $prodNuev->modelo=$request->otroModelo;
                    $prodNuev->tipo=$request->tipo;
                    $prodNuev->precio=rand(200,800);
                    $prodNuev->imagen=null;
                    $prodNuev->almacenamiento=null;
                    $prodNuev->color=null;
                    $prodNuev->ram=null;
                    $prodNuev->bluetooth=$blTr;
                    $prodNuev->inalambrico=$inTr;
                    $prodNuev->microfono=$miTr;
                    $prodNuev->tamaño=null;
                    $prodNuev->procesador=null;
                    $prodNuev->stock=1;
                    $prodNuev->oferta_id=null;
                    $prodNuev->save();

                    //PUNTOS
                    $numeroComoCadena = "";
                    $usuarioAutenticado = Auth::user();
                    $numero = $prodNuev->precio;
                    $numeroComoCadena = (string)$numero;
                    if (strlen($numeroComoCadena) === 3) {
                        $cifra = (int)$numeroComoCadena[0];
                    } elseif (strlen($numeroComoCadena) === 4) {
                        $cifra = (int)substr($numeroComoCadena, 0, 2);
                    }
                    $num = (int)$cifra;

                    if ($usuarioAutenticado->suscripcione_id == 1) {
                        $puntos = $cifra*10;
                    } elseif ($usuarioAutenticado->suscripcione_id == 2) {
                        $puntos = $cifra*10;
                        $puntosSuscripcion = $puntos*0.5;
                        $puntos += $puntosSuscripcion; 
                    }else{
                        $puntos = $cifra*10;
                    }
                    $usuarioAutenticado->puntos += $puntos;
                    $usuarioAutenticado->save();
                }else{
                    $prodNuev=new Producto;
                    $prodNuev->marca_id=$request->marca;
                    $prodNuev->modelo=$request->otroModelo;
                    $prodNuev->tipo=$request->tipo;
                    $prodNuev->precio=rand(500,1500);
                    $prodNuev->imagen=null;
                    $prodNuev->almacenamiento=$request->almacenamiento;
                    $prodNuev->color=$request->color;
                    $prodNuev->ram=$request->ram;
                    $prodNuev->bluetooth=null;
                    $prodNuev->inalambrico=null;
                    $prodNuev->microfono=null;
                    $prodNuev->tamaño=null;
                    $prodNuev->procesador=null;
                    $prodNuev->stock=1;
                    $prodNuev->oferta_id=null;
                    $prodNuev->save();

                    //PUNTOS
                    $numeroComoCadena = "";
                    $usuarioAutenticado = Auth::user();
                    $numero = $prodNuev->precio;
                    $numeroComoCadena = (string)$numero;
                    if (strlen($numeroComoCadena) === 3) {
                        $cifra = (int)$numeroComoCadena[0];
                    } elseif (strlen($numeroComoCadena) === 4) {
                        $cifra = (int)substr($numeroComoCadena, 0, 2);
                    }
                    $num = (int)$cifra;

                    if ($usuarioAutenticado->suscripcione_id == 1) {
                        $puntos = $cifra*10;
                    } elseif ($usuarioAutenticado->suscripcione_id == 2) {
                        $puntos = $cifra*10;
                        $puntosSuscripcion = $puntos*0.5;
                        $puntos += $puntosSuscripcion; 
                    }else{
                        $puntos = $cifra*10;
                    }
                    $usuarioAutenticado->puntos += $puntos;
                    $usuarioAutenticado->save();
                }
            }elseif ($request->marca==2){
                if ($request->tipo == 'Smartwatch' || $request->tipo == 'Auriculares') {
                    $blTr=0;$inTr=0;$miTr=0;
                    if ($request->bluetooth === 'true') {
                        $blTr=1;
                    }else{
                        $blTr=0;
                    }
                    if ($request->inalambrico === 'true') {
                        $inTr=1;
                    }else{
                        $inTr=0;
                    }
                    if ($request->microfono === 'true') {
                        $miTr=1;
                    }else{
                        $miTr=0;
                    }
                    $prodNuev=new Producto;
                    $prodNuev->marca_id=$request->marca;
                    $prodNuev->modelo=$request->otroModelo;
                    $prodNuev->tipo=$request->tipo;
                    $prodNuev->precio=rand(70,300);
                    $prodNuev->imagen=null;
                    $prodNuev->almacenamiento=null;
                    $prodNuev->color=null;
                    $prodNuev->ram=null;
                    $prodNuev->bluetooth=$blTr;
                    $prodNuev->inalambrico=$inTr;
                    $prodNuev->microfono=$miTr;
                    $prodNuev->tamaño=null;
                    $prodNuev->procesador=null;
                    $prodNuev->stock=1;
                    $prodNuev->oferta_id=null;
                    $prodNuev->save();

                    //PUNTOS
                    $numeroComoCadena = "";
                    $usuarioAutenticado = Auth::user();
                    $numero = $prodNuev->precio;
                    $numeroComoCadena = (string)$numero;
                    if (strlen($numeroComoCadena) === 3) {
                        $cifra = (int)$numeroComoCadena[0];
                    } elseif (strlen($numeroComoCadena) === 4) {
                        $cifra = (int)substr($numeroComoCadena, 0, 2);
                    }
                    $num = (int)$cifra;

                    if ($usuarioAutenticado->suscripcione_id == 1) {
                        $puntos = $cifra*10;
                    } elseif ($usuarioAutenticado->suscripcione_id == 2) {
                        $puntos = $cifra*10;
                        $puntosSuscripcion = $puntos*0.5;
                        $puntos += $puntosSuscripcion; 
                    }else{
                        $puntos = $cifra*10;
                    }
                    $usuarioAutenticado->puntos += $puntos;
                    $usuarioAutenticado->save();
                }else{
                    $prodNuev=new Producto;
                    $prodNuev->marca_id=$request->marca;
                    $prodNuev->modelo=$request->otroModelo;
                    $prodNuev->tipo=$request->tipo;
                    $prodNuev->precio=rand(400,1000);
                    $prodNuev->imagen=null;
                    $prodNuev->almacenamiento=$request->almacenamiento;
                    $prodNuev->color=$request->color;
                    $prodNuev->ram=$request->ram;
                    $prodNuev->bluetooth=null;
                    $prodNuev->inalambrico=null;
                    $prodNuev->microfono=null;
                    $prodNuev->tamaño=null;
                    $prodNuev->procesador=null;
                    $prodNuev->stock=1;
                    $prodNuev->oferta_id=null;
                    $prodNuev->save();

                    //PUNTOS
                    $numeroComoCadena = "";
                    $usuarioAutenticado = Auth::user();
                    $numero = $prodNuev->precio;
                    $numeroComoCadena = (string)$numero;
                    if (strlen($numeroComoCadena) === 3) {
                        $cifra = (int)$numeroComoCadena[0];
                    } elseif (strlen($numeroComoCadena) === 4) {
                        $cifra = (int)substr($numeroComoCadena, 0, 2);
                    }
                    $num = (int)$cifra;

                    if ($usuarioAutenticado->suscripcione_id == 1) {
                        $puntos = $cifra*10;
                    } elseif ($usuarioAutenticado->suscripcione_id == 2) {
                        $puntos = $cifra*10;
                        $puntosSuscripcion = $puntos*0.5;
                        $puntos += $puntosSuscripcion; 
                    }else{
                        $puntos = $cifra*10;
                    }
                    $usuarioAutenticado->puntos += $puntos;
                    $usuarioAutenticado->save();
                }
            }elseif ($request->marca==3) {
                if ($request->tipo == 'Smartwatch' || $request->tipo == 'Auriculares') {
                    $blTr=0;$inTr=0;$miTr=0;
                    if ($request->bluetooth === 'true') {
                        $blTr=1;
                    }else{
                        $blTr=0;
                    }
                    if ($request->inalambrico === 'true') {
                        $inTr=1;
                    }else{
                        $inTr=0;
                    }
                    if ($request->microfono === 'true') {
                        $miTr=1;
                    }else{
                        $miTr=0;
                    }
                    $prodNuev=new Producto;
                    $prodNuev->marca_id=$request->marca;
                    $prodNuev->modelo=$request->otroModelo;
                    $prodNuev->tipo=$request->tipo;
                    $prodNuev->precio=rand(200,1000);
                    $prodNuev->imagen=null;
                    $prodNuev->almacenamiento=null;
                    $prodNuev->color=null;
                    $prodNuev->ram=null;
                    $prodNuev->bluetooth=$blTr;
                    $prodNuev->inalambrico=$inTr;
                    $prodNuev->microfono=$miTr;
                    $prodNuev->tamaño=null;
                    $prodNuev->procesador=null;
                    $prodNuev->stock=1;
                    $prodNuev->oferta_id=null;
                    $prodNuev->save();

                    //PUNTOS
                    $numeroComoCadena = "";
                    $usuarioAutenticado = Auth::user();
                    $numero = $prodNuev->precio;
                    $numeroComoCadena = (string)$numero;
                    if (strlen($numeroComoCadena) === 3) {
                        $cifra = (int)$numeroComoCadena[0];
                    } elseif (strlen($numeroComoCadena) === 4) {
                        $cifra = (int)substr($numeroComoCadena, 0, 2);
                    }
                    $num = (int)$cifra;

                    if ($usuarioAutenticado->suscripcione_id == 1) {
                        $puntos = $cifra*10;
                    } elseif ($usuarioAutenticado->suscripcione_id == 2) {
                        $puntos = $cifra*10;
                        $puntosSuscripcion = $puntos*0.5;
                        $puntos += $puntosSuscripcion; 
                    }else{
                        $puntos = $cifra*10;
                    }
                    $usuarioAutenticado->puntos += $puntos;
                    $usuarioAutenticado->save();
                }else{
                    $prodNuev=new Producto;
                    $prodNuev->marca_id=$request->marca;
                    $prodNuev->modelo=$request->otroModelo;
                    $prodNuev->tipo=$request->tipo;
                    $prodNuev->precio=rand(700,2000);
                    $prodNuev->imagen=null;
                    $prodNuev->almacenamiento=$request->almacenamiento;
                    $prodNuev->color=$request->color;
                    $prodNuev->ram=$request->ram;
                    $prodNuev->bluetooth=null;
                    $prodNuev->inalambrico=null;
                    $prodNuev->microfono=null;
                    $prodNuev->tamaño=null;
                    $prodNuev->procesador=null;
                    $prodNuev->stock=1;
                    $prodNuev->oferta_id=null;
                    $prodNuev->save();

                    //PUNTOS
                    $numeroComoCadena = "";
                    $usuarioAutenticado = Auth::user();
                    $numero = $prodNuev->precio;
                    $numeroComoCadena = (string)$numero;
                    if (strlen($numeroComoCadena) === 3) {
                        $cifra = (int)$numeroComoCadena[0];
                    } elseif (strlen($numeroComoCadena) === 4) {
                        $cifra = (int)substr($numeroComoCadena, 0, 2);
                    }
                    $num = (int)$cifra;

                    if ($usuarioAutenticado->suscripcione_id == 1) {
                        $puntos = $cifra*10;
                    } elseif ($usuarioAutenticado->suscripcione_id == 2) {
                        $puntos = $cifra*10;
                        $puntosSuscripcion = $puntos*0.5;
                        $puntos += $puntosSuscripcion; 
                    }else{
                        $puntos = $cifra*10;
                    }
                    $usuarioAutenticado->puntos += $puntos;
                    $usuarioAutenticado->save();
                }
            }elseif ($request->marca==4) {
                if ($request->tipo == 'Smartwatch' || $request->tipo == 'Auriculares') {
                    $blTr=0;$inTr=0;$miTr=0;
                    if ($request->bluetooth === 'true') {
                        $blTr=1;
                    }else{
                        $blTr=0;
                    }
                    if ($request->inalambrico === 'true') {
                        $inTr=1;
                    }else{
                        $inTr=0;
                    }
                    if ($request->microfono === 'true') {
                        $miTr=1;
                    }else{
                        $miTr=0;
                    }
                    $prodNuev=new Producto;
                    $prodNuev->marca_id=$request->marca;
                    $prodNuev->modelo=$request->otroModelo;
                    $prodNuev->tipo=$request->tipo;
                    $prodNuev->precio=rand(200,500);
                    $prodNuev->imagen=null;
                    $prodNuev->almacenamiento=null;
                    $prodNuev->color=null;
                    $prodNuev->ram=null;
                    $prodNuev->bluetooth=$blTr;
                    $prodNuev->inalambrico=$inTr;
                    $prodNuev->microfono=$miTr;
                    $prodNuev->tamaño=null;
                    $prodNuev->procesador=null;
                    $prodNuev->stock=1;
                    $prodNuev->oferta_id=null;
                    $prodNuev->save();

                    //PUNTOS
                    $numeroComoCadena = "";
                    $usuarioAutenticado = Auth::user();
                    $numero = $prodNuev->precio;
                    $numeroComoCadena = (string)$numero;
                    if (strlen($numeroComoCadena) === 3) {
                        $cifra = (int)$numeroComoCadena[0];
                    } elseif (strlen($numeroComoCadena) === 4) {
                        $cifra = (int)substr($numeroComoCadena, 0, 2);
                    }
                    $num = (int)$cifra;

                    if ($usuarioAutenticado->suscripcione_id == 1) {
                        $puntos = $cifra*10;
                    } elseif ($usuarioAutenticado->suscripcione_id == 2) {
                        $puntos = $cifra*10;
                        $puntosSuscripcion = $puntos*0.5;
                        $puntos += $puntosSuscripcion; 
                    }else{
                        $puntos = $cifra*10;
                    }
                    $usuarioAutenticado->puntos += $puntos;
                    $usuarioAutenticado->save();
                }else{
                    $prodNuev=new Producto;
                    $prodNuev->marca_id=$request->marca;
                    $prodNuev->modelo=$request->otroModelo;
                    $prodNuev->tipo=$request->tipo;
                    $prodNuev->precio=rand(300,1500);
                    $prodNuev->imagen=null;
                    $prodNuev->almacenamiento=$request->almacenamiento;
                    $prodNuev->color=$request->color;
                    $prodNuev->ram=$request->ram;
                    $prodNuev->bluetooth=null;
                    $prodNuev->inalambrico=null;
                    $prodNuev->microfono=null;
                    $prodNuev->tamaño=null;
                    $prodNuev->procesador=null;
                    $prodNuev->stock=1;
                    $prodNuev->oferta_id=null;
                    $prodNuev->save();

                    //PUNTOS
                    $numeroComoCadena = "";
                    $usuarioAutenticado = Auth::user();
                    $numero = $prodNuev->precio;
                    $numeroComoCadena = (string)$numero;
                    if (strlen($numeroComoCadena) === 3) {
                        $cifra = (int)$numeroComoCadena[0];
                    } elseif (strlen($numeroComoCadena) === 4) {
                        $cifra = (int)substr($numeroComoCadena, 0, 2);
                    }
                    $num = (int)$cifra;

                    if ($usuarioAutenticado->suscripcione_id == 1) {
                        $puntos = $cifra*10;
                    } elseif ($usuarioAutenticado->suscripcione_id == 2) {
                        $puntos = $cifra*10;
                        $puntosSuscripcion = $puntos*0.5;
                        $puntos += $puntosSuscripcion; 
                    }else{
                        $puntos = $cifra*10;
                    }
                    $usuarioAutenticado->puntos += $puntos;
                    $usuarioAutenticado->save();
                }
            }elseif ($request->marca==5) {
                if ($request->tipo == 'Smartwatch' || $request->tipo == 'Auriculares') {
                    $blTr=0;$inTr=0;$miTr=0;
                    if ($request->bluetooth === 'true') {
                        $blTr=1;
                    }else{
                        $blTr=0;
                    }
                    if ($request->inalambrico === 'true') {
                        $inTr=1;
                    }else{
                        $inTr=0;
                    }
                    if ($request->microfono === 'true') {
                        $miTr=1;
                    }else{
                        $miTr=0;
                    }
                    $prodNuev=new Producto;
                    $prodNuev->marca_id=$request->marca;
                    $prodNuev->modelo=$request->otroModelo;
                    $prodNuev->tipo=$request->tipo;
                    $prodNuev->precio=rand(20,100);
                    $prodNuev->imagen=null;
                    $prodNuev->almacenamiento=null;
                    $prodNuev->color=null;
                    $prodNuev->ram=null;
                    $prodNuev->bluetooth=$blTr;
                    $prodNuev->inalambrico=$inTr;
                    $prodNuev->microfono=$miTr;
                    $prodNuev->tamaño=null;
                    $prodNuev->procesador=null;
                    $prodNuev->stock=1;
                    $prodNuev->oferta_id=null;
                    $prodNuev->save();

                    //PUNTOS
                    $numeroComoCadena = "";
                    $usuarioAutenticado = Auth::user();
                    $numero = $prodNuev->precio;
                    $numeroComoCadena = (string)$numero;
                    if (strlen($numeroComoCadena) === 3) {
                        $cifra = (int)$numeroComoCadena[0];
                    } elseif (strlen($numeroComoCadena) === 4) {
                        $cifra = (int)substr($numeroComoCadena, 0, 2);
                    }
                    $num = (int)$cifra;

                    if ($usuarioAutenticado->suscripcione_id == 1) {
                        $puntos = $cifra*10;
                    } elseif ($usuarioAutenticado->suscripcione_id == 2) {
                        $puntos = $cifra*10;
                        $puntosSuscripcion = $puntos*0.5;
                        $puntos += $puntosSuscripcion; 
                    }else{
                        $puntos = $cifra*10;
                    }
                    $usuarioAutenticado->puntos += $puntos;
                    $usuarioAutenticado->save();
                }else{
                    $prodNuev=new Producto;
                    $prodNuev->marca_id=$request->marca;
                    $prodNuev->modelo=$request->otroModelo;
                    $prodNuev->tipo=$request->tipo;
                    $prodNuev->precio=rand(700,1000);
                    $prodNuev->imagen=null;
                    $prodNuev->almacenamiento=$request->almacenamiento;
                    $prodNuev->color=$request->color;
                    $prodNuev->ram=$request->ram;
                    $prodNuev->bluetooth=null;
                    $prodNuev->inalambrico=null;
                    $prodNuev->microfono=null;
                    $prodNuev->tamaño=null;
                    $prodNuev->procesador=null;
                    $prodNuev->stock=1;
                    $prodNuev->oferta_id=null;
                    $prodNuev->save();

                    //PUNTOS
                    $numeroComoCadena = "";
                    $usuarioAutenticado = Auth::user();
                    $numero = $prodNuev->precio;
                    $numeroComoCadena = (string)$numero;
                    if (strlen($numeroComoCadena) === 3) {
                        $cifra = (int)$numeroComoCadena[0];
                    } elseif (strlen($numeroComoCadena) === 4) {
                        $cifra = (int)substr($numeroComoCadena, 0, 2);
                    }
                    $num = (int)$cifra;

                    if ($usuarioAutenticado->suscripcione_id == 1) {
                        $puntos = $cifra*10;
                    } elseif ($usuarioAutenticado->suscripcione_id == 2) {
                        $puntos = $cifra*10;
                        $puntosSuscripcion = $puntos*0.5;
                        $puntos += $puntosSuscripcion; 
                    }else{
                        $puntos = $cifra*10;
                    }
                    $usuarioAutenticado->puntos += $puntos;
                    $usuarioAutenticado->save();
                }
            }elseif ($request->marca==6) {
                if ($request->tipo == 'Smartwatch' || $request->tipo == 'Auriculares') {
                    $blTr=0;$inTr=0;$miTr=0;
                    if ($request->bluetooth === 'true') {
                        $blTr=1;
                    }else{
                        $blTr=0;
                    }
                    if ($request->inalambrico === 'true') {
                        $inTr=1;
                    }else{
                        $inTr=0;
                    }
                    if ($request->microfono === 'true') {
                        $miTr=1;
                    }else{
                        $miTr=0;
                    }
                    $prodNuev=new Producto;
                    $prodNuev->marca_id=$request->marca;
                    $prodNuev->modelo=$request->otroModelo;
                    $prodNuev->tipo=$request->tipo;
                    $prodNuev->precio=rand(200,300);
                    $prodNuev->imagen=null;
                    $prodNuev->almacenamiento=null;
                    $prodNuev->color=null;
                    $prodNuev->ram=null;
                    $prodNuev->bluetooth=$blTr;
                    $prodNuev->inalambrico=$inTr;
                    $prodNuev->microfono=$miTr;
                    $prodNuev->tamaño=null;
                    $prodNuev->procesador=null;
                    $prodNuev->stock=1;
                    $prodNuev->oferta_id=null;
                    $prodNuev->save();

                    //PUNTOS
                    $numeroComoCadena = "";
                    $usuarioAutenticado = Auth::user();
                    $numero = $prodNuev->precio;
                    $numeroComoCadena = (string)$numero;
                    if (strlen($numeroComoCadena) === 3) {
                        $cifra = (int)$numeroComoCadena[0];
                    } elseif (strlen($numeroComoCadena) === 4) {
                        $cifra = (int)substr($numeroComoCadena, 0, 2);
                    }
                    $num = (int)$cifra;

                    if ($usuarioAutenticado->suscripcione_id == 1) {
                        $puntos = $cifra*10;
                    } elseif ($usuarioAutenticado->suscripcione_id == 2) {
                        $puntos = $cifra*10;
                        $puntosSuscripcion = $puntos*0.5;
                        $puntos += $puntosSuscripcion; 
                    }else{
                        $puntos = $cifra*10;
                    }
                    $usuarioAutenticado->puntos += $puntos;
                    $usuarioAutenticado->save();
                }else{
                    $prodNuev=new Producto;
                    $prodNuev->marca_id=$request->marca;
                    $prodNuev->modelo=$request->otroModelo;
                    $prodNuev->tipo=$request->tipo;
                    $prodNuev->precio=rand(400,3500);
                    $prodNuev->imagen=null;
                    $prodNuev->almacenamiento=$request->almacenamiento;
                    $prodNuev->color=$request->color;
                    $prodNuev->ram=$request->ram;
                    $prodNuev->bluetooth=null;
                    $prodNuev->inalambrico=null;
                    $prodNuev->microfono=null;
                    $prodNuev->tamaño=null;
                    $prodNuev->procesador=null;
                    $prodNuev->stock=1;
                    $prodNuev->oferta_id=null;
                    $prodNuev->save();

                    //PUNTOS
                    $numeroComoCadena = "";
                    $usuarioAutenticado = Auth::user();
                    $numero = $prodNuev->precio;
                    $numeroComoCadena = (string)$numero;
                    if (strlen($numeroComoCadena) === 3) {
                        $cifra = (int)$numeroComoCadena[0];
                    } elseif (strlen($numeroComoCadena) === 4) {
                        $cifra = (int)substr($numeroComoCadena, 0, 2);
                    }
                    $num = (int)$cifra;

                    if ($usuarioAutenticado->suscripcione_id == 1) {
                        $puntos = $cifra*10;
                    } elseif ($usuarioAutenticado->suscripcione_id == 2) {
                        $puntos = $cifra*10;
                        $puntosSuscripcion = $puntos*0.5;
                        $puntos += $puntosSuscripcion; 
                    }else{
                        $puntos = $cifra*10;
                    }
                    $usuarioAutenticado->puntos += $puntos;
                    $usuarioAutenticado->save();
                }
            }
            
        }else{
            if ($request->tipo == 'Smartwatch' || $request->tipo == 'Auriculares') {
                $aux1=0;$aux2=0;$aux3=0;
                if ($request->bluetooth === 'true') {
                    $aux1=1;
                }else{
                    $aux1=0;
                }
                if ($request->inalambrico === 'true') {
                    $aux2=1;
                }else{
                    $aux2=0;
                }
                if ($request->microfono === 'true') {
                    $aux3=1;
                }else{
                    $aux3=0;
                }
                $producto = Producto::where('modelo', 'like', $request->modelo)->where('bluetooth', 'like', $aux1)->where('inalambrico', 'like', $aux2)->where('microfono', 'like', $aux3)->get()->first();
                if ($producto) {
                    $producto->stock += 1;
                    $producto->save();

                    //PUNTOS
                    $numeroComoCadena = "";
                    $usuarioAutenticado = Auth::user();
                    $numero = $producto->precio;
                    $numeroComoCadena = (string)$numero;
                    if (strlen($numeroComoCadena) === 3) {
                        $cifra = (int)$numeroComoCadena[0];
                    } elseif (strlen($numeroComoCadena) === 4) {
                        $cifra = (int)substr($numeroComoCadena, 0, 2);
                    }
                    $num = (int)$cifra;

                    if ($usuarioAutenticado->suscripcione_id == 1) {
                        $puntos = $cifra*10;
                    } elseif ($usuarioAutenticado->suscripcione_id == 2) {
                        $puntos = $cifra*10;
                        $puntosSuscripcion = $puntos*0.5;
                        $puntos += $puntosSuscripcion; 
                    }else{
                        $puntos = $cifra*10;
                    }
                    $usuarioAutenticado->puntos += $puntos;
                    $usuarioAutenticado->save();
                }else{
                    $produ=Producto::where('modelo','like',$request->modelo)->get()->first();
                    $productoNuevo=new Producto();
                    $productoNuevo->marca_id=$request->marca;
                    $productoNuevo->modelo=$request->modelo;
                    $productoNuevo->tipo=$request->tipo;
                    $productoNuevo->precio=$produ->precio;
                    $productoNuevo->imagen=$produ->imagen;
                    $productoNuevo->almacenamiento=null;
                    $productoNuevo->color=null;
                    $productoNuevo->ram=null;
                    $productoNuevo->bluetooth=$aux1;
                    $productoNuevo->inalambrico=$aux2;
                    $productoNuevo->microfono=$aux3;
                    $productoNuevo->tamaño=$produ->tamaño;
                    $productoNuevo->procesador=null;
                    $productoNuevo->stock=1;
                    $productoNuevo->oferta_id=null;
                    $productoNuevo->save();

                    //PUNTOS
                    $numeroComoCadena = "";
                    $usuarioAutenticado = Auth::user();
                    $numero = $produ->precio;
                    $numeroComoCadena = (string)$numero;
                    if (strlen($numeroComoCadena) === 3) {
                        $cifra = (int)$numeroComoCadena[0];
                    } elseif (strlen($numeroComoCadena) === 4) {
                        $cifra = (int)substr($numeroComoCadena, 0, 2);
                    }
                    $num = (int)$cifra;

                    if ($usuarioAutenticado->suscripcione_id == 1) {
                        $puntos = $cifra*10;
                    } elseif ($usuarioAutenticado->suscripcione_id == 2) {
                        $puntos = $cifra*10;
                        $puntosSuscripcion = $puntos*0.5;
                        $puntos += $puntosSuscripcion; 
                    }else{
                        $puntos = $cifra*10;
                    }
                    $usuarioAutenticado->puntos += $puntos;
                    $usuarioAutenticado->save();
                }
                
                
            }else{
                $producto = Producto::where('modelo', '=', $request->modelo)->where('almacenamiento', '=', $request->almacenamiento)->where('ram', '=', $request->ram)->where('color', '=', $request->color)->get()->first();
                if ($producto) {
                    $producto->stock += 1;
                    $producto->save();

                    //PUNTOS
                    $numeroComoCadena = "";
                    $usuarioAutenticado = Auth::user();
                    $numero = $producto->precio;
                    $numeroComoCadena = (string)$numero;
                    if (strlen($numeroComoCadena) === 3) {
                        $cifra = (int)$numeroComoCadena[0];
                    } elseif (strlen($numeroComoCadena) === 4) {
                        $cifra = (int)substr($numeroComoCadena, 0, 2);
                    }
                    $num = (int)$cifra;

                    if ($usuarioAutenticado->suscripcione_id == 1) {
                        $puntos = $cifra*10;
                    } elseif ($usuarioAutenticado->suscripcione_id == 2) {
                        $puntos = $cifra*10;
                        $puntosSuscripcion = $puntos*0.5;
                        $puntos += $puntosSuscripcion; 
                    }else{
                        $puntos = $cifra*10;
                    }
                    $usuarioAutenticado->puntos += $puntos;
                    $usuarioAutenticado->save();
                }else{
                    $produ=Producto::where('modelo','like',$request->modelo)->get()->first();
                    $productoNuevo=new Producto();
                    $productoNuevo->marca_id=$request->marca;
                    $productoNuevo->modelo=$request->modelo;
                    $productoNuevo->tipo=$request->tipo;
                    $productoNuevo->precio=$produ->precio;
                    $productoNuevo->imagen=$produ->imagen;
                    $productoNuevo->almacenamiento=$request->almacenamiento;
                    $productoNuevo->color=$request->color;
                    $productoNuevo->ram=$request->ram;
                    $productoNuevo->bluetooth=null;
                    $productoNuevo->inalambrico=null;
                    $productoNuevo->microfono=null;
                    $productoNuevo->tamaño=$produ->tamaño;
                    $productoNuevo->procesador=null;
                    $productoNuevo->stock=1;
                    $productoNuevo->oferta_id=null;
                    $productoNuevo->save();

                    //PUNTOS
                    $numeroComoCadena = "";
                    $usuarioAutenticado = Auth::user();
                    $numero = $produ->precio;
                    $numeroComoCadena = (string)$numero;
                    if (strlen($numeroComoCadena) === 3) {
                        $cifra = (int)$numeroComoCadena[0];
                    } elseif (strlen($numeroComoCadena) === 4) {
                        $cifra = (int)substr($numeroComoCadena, 0, 2);
                    }
                    $num = (int)$cifra;

                    if ($usuarioAutenticado->suscripcione_id == 1) {
                        $puntos = $cifra*10;
                    } elseif ($usuarioAutenticado->suscripcione_id == 2) {
                        $puntos = $cifra*10;
                        $puntosSuscripcion = $puntos*0.5;
                        $puntos += $puntosSuscripcion; 
                    }else{
                        $puntos = $cifra*10;
                    }
                    $usuarioAutenticado->puntos += $puntos;
                    $usuarioAutenticado->save();
                }
            }

        }
        
        return Redirect::to('/dashboard');
    }

    public function eliminarProducto(Request $request){
        if (!Gate::allows('admin')) {
            return Redirect::to('dashboard');
        } 
        $producto = Producto::where('modelo', 'like', $request->modelo)->where('almacenamiento', 'like', $request->almacenamiento)->where('ram', 'like', $request->ram)->where('color', 'like', $request->color)->get()->first();
        if ($producto) {
            if ($producto->stock==0) {
                $productos = Producto::all();
                $marcas = Marca::all();
                return Inertia::render('AdminGestionProductos', ['marcas' => $marcas, 'productos' => $productos])->with('error', 'El producto no pudo ser eliminado ya que el stock es de 0.');
            }else{
                $producto->stock -= 1;
                $producto->save();
                return Redirect::to('/dashboard');
            }
            
        }else{
            $productos = Producto::all();
            $marcas = Marca::all();
            return Inertia::render('AdminGestionProductos', ['marcas' => $marcas, 'productos' => $productos])->with('error', 'El producto no pudo ser eliminado');
        }   
        
    }

    public function eliminarModelo(Request $request){
        if (!Gate::allows('admin')) {
            return Redirect::to('dashboard');
        } 
        $producto = Producto::where('modelo', 'like', $request->modelo)->get()->first();
        $producto->delete();
        return Redirect::to('/dashboard');
    }

    public function searchAction(Request $request) {  
        $searchQuery = $request->input('query');
        $producto = Producto::where('modelo', 'like', '%' . $searchQuery . '%')->first();
        
        // Redirect to the product view with the found product ID
        return Redirect::route('producto', ['id' => $producto->id]);
    }

    function buscar($modelo){
        $productos = Producto::where('stock', '>', 0)->get();
        $marcas = Marca::all();
        return Inertia::render('productoBusqueda', ['modelo' => $modelo, 'productos' => $productos, 'marcas' => $marcas]);
    }


}
