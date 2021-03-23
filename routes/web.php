<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\info\Informacion;
use App\Http\Controllers\Rutas;
use App\Http\Controllers\Vuelos;
use App\Http\Controllers\Pasaje;
use App\Http\Controllers\Clientes;
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
//ruta mision 
Route::get('viajes/mision', [Informacion::class, 'mision'])->name('mision');

Route::get('viajes/vision', [Informacion::class, 'vision'])->name('vision');

Route::get('viajes/ubicacion', [Informacion::class, 'ubicacion'])->name('ub');
//histo
Route::get('viajes/historia', [Informacion::class, 'histo'])->name('his');
//rutas de viaje
Route::get('viajes/rutas', [Rutas::class, 'index'])->name('rut');
//registro de rutas
Route::post('viajes/ruta/registro', [Rutas::class, 'registro'])->name('reg');
//actualizar ruta primero
Route::get('viajes/ruta/actualizar/{id}', [Rutas::class, 'formactu'])->name('acturuta');
//actualizar ruta segundo
Route::post('viajes/ruta/actualizar/{id}', [Rutas::class, 'actualizar'])->name('actualizarut');
//Buscar ruta 
Route::post('viajes/ruta/buscar', [Rutas::class, 'busqueda'])->name('buscar');
//ruta buscar
Route::get('viajes/ruta/buscar/form', [Rutas::class, 'formato'])->name('busruta');
//listar vuelos
Route::get('viajes/vuelo/listar', [Vuelos::class, 'index'])->name('vuelo');
//registrar vuelos
Route::post('viajes/vuelo/registrar', [Vuelos::class, 'registro'])->name('regvuelo');
//actualizar vuelo primero
Route::get('viajes/vuelo/actualizar/{id}', [Vuelos::class, 'formactu'])->name('actuvuelo');
//actu de viajes
Route::post('viajes/vuelo/actualizar/{r}', [Vuelos::class, 'acvuelo'])->name('formactu');
//ruta pasajes
Route::get('viajes/pasaje', [Pasaje::class, 'index'])->name('pasaje');
//comprar pasajes
Route::get('viajes/pasaje/comprar', [Pasaje::class, 'compra'])->name('comprar');
//comprar pasajes tiquete
Route::post('viajes/pasaje/comprar/{id}', [Pasaje::class, 'regcompra'])->name('compasaje');
//generar pdf
Route::get('viajes/pasaje/comprar/generar/{llave}', [Pasaje::class, 'genpdf'])->name('generar');
//eliminar ticket
Route::get('viajes/pasaje/eliminar/{llave}', [Pasaje::class, 'elimpasaje'])->name('eliminar');
//listar clientes  
Route::get('viajes/clientes/visualizar', [Clientes::class, 'listar'])->name('lisclientes');
//actualizar clientes  
Route::get('viajes/clientes/actualizar/{id}', [Clientes::class, 'actualizar'])->name('actucliente');
//actualizar clientes
Route::post('viajes/clientes/actualizar/{id}', [Clientes::class, 'actupost'])->name('actucli');
//buscar cliente  clientebusqueda
Route::get('viajes/clientes/listar', [Clientes::class, 'busca'])->name('clientebusqueda');
//busclientehoy
Route::post('viajes/clientes/listar', [Clientes::class, 'retornobusqueda'])->name('busclientehoy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
