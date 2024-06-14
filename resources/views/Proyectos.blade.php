@extends('layouts.master')

@section('Proyectos')

@section('content')
    <h1>Proyectos</h1>
    @if($op)
        <p>Parámetro op: {{$op}}</p>
        @else
        <p>sin párametros op.</p>
        @endif

@endsection