@extends('layout')
@section('title', 'Home del Sitio')
@section('contenido')
<div class="col-12 col-md-8 mx-auto my-5">
    <h1>MENSAJES</h1>
    <p>TODOS LOS MENSAJES</p>
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
                    <h5 class="card-title"><a href="/mensajes/{{$producto->id}}">{{$producto->name}}</a></h5>
                    <h3 class="card-text">{{$producto->email}}</h3>
                    <h3 class="card-text">{{$producto->precio}}</h3>
                    <h3 class="card-text">{{$producto->descripcion}}</h3>
                </div>
                <div class="card-footer d-flex justify-content-around">
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
