<?php

use Inertia\Inertia;
use App\Models\Producto;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\GraficoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductoController::class, 'index']);

Route::get('/dashboard', function () {
    $productosAleatorios = Producto::where('oferta_id', '=', null)->where('stock', '>', 0)->inRandomOrder()->take(12)->get();
    $productosDesc = Producto::where('stock', '>', 0)->has('oferta')->get(); 
    foreach ($productosDesc as $key => $value) {
            $productosDesc[$key]->oferta->rebaja;
        }
        
    return Inertia::render('Dashboard', ['productos' => $productosAleatorios, 'productosOfertas' => $productosDesc
]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/basico', [ProfileController::class, 'desSuscribirse'])->name('profile.downgrade');
});

Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios');
Route::get('/usuarios/{id}', [UserController::class, 'destroy'])->name('usuarios.destroy');
Route::post('/usuarios', [UserController::class, 'añadir'])->name('añadir');

Route::get('/grafico', [GraficoController::class, 'index'])->name('grafico');

Route::get('/producto/venta', [ProductoController::class, 'venta'])->name('venta');

Route::prefix("producto")->group( function (){
    Route::get('/mobiles',  [ProductoController::class, 'mobil']);
    Route::get('/tablets', [ProductoController::class, 'tablet']);
    Route::get('/auriculares', [ProductoController::class, 'auriculares']);
    Route::get('/portatiles', [ProductoController::class, 'portatil']);
    Route::get('/relojes', [ProductoController::class, 'reloj']);
    Route::get('/{id}', [ProductoController::class, 'productos'])->name('producto');
    //Route::get('/venta', [ProductoController::class, 'venta'])->name('venta');
})->middleware(['auth', 'verified']);

Route::prefix("admin")->group( function (){
    Route::get('/productos_gestion',  [ProductoController::class, 'gestionProductos'])->name('productos_gestion');
    Route::post('/añadirProducto',  [ProductoController::class, 'añadirProducto'])->name('añadirProducto');
    Route::post('/eliminarProducto',  [ProductoController::class, 'eliminarProducto'])->name('eliminarProducto');
    Route::post('/eliminarModelo',  [ProductoController::class, 'eliminarModelo'])->name('eliminarModelo');

})->middleware(['auth', 'verified']);

Route::post('/añadirCarrito',  [PedidoController::class, 'añadirCarrito'])->name('añadirCarrito');
Route::get('/suscripcionmodal',  [UserController::class, 'suscribirseview'])->name('suscripcion');
Route::post('/suscribirse',  [UserController::class, 'suscribirse'])->name('suscribirse');



Route::get('/pedido', [PedidoController::class, 'index'])->name('pedido');
Route::get('/pedido/{id}', [PedidoController::class, 'delete'])->name('pedido.delete');
Route::match(['get', 'post'], '/pedido/comprar', [PedidoController::class, 'metodopago'])->name('pedido.comprar');
Route::post('/pedido/procesopago', [PedidoController::class, 'procesopago'])->name('pedido.procesopago');

Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');


require __DIR__.'/auth.php';
