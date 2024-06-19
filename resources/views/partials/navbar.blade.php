<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="{{ route('inicio')}}">Empresa</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" 
    aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
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
                    <a class="nav-link" href="{{ route('contacto') }}">Contactos</a>
                        </li>
                    </ul>
</div>
</nav>