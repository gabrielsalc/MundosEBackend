@extends('layout')
@section('title', 'Home del Sitio')
    
    @section('contenido')
    <h1>Editar el Producto {{$producto->name}}</h1>
    <form action="{{route('productos.update', $producto)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input
                type="text"
                class="form-control"
                id="nombre"
                placeholder="{{$producto->name}}"
                name="name"
                value="{{$producto->nombre}}"
            />
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label"> Descripción </label>
            <textarea
                class="form-control"
                id="descripcion"
                rows="3"
                name="descripcion"
                placeholder="{{$producto->descripcion}}"
                value="{{$producto->descripcion}}"
            ></textarea>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input
                type="number"
                min="0"
                step="0.1"
                class="form-control"
                id="precio"
                name="precio"
                placeholder="{{$producto->precio}}"
                value="{{$producto->precio}}"
            />
        </div>
        <button type="submit" class="btn btn-primary">Editar Producto</button>
    </form>
    @endsection