<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ProductoApiController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        $data = $productos->map(function($producto){
            return [
                'id' => $producto->id,
                'name' => $producto->name,
                'email' => $producto->email,
                'precio' => $producto->precio,
                'descripcion' => $producto->descripcion,
                'url' =>route('api.productos.show', $producto),
            ];
        });

        return response([
            'meta' => [
                'count' => $data->count(),
                'path' => route('api.productos.index')
            ],
            'data' => $data,
        ],201);
    }
    public function show(Producto $producto)
    {
        return [
            'meta' => [
                'path' => route('api.productos.show', $producto),
                'resource' => route('api.productos.index'),
            ],
            'data' => [
                'id' => $producto->id,
                'name' => $producto->nombre,
                'email' => $producto->email,
                'precio' => $producto->precio,
                'descripcion' => $producto->descripcion,
            ],
        ];
    }
    public function store(Request $request)
    {
        $producto = Producto::create([
            'name' => request()->name,
            'email' => request()->email,
            'descripcion' => request()->descripcion,
            'precio' => request()->precio,
        ]);
        $mensaje = new ContactanosMailable($request->all());
        Mail::to('gabrielsalcedo.gs@gmail.com')->send($mensaje);

    }
} 
