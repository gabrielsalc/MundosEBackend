@extends('layout')
@section('contenido')
<div class="col-12 mx-auto my-5"> 
    <h1>Producto {{$producto->name}}</h1>
    <p>{{$producto->descripcion}}</p>  
    <p>${{$producto->precio}}</p>
</div>
@endsection