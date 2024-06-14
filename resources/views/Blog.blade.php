@extends('layouts.master')

@section('Blog')

@section('content')
    <h1>Blog</h1>
    @if($op)
        <p>Parámetro op: {{$op}}</p>
        @else
        <p>sin párametros op.</p>
        @endif

@endsection