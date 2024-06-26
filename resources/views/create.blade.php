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
                <td><input type="number" name="nPerCodigo" placeholder="Codigo"><br> {{$errors->first('nPerCodigo')}}</td>
            </tr>

            <tr>
                <th>Apellido:</th>
                <td><input type="text" name="cPerApellido" placeholder="Apellido"><br> {{$errors->first('cPerApellido')}}</td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td><input type="text" name="cPerNombre" placeholder="Nombre"><br> {{$errors->first('cPerNombre')}}</td>
            </tr>
            <tr>
                <th>Direccion:</th>
                <td><input type="text" name="cPerDireccion" placeholder="Dirección"><br> {{$errors->first('cPerDireccion')}}</td>
            </tr>
            <tr>
                <th>Fecha de Nacimiento </th>
                <td><input type="date" name="cPerAFecNac" placeholder="Fecha de Nacimiento"><br> {{$errors->first('cPerAFecNac')}}</td>
            </tr>
            <tr>
                <th>Edad</th>
                <td><input type="text" name="cPerEdad" placeholder="Edad"><br> {{$errors->first('cPerEdad')}}</td>
            </tr>
            <tr>
                <th>Sexo:</th>
                <td><input type="text" name="cPerSexo" placeholder="Sexo"><br> {{$errors->first('cPerSexo')}}</td>
            </tr>
            <tr>
                <th>Sueldo:</th>
                <td><input type="number" name="cPerSueldo" placeholder="Sueldo"><br> {{$errors->first('cPerSueldo')}}</td>
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

            <th>token</th>
               
            <td><input type="hidden" name="remenber_toker" value={{$token}} <br> {{$errors->first('remenber_toker')}}</td>
                        {{$token}}
        </tr>
            
           
            <tr>
                <td colspan="2" align="center"><button>Guardar</button></td>
            </tr>
        </form>
    </table>
@endsection
