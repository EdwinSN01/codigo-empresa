<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="{{ route('home')}}">Empresa</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" 
    aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">home</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('proyectos') }}">Proyectos</a>
            </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('personas') }}">Personas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contactos') }}">Contactos</a>
                        </li>
                    </ul>
                
                    @guest
    <th><a href="{{ route('login') }}">Login</a></th>
    @else
    <th>
        <a href="#" onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">Cerrar Sesión</a>
    </th>
    @endguest
    </tr>
</thead>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
</div>
</nav>