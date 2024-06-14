<!DOCTYPE html> 
<html lang="en"> 
<head> 
   <meta charset="UTF-8"> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   <title>Empresa</title> 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
   rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
   crossorigin="anonymous">
   </head> 
   <body> 
    @include('partials.navbar') 
    <div class="container"> 
        @yield('content') 
    </div> 
    @include('partials.footer') 
</body> 
</html>
<nav>
    <style>
        .activo a{
            color:red;
            text-decoration: underline;
        }
    </style>
    </head>
    <body>
<nav>
    <table class="table">
        <thead class="table table-bordered">
            <tr>
                <th scope="col" class="{{ request('home') ? 'activo' : ''}}"><a href="/"><Home</a></th>
                <th scope="col" class="{{ request('servicios') ? 'activo' : ''}}"><a href="/"><Servicios</a></th>
                <th scope="col" class="{{ request('proyectos') ? 'activo' : ''}}"><a href="/"><Proyectos</a></th>
                <th scope="col" class="{{ request('clientes') ? 'activo' : ''}}"><a href="/"><Clientes</a></th>
                <th scope="col" class="{{ request('blog') ? 'activo' : ''}}"><a href="/"><Blog</a></th>
                <th scope="col" class="{{ request('contactos') ? 'activo' : ''}}"><a href="/"><Contactos</a></th>