@extends('layouts/main')

<div class="container mt-4">
    <h2 style="color: #fff;">Agregar Nuevo Usuario</h2>
    <div class="row">
        <div class="col"> 
            <div class="card">
                <div class="card-body">
                    <form action="{{route('store')}}" method="post">
                        @csrf
                        @method('POST')
                        <label for="name">Nombre y Apellido</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                        <label for="codigo">Codigo</label>
                        <input type="text" id="codigo" name="codigo" class="form-control" required>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                        <label for="password">Contraseña</label>
                        <input type="text" id="password" name="password" class="form-control" required>
                        <button class="btn btn-primary mt-3">Agregar</button>
                        <a href="{{route('usuario')}}" class="mt-3 btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>