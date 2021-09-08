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
/* esta ruta muestra el login */
Route::get('/', HomeController::class)->name('index');
/* esta ruta muestra el listado de productos */
Route::get('productos', [ProductoController::class, 'listadoProductos'])->name('listadoProductos');

/* esta ruta muestra la vista de crear un producto */
Route::get('productos/crear', [ProductoController::class, 'crearProducto'])->name('crearProductos');

/* esta ruta es para el boton de guardar el producto */
Route::post('productos',function(Request $request){
    $nuevoProducto=new Producto;
    $nuevoProducto->descripcion = $request->input('descripcion');
    $nuevoProducto->precio = $request->input('precio');
    $nuevoProducto->save();
    return redirect()->route('listadoProductos')->with('info','EL PRODUCTO SE GUARDO CON EXITO');
})->name('productos.inventario'); 

/* esta ruta es para el boton de eliminar productos */
Route::delete('productos/{id}', function ($id) {
    $producto = Producto::findOrFail($id);
    $producto->delete();
    return redirect()->route('listadoProductos')->with('info','EL PRODUCTO SE ELIMINO CON EXITO');

})->name('eliminar');


/* esta ruta nos muestra la vista editar productos */
Route::get('/productos/{id}/editar', function($id){
    $producto = Producto::findOrFail($id);
    return view('productos.editar', compact('producto'));
})->name('editar');

Route::put('productos/{id}', function(Request $request, $id){
    $producto =Producto::findOrFail($id);
    $producto ->descripcion = $request->input('descripcion');
    $producto ->precio = $request->input('precio');
    $producto->save();
    return redirect()->route('listadoProductos')->with('info','EL PRODUCTO SE MODIFICO CON EXITO');


})->name('guardarEditado');