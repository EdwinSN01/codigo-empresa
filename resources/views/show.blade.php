@extends('layouts.master')

@section('title','Persona | ' . $persona->id)

@section('content')
<tr>
    <td colspan="4">{{ $persona->nPerCodigo }}</td>
</tr>
<tr>
    <td colspan="4">{{ $persona->cPerApellido }}</td>
</tr>

@endsection