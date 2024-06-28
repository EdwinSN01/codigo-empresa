@extends('layouts.master')

@section('title', 'Contacto')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h3>Contacto</h3>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contactos') }}" method="POST">
                        @csrf {{-- CSRF token to ensure form security --}}
                        
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" value="{{ old('nombre') }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="asunto">Asunto</label>
                            <input type="text" name="asunto" id="asunto" placeholder="Asunto" class="form-control" value="{{ old('asunto') }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea name="mensaje" id="mensaje" cols="30" rows="5" placeholder="Mensaje" class="form-control">{{ old('mensaje') }}</textarea>
                        </div>
                        
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <button type="reset" class="btn btn-secondary">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
