@extends('layouts.app-master')
@section('content')
    
@endsection
     <h1 class= "container">Home</h1>
     @auth
       <p>BIENVENIDO {{auth()->user()->username}}, ESTAS AUTENTICADO A LA PAGINA</p> 
       <p>
         <a href="/logout">logout</a> 
     @endauth

     @guest
        <p>PARA VER EL CONTENIDO <a href="/login">iniciar sesión</a></p> 
     @endguest
@endsection
