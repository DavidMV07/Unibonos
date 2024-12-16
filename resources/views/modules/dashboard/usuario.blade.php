@extends('layouts/main')

@section('titulo_pagina','Usuarios Unibonos')

@section('contenido')
    <aside>
        <div>
            <h4>Bienvenido a Unibonos</h4>
        </div>
        <div>
            <div class="d-flex align-items-center p-2 cursor-pointer mb-2 rounded-pill">
                <i class="fa-solid fa-house"></i>
                <a href="{{route('home')}}" style="text-decoration: none;">Dashboard</a>
            </div>
            @can('ver usuarios')
                <div class="d-flex align-items-center p-2 cursor-pointer mb-2 rounded-pill">
                    <i class="fa-solid fa-users"></i>
                    <a href="{{route('usuario')}}" style="text-decoration: none;">Usuarios</a>
                </div>
            @endcan
            <div class="input-group d-flex align-items-center p-3 cursor-pointer mb-3 rounded-pill fs-5">
                <a href="{{route('logout')}}" class="btn btn-danger">
                    <i class="fa-solid fa-right-from-bracket"></i>Cerrar Sesion
                </a>
            </div>
        </div>
    </aside>
    <div class="container mt-4" style="width: 850px;">
        <h2 style="color: #fff;">Usuarios Unibonos</h2>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('create')}}" class="btn btn-primary ">
                            <i class="fa-solid fa-plus"></i>Agregar Usuario
                        </a>
                        <hr>
                        <table class="table table-sm table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NOMBRE</th>
                                    <th>CODIGO</th>
                                    <th>EMAIL</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                    

                                <tr>
                                    <td>{{ $item->id}}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>{{ $item->codigo}}</td>
                                    <td>{{ $item ->email}}</td>
                                    <td>
                                        <form action="{{ route('destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('show', $item->id) }}" class="btn btn-info"><i class="fa-solid fa-list-ul"></i> Mostrar</a>
                                            <a href="{{ route('edit',$item->id)}}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i> Editar</a>
                                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i> Borrar</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td>No hay datas en la tabla...</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex -justify-content-end">
                            {{ $items->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection