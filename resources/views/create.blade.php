@extends('layouts.master')

@section('title', 'Crear Persona')

@section('content')
    <table cellpadding="3" cellspacing="5">
        
        <th colspan="4">Crear nuevo Persona</th>
        </tr>
        <form action="{{ route('personas.store') }}" method="post">
            @csrf
            <tr>
                <th>Codigo:</th>
                <td><input type="number" name="nPerCodigo" placeholder="Codigo"><br> {{$errors->first('Codigo')}}</td>
            </tr>

            <tr>
                <th>Apellido:</th>
                <td><input type="text" name="cPerApellido" placeholder="Apellido"><br> {{$errors->first('Apellido')}}</td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td><input type="text" name="cPerNombre" placeholder="Nombre"><br> {{$errors->first('Nombre')}}</td>
            </tr>
            <tr>
                <th>Direccion:</th>
                <td><input type="text" name="cPerDireccion" placeholder="Dirección"><br> {{$errors->first('Dirección')}}</td>
            </tr>
            <tr>
                <th>Fecha de Nacimiento </th>
                <td><input type="date" name="cPerAFecNac" placeholder="Fecha de Nacimiento"><br> {{$errors->first('Fecha de Nacimiento')}}</td>
            </tr>
            <tr>
                <th>Edad</th>
                <td><input type="text" name="cPerEdad" placeholder="Edad"><br> {{$errors->first('Edad')}}</td>
            </tr>
            <tr>
                <th>Sexo:</th>
                <td><input type="text" name="cPerSexo" placeholder="Sexo"><br> {{$errors->first('Sexo')}}</td>
            </tr>
            <tr>
                <th>Sueldo:</th>
                <td><input type="number" name="cPerSueldo" placeholder="Sueldo"><br> {{$errors->first('Sueldo')}}</td>
            </tr>
            <tr>
                <th>Rnd:</th>
                <td><input type="text" name="cPerRnd"><br> {{$errors->first('cPerRnd')}}</td>
            </tr>

            <tr>
            <th>Estado:</th>
            <td>
            <label for="activo"></label>
            <select id="activo" name="cPerEstado">
            <option value="1">1</option>
            <option value="0">0</option>
            </select>
            </td>
            </tr>

           <tr>
            <th>remenber_toke</th>
                <td><input type="hidden" name="remenber_toker"><br> {{$errors->first('remenber_toker')}}</td>
            </tr>
            
           
            <tr>
                <td colspan="2" align="center"><button>Guardar</button></td>
            </tr>
        </form>
    </table>
@endsection
