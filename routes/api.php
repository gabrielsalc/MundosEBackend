<?php

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoApiController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/productos', [ProductoApiController::class, 'index'])->name('api.productos.index');

Route::get('/productos{producto}', [ProductoApiController::class, 'show'])->name('api.productos.show');

Route::post('/productos', [ProductoApiController::class, 'store'])->name('api.productos.store');

Route::get('contactanos', function(){
    $correo = new ContactanosMailable;
    Mail::to('gabrielsalcedo.gs@gmail.com')->send($correo);
});