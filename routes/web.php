<?php

use App\Http\Controllers\ContactosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController; 


//retour pantalla de inicio
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

//op = opcional aqui se valida tanto
//para escribir con mayuscula o miniscula
//nos retornara los servicios
Route::get('/servicios{op?}', function ($op=null) {
    return view('servicios',['op'=>$op]);
}) ->where('op','[A-Za-z]')->name('servicios');


//op = opcional aqui se valida tanto
//para escribir con mayuscula o miniscula
//nos retornara a los proyectos
Route::get('/proyectos/{op?}', function ($op=null) {
    return view('proyectos',['op'=>$op]);
}) ->where('op','[A-Za-z]')->name('proyectos');


Route::get('/personas/crear', [PersonasController::class, 'create'])->name('personas.create');
Route::post('/personas', [PersonasController::class, 'store'])->name('personas.store');
Route::get('/personas/{id}', [PersonasController::class, 'show'])->name('personas.show');
Route::get('/personas', [PersonasController::class, 'index'])->name('personas');
Route::get('/personas/{id}/editar', [PersonasController::class, 'edit'])->name('personas.edit');
Route::patch('/personas/{id}/update', [PersonasController::class, 'update'])->name('personas.update');
Route::delete('/personas/{persona}', [PersonasController::class, 'destroy'])->name('personas.destroy');
//op = opcional aqui se valida tanto
//para escribir con mayuscula o miniscula
//nos retornara los clientes
Route::get('/clientes/{op?}', function ($op=null) {
    return view('clientes',['op'=>$op]);
}) ->where('op','[A-Za-z]')->name('clientes');

//op = opcional aqui se valida tanto
//para escribir con mayuscula o miniscula
//nos retornara blog
Route::get('/blog/{op?}', function ($op=null) {
    return view('blog',['op'=>$op]);
}) ->where('op','[0-9]')->name('blog');

//nos retornara los clientes
//Route::get('/servicios/{id}', [ServiciosController::class, 'show'])->name('servicios.show');
Route::view('contactos','contactos')->name('contactos');
//Route::get('/contactos', [ContactosController::class, 'index'])->name('contactos.index');
//Route::get('/contactos/crear', [ContactosController::class, 'create'])->name('contactos.create');
//Route::get('/contactos/{id}', [ContactosController::class, 'show'])->name('contactos.show');
Route::post('/contactos', [ContactosController::class, 'store'])->name('contactos.store');