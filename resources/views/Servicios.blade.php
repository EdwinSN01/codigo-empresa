@extends('layouts.master')

@section('Servicios')

@section('content')
<h1>Servicios</h1>
    @if($op)
        <p>Parámetro op: {{$op}}</p>
        @else
        <p>sin párametros op.</p>
        @endif

@endsection