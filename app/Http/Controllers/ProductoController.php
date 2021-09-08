<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function listadoProductos(){
        $productos=Producto::orderBy('created_at','desc')->get();
        return view('productos.listadoProductos',compact('productos'));}
    public function crearProducto(){return view('productos.crearProducto');}
    public function show(){}
}
