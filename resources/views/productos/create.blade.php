@extends('layout')
@section('title', 'Home del Sitio')
    
    @section('contenido')

    <h1>Creacion de Producto</h1>
    <form action="{{route('productos.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input
                type="text"
                class="form-control"
                id="nombre"
                placeholder="ingrese un nombre"
                name="name"
            />
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label"> Descripción </label>
            <textarea
                class="form-control"
                id="descripcion"
                rows="3"
                name="descripcion"
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
                value="0"
            />
        </div>
        <button type="submit" class="btn btn-primary">Crear Producto</button>
    </form>
    @endsection
   