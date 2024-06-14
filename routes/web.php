<?php

use Illuminate\Support\Facades\Route;

//retour pantalla de inicio
Route::get('/', function () {
    return view('home');
})->name('home');

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
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');