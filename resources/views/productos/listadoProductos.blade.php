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
                    @if (session('info'))
                    <div class="alert alert-success float-right">
                    {{session('info')}}
                </div>
                        
                    @endif
                    <table class="table table-hover table-sm">
                        <thead>
                            <th>Descripcion</th>
                            <th>Precio</th>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                
                            
                            <tr>
                                <td>{{$producto->descripcion}}</td>
                                <td>{{$producto->precio}}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
