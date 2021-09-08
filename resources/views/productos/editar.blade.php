@extends('layouts.plantilla')
@section('titulo', 'Editar Productos')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    EDITAR PRODUCTO
                </div>
                <div class="card-body">
                    <form action="{{route('guardarEditado',$producto->id)}}" method="POST">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">DESCRIPCION</label>
                            <input type="text" value="{{$producto ->descripcion}}" class="form-control" name="descripcion">
                        </div>
                        <div class="form-group">
                            <label for="">PRECIO</label>
                            <input type="number" value="{{$producto ->precio}}" class="form-control" name="precio">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">GUARDAR</button>
                        <a href="{{route('listadoProductos')}}" class="btn btn-danger btn-sm">CANCELAR</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection