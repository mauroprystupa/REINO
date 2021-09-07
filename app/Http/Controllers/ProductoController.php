<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function listadoProductos(){return view('productos.listadoProductos');}
    public function crearProducto(){return view('productos.crearProducto');}
    public function show(){}
}
