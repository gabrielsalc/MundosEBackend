@extends('layout')
@section('title', 'Home del Sitio')
@section('contenido')
<div class="col-12 col-md-8 mx-auto my-5">
    <h1>Productos</h1>
    <p>Todos Nuestros Productos</p>
    <a class="btn btn-primary mb-4" href="/crud/public/productos/create">Crear Producto</a>
    <div class="row">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @foreach ($productos as $producto)
        <div class="col col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><a href="/crud/public/productos/{{$producto->id}}">{{$producto->name}}</a></h5>
                    <p class="card-text">{{$producto->descripcion}}</p>
                    <h3 class="card-text">${{$producto->precio}}</h3>
                </div>
                <div class="card-footer d-flex justify-content-around">
                    <a href="/crud/public/productos/edit/{{$producto->id}}" class="btn btn-secondary">Editar</a>
                    <form action="{{route('productos.destroy',$producto)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
