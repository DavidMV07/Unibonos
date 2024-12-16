@extends('layouts/main')

@section('titulo_pagina', 'Login Unibonos')

@section('contenido')
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row">
            <div class="col">
                <div class="custom-form">
                    <form action="{{route('loguear')}}" method="post">
                        <h2 class="card-title text-center text-white">Login</h2>
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="codigo">Codigo</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="codigo" id="codigo">
                                <span class="input-group-text"><i class="fa-regular fa-shield"></i></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password">Contraseña</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" id="password">
                                <span class="input-group-text"><i class="fa-regular fa-shield"></i></span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Iniciar Sesion</button> 
                        <a href="{{ route('register') }}" class="btn btn-info mt-4">Registrate</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection