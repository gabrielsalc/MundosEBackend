<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductoController;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'home']);
Route::get('/quienessomos', [PageController::class, 'quienessomos']);
Route::get('/contact', [PageController::class, 'contact']);

Route::get('/mensajes', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/mensajes/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/mensajes', [ProductoController::class, 'store'])->name('productos.store');
Route::get('/mensajes/{producto}', [ProductoController::class, 'show']) ->name('productos.show');
Route::get('/mensajes/edit/{producto}', [ProductoController::class, 'edit']) ->name('productos.edit');
Route::patch('/mensajes/{producto}', [ProductoController::class, 'update']) ->name('productos.update');
Route::delete('/mensajes/{producto}', [ProductoController::class, 'destroy']) ->name('productos.destroy');

//Route::resource('mensajes', ProductoController::class);
