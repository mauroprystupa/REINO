@extends('layouts.plantilla')

@section('titulo', 'Crear Producto')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    CREAR PRODUCTO
                </div>
                <div class="card-body">
                    <form action="{{route('productos.inventario')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">DESCRIPCION</label>
                            <input type="text" class="form-control" name="descripcion">
                        </div>
                        <div class="form-group">
                            <label for="">PRECIO</label>
                            <input type="number" class="form-control" name="precio">
                        </div>
                        <button type="submit" class="btn btn-primary">GUARDAR</button>
                        <a href="{{route('listadoProductos')}}" type="submit" class="btn btn-danger">CANCELAR</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection