@extends('layouts/main')

<div class="container mt-4">
    <h2 style="color: #fff;">Mostrar Info de: {{ $item->name }}</h2>
    <div class="row">
        <div class="col"> 
            <div class="card">
                <div class="card-body">
                    <table class="table table-sm text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>CODIGO</th>
                                <th>EMAIL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $item->id}}</td>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->codigo}}</td>
                                <td>{{ $item->email}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{route('usuario')}}" class="btn btn-secondary mt-4">Salir</a>
                </div>
            </div>
        </div>
    </div>
</div>