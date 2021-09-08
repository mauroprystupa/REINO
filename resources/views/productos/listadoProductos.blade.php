@extends('layouts.plantilla')

@section('titulo', 'Listado de Productos')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    LISTADO DE PRODUCTOS
                    <a href="{{route('crearProductos')}}" class="btn btn-success btn-sm float-right">CREAR</a>
                </div>
                <div class="card-body">
                    ...
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
