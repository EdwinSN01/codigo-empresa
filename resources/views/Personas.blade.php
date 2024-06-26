@extends('layouts.master')

@section('title', 'Personas')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center py-5">
        <h1>Listado de personas</h1>
        <a href="{{ route('personas.create') }}" class="btn btn-primary">Crear Persona</a>
    </div>

    @if ($personas->isEmpty())
        <p>No hay personas registradas.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personas as $persona)
                        <td>{{ $persona->cPerNombre }}</td>
                        <td>{{ $persona->cPerApellido }}</td>
                        <td>{{ $persona->cPerDireccion }}</td>
                        <td>

                            @if ($persona->cPerSexo == 'M')
                                Masculino
                            @elseif ($persona->cPerSexo == 'F')
                                Femenino
                            @else
                                Otro
                            @endif
                        </td>
                        <td>{{ $persona->cPerAFecNac }}</td>
                        <td>{{ $persona->cPerEdad }}</td>
                        <td>
                            @if ($persona->cPerEstado == '1')
                                Activo
                            @else
                                Inactivo
                            @endif
                        </td>
                        <tr>
                            <a href="{{ route('personas.show', $persona) }}">{{ $persona->titulo }}</a>
                        </td>
                        <td>
                            <a href="{{ route('personas.edit', $persona) }}" class="btn btn-secondary btn-sm">Editar</a>
                            <form action="{{ route('personas.destroy', $persona) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    @if ($personas->isNotEmpty())
        <div class="pagination-wrapper">
            {{ $personas->links('vendor.pagination.bootstrap-4') }}
        </div>
    @endif
</div>
@endsection