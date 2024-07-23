@extends('layouts.master')

@section('content')
        <h1> Bienvenidos a mi Empresa<h1>
        <p>El mejor servicio para ti.</p>


<tr>
    <td colspan="4"></td>
</tr>
<tr>
    <td colspan="4">
        @auth
            {{ auth()->user()->name }}
        @endauth
    </td>
</tr>
@endsection