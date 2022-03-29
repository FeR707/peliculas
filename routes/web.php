<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrearController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\HistoriaController;

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

Route::get('/', [CrearController::class, 'mostrarPeliculas'])->name('index');
Route::get('/pelicula{id}', [CrearController::class, 'datosPeliculas'])->name('datosPelicula');

Route::get('/tipo', [CrearController::class, 'mostrarTipo'])->name('tipo');
Route::get('/historia', [HistoriaController::class, 'mostrarHistoria'])->name('historia');
Route::get('/origen', [HistoriaController::class, 'mostrarOrigen'])->name('origen');
Route::get('/digital', [HistoriaController::class, 'mostrarDigital'])->name('digital');

Route::get('/video', function () {
    return view('video');
})->name('video');

route::get('/api', [ApiController::class, 'api'])->name('api');