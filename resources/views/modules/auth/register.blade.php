@extends('layouts/main')

@section('titulo_pagina', 'Registro Unibonos')
    
@section('contenido')
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row">
            <div class="col">
                <div class="custom-form">
                    <form action="{{route('registrar')}}" method="post">
                        <h2 class="card-title text-center text-white">Registro</h2>
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="name">Nombre y Apellido</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="name" id="name">
                                <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                            </div>
                        </div>                        
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
                        <div class="mb-3">
                            <label for="email">Correo-Email</label>
                            <div class="input-group">
                                <input type="email" class="form-control" name="email" id="email">
                                <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection