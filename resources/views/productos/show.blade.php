@extends('layout')
@section('contenido')
<div class="col-12 mx-auto my-5"> 
    <h1>Producto {{$producto->name}}</h1>
    <p>{{$producto->email}}</p>
    <p>{{$producto->precio}}</p>
    <p>{{$producto->descripcion}}</p>  
</div>
@endsection