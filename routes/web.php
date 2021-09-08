<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use App\Models\Producto;


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

Route::get('/', HomeController::class)->name('index');

Route::get('productos', [ProductoController::class, 'listadoProductos'])->name('listadoProductos');
Route::get('productos/crear', [ProductoController::class, 'crearProducto'])->name('crearProductos');
Route::post('productos',function(Request $request){
    $nuevoProducto=new Producto;
    $nuevoProducto->descripcion = $request->input('descripcion');
    $nuevoProducto->precio = $request->input('precio');
    $nuevoProducto->save();
    return redirect()->route('listadoProductos');
    
})->name('productos.inventario'); 