@extends('layouts.master')

@section('title','Personas')

@section('content')
    <h2>Personas</h2>
    <table>
        <tr>
            @if($personas)
                @foreach($personas as $persona)
                    <tr>
                        <td><a href="{{ route('personas.show', ['id' => $persona->id]); }}">{{ $persona->cPerApellido }}</a></td>
                        <!-- Aquí puedes mostrar más columnas de la persona si es necesario -->
                    </tr>
                @endforeach
            @endif
        </tr>
    </table>
    
    @if($personas)
        <div class="pagination-wrapper">
            {{ $personas->links('vendor.pagination.bootstrap-4') }}
        </div>
    @endif
@endsection