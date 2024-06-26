@extends('layouts.master')

@section('title', 'Editar Persona')

@section('content')
<table cellpadding="3" cellspacing="5">
    <tr>
        
        <th colspan="2">Editar Persona</th>
    </tr>
    @if($errors->any())
        <tr>
            <td colspan="2">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </td>
        </tr>
    @endif
    <form action="{{ route('personas.update', $persona) }}" method="POST">
        @csrf
        @method('PATCH')
        <tr>
            <th>Código</th>
            <td><input type="number" name="nPerCodigo" value="{{ old('nPerCodigo', $persona->nPerCodigo) }}"></td>
        </tr>
        <tr>
            <th>Apellido</th>
            <td><input type="text" name="cPerApellido" value="{{ old('cPerApellido', $persona->cPerApellido) }}"></td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td><input type="text" name="cPerNombre" value="{{ old('cPerNombre', $persona->cPerNombre) }}"></td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td><input type="text" name="cPerDireccion" value="{{ old('cPerDireccion', $persona->cPerDireccion) }}"></td>
        </tr>
        <tr>
            <th>Fecha de Nacimiento</th>
            <td><input type="text" name="cPerAFecNac" value="{{ old('cPerAFecNac', $persona->cPerAFecNac) }}"></td>
        </tr>
        <tr>
            <th>Edad</th>
            <td><input type="number" name="cPerEdad" value="{{ old('cPerEdad', $persona->cPerEdad) }}"></td>
        </tr>
        <tr>
            <th>Sexo</th>
            <td><input type="text" name="cPerSexo" value="{{ old('cPerSexo', $persona->cPerSexo) }}"></td>
        </tr>
        <tr>
            <th>Sueldo</th>
            <td><input type="text" name="cPerSueldo" value="{{ old('cPerSueldo', $persona->cPerSueldo) }}"></td>
        </tr>
        <tr>
            <th>Rnd</th>
            <td><input type="text" name="cPerRnd" value="{{ old('cPerRnd', $persona->cPerRnd) }}"></td>
        </tr>
        <tr>
            <th>Estado</th>
            <td><input type="text" name="cPerEstado" value="{{ old('cPerEstado', $persona->cPerEstado) }}"></td>
        </tr>
        <tr>
            
        </tr>
        <tr>
            <td colspan="2" align="center"><button type="submit">Actualizar</button></td>
        </tr>
    </form>
</table>
@endsection
