<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoApiController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        $data = $productos->map(function($producto){
            return [
                'id' => $producto->id,
                'name' => $producto->name,
                'descripcion' => $producto->descripcion,
                'precio' => $producto->precio,
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
                'descripcion' => $producto->descripcion,
                'precio' => $producto->precio,
            ],
        ];
    }
    public function store()
    {
        $producto = Producto::create([
            'name' => request()->name,
            'descripcion' => request()->descripcion,
            'precio' => request()->precio
        ]);
    }
} 
