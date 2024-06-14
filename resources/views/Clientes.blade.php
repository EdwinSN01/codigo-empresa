@extends('layouts.master')

@section('Clientes')

@section('content')
    <h1>Clientes</h1>
    @if($op)
        <p>Parámetro op: {{$op}}</p>
        @else
        <p>sin párametros op.</p>
        @endif

@endsection