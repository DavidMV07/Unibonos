@extends('layouts/main')

@section('titulo_pagina','Unibonos')

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
        <h2 style="color: #fff;">Almuerzos</h2>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <section class="contador" id="contador">
                            <div id="contador-restantes">
                                Almuerzos restantes: <span id="restantes">0</span>
                            </div>
                            <div id="contador-reclamados">
                                Almuerzos reclamados: <span id="reclamados">0</span>
                            </div>
                            <button type="submit" id="reclamar" class="btn-R.A">Reclamar Almuerzo</button>
                        </section>
                        <script>
                            const totalAlmuerzos = 186; // Cambia este valor al total de almuerzos disponibles
                            let almuerzosRestantes = totalAlmuerzos;
                            let almuerzosReclamados = 0;

                            const contadorRestantes = document.getElementById('restantes');
                            const contadorReclamados = document.getElementById('reclamados');
                            const botonReclamar = document.getElementById('reclamar');

                            function actualizarContadores() {
                                contadorRestantes.textContent = almuerzosRestantes;
                                contadorReclamados.textContent = almuerzosReclamados;
                            }

                            actualizarContadores();

                            botonReclamar.addEventListener('click', () => {
                                if (almuerzosRestantes > 0) {
                                    almuerzosRestantes--;
                                    almuerzosReclamados++;
                                    actualizarContadores();
                                } else {
                                    alert('No hay más almuerzos disponibles');
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection