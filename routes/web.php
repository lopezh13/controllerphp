<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\operacionesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/triangulo', function () {
    return view('triangulo');
})->name("triangulo");

Route::get('/monto', function () {
    return view('monto');
})->name("monto");

Route::get('/prestamo', function () {
    return view('prestamo');
})->name("prestamo");

Route::post('/tri',[operacionesController::class,'triangulo']);
Route::post('/prestaC',[operacionesController::class,'prestamo']);
Route::post('/mon',[operacionesController::class,'monto']);