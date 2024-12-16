<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Estilos de los iconos -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Estilos para el body-->
    <style>
        /* Estilos personalizados (opcional) */
        body {
            background: linear-gradient(315deg, rgba(139, 0, 0, 1) 0%, rgba(70, 0, 0, 1) 50%, rgba(10, 10, 10, 1) 100%);
            animation: gradient 15s ease infinite;
            background-size: 400% 400%;
            background-attachment: fixed;
        }
        .custom-form {
            width: 420px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(100px);
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            color: #fff;
            border-radius: 10px;
            padding: 30px 40px;
        }
        i{
            font-size: 22px;
            align-items: center;
            cursor: pointer;
        }
        aside{
            height: 100vh;
            width: 250px;
            padding: 10px;
            color: #fff;
            position: fixed;
            transition: all .4s ease;
            background: linear-gradient(
                315deg,
                rgba(139, 0, 0, 1) 0%, /* Rojo oscuro */
                rgba(70, 0, 0, 1) 50%, /* Rojo más apagado */
                rgba(10, 10, 10, 1) 100%  /* Gris oscuro */
                );
            animation: gradient 15s ease infinite;
            background-size: 400% 400%;
            background-attachment: fixed;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 0%;
            }
            50% {
                background-position: 100% 100%;
            }
            100% {
                background-position: 0% 0%;
            }
        }
    </style>

    <title>@yield('titulo_pagina')</title>
  </head>
  <body>
    

    @yield('contenido')


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

    <!-- Paquete Bootstrap con Popper -->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous">
    </script>
  </body>
</html>