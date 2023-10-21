<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ComputadoraController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\DetalleVentaController;
use App\Models\DetalleVenta;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

route::resource('rols', RolController::class);
route::resource('usuarios', UsuarioController::class);
route::resource('categorias', CategoriaController::class);
route::resource('clientes', ClienteController::class);
route::resource('proveedors', ProveedorController::class);
route::resource('computadoras', ComputadoraController::class);
route::resource('inventarios', InventarioController::class);
route::resource('compras', CompraController::class);
route::resource('ventas', VentaController::class);
route::resource('detalle_ventas', DetalleVentaController::class);

Illuminate\Support\Facades\Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
