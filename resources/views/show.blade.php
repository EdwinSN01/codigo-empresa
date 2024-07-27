@extends('layouts.master')

@section('title','Persona | ' . $persona->id)

@section('content')
<tr>
    <td><img src="/storage/{{ $persona->image }}" alt="{{ $persona->titulo }}" width="100"
        height="50"></td>
    <label>codigo:</label>
    <td colspan="4">{{ $persona->nPerCodigo }}<br>
        <a href="{{ route('personas.edit',$persona) }}">Editar Persona</a>


    </td>
    <td colspan="2">
        <form action="{{ route('personas.destroy,$personas') }}" method="POST">
        @csrf @method('DELETE')
        <button>Eliminar</button>
        </form>
    </td>
</tr>
<tr>
    <label>Apellido:</label>
    <td colspan="4">{{ $persona->cPerApellido }}</td><br>
</tr>
<tr>
    <label>Nombre:</label>
    <td colspan="4">{{ $persona->cPerNombre }}</td><br>
</tr>
<tr>
    <label>Dirección:</label>
    <td colspan="4">{{ $persona->cPerDireccion }}</td><br>
</tr>
<tr>
    <label>Fecha de nacimiento:</label>
    <td colspan="4">{{ $persona->cPerAFecNac }}</td><br>
</tr>
<tr>
    <label>Sexo:</label>
    <td colspan="4">{{ $persona->cPerSexo }}</td><br>
    @if($persona->cPerSexo=='M')
       Masculino
    @elseif($persona->cPerSexo=='F')
       Femenino
    @else
       Otro
    @endif
</tr>
<tr>
    <label>Edad:</label>
    <td colspan="4">{{ $persona->cPerEdad }}</td><br>
</tr>
<tr>
    <label>Sueldo:</label>
    <td colspan="4">{{ $persona->cPerSueldo }}</td><br>
</tr>
<tr>
    <label>Estado:</label>
    <td colspan="4">{{ $persona->cPerEstado }}</td><br>
    @if($persona->cPerEstado=='1')
       Activo
    @else
       Inactivo
    @endif
</tr>

@endsection 