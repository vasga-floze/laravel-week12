<?php

use Illuminate\Support\Facades\Route;
//agregar el controlador
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('product/acercade', [ProductController::class, 'acercade']);
//Va a mostrar todas las rutas
Route::resource('product', ProductController::class);