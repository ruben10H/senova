@extends('adminlte::page')
@section('title', 'Semillero-SEBI')

@section('content_header')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="description" content="Explora el mundo de las aves y su comportamiento en la naturaleza con nuestro proyecto de observación de aves.">
    <meta name="keywords" content="aves, observación, naturaleza, conservación">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="shortcut icon" href="imgprueba/planta.png">
    <link rel="icon" href="public/imgprueba/leonardo.png" type="image/png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<body>
      <!-- Navbar -->
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-green"> 
    <div class="container">
        <a class="navbar-brand" href="#">Conoce más sobre el proyecto</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}" title="Inicio">Inicio
                       
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('unidades') }}" title="Unidades">Rutas de avistamiento
                        
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacto') }}" title="Desarrolladores">Desarrollador
                        
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aves') }}" title="Aves">Aves
                       
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>
<!-- Agregar la barra de búsqueda en el código HTML -->
             <!-- Agregar la barra de búsqueda en el código HTM
    <Contenido Principal -->
        <video width="1050" height="450" autoplay>
            <source src="{{ asset('imgprueba/video.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
<br> <br>
<style>

h1 {
    text-align: center;
}
</style>
      <h1>Lideres del proyecto Aves-CEFA</h1>
      <br>
<style>
    .developer-container {
        display: flex;
        justify-content: space-around;
    }

    .developer {
        text-align: center;
        margin: 20px;
    }

    .developer img {    
        width: 100px;
        height: 100px;
        margin-bottom: 10px;
        border-radius: 50%;
    }

    .developer p {
        margin: 5px;
    }

    .developer .btn-group {
        margin-top: 10px;
    }

    .developer .btn {
        margin: 0 5px;
    }
</style>

<div class="developer-container">
    <div class="developer">
        <img src="{{ asset('imgprueba/julian.jpg') }}" alt="Aprendiz">
        <p>Aprendiz</p>
        <p>Encargado del proyecto</p>
        <p>Anderson Julian Culma Diaz</p>
        <div class="btn-group" role="group" aria-label="Redes Sociales">
            <a class="btn btn-primary" href="https://www.facebook.com/tucuenta" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
            <a class="btn btn-danger" href="https://www.instagram.com/tucuenta" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="btn btn-info" href="https://twitter.com/tucuenta" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
        </div>
    </div>

    <div class="developer">
        <img src="{{ asset('imgprueba/valentina.jpg') }}" alt="Aprendiz">
        <p>Aprendiz</p>
        <p>Lider semillero SEBI</p>
        <p>Valentina Peña Cuenca</p>
        <div class="btn-group" role="group" aria-label="Redes Sociales">
            <a class="btn btn-primary" href="https://www.facebook.com/tucuenta" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
            <a class="btn btn-danger" href="https://www.instagram.com/tucuenta" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="btn btn-info" href="https://twitter.com/tucuenta" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
        </div>
    </div>

    <div class="developer">
        <img src="{{ asset('imgprueba/camila.jpg') }}" alt="Aprendiz">
        <p>Aprendiz</p>
        <p>Encargado del proyecto</p>
        <p>Danna Camila Borbón Sanchez</p>
        <div class="btn-group" role="group" aria-label="Redes Sociales">
            <a class="btn btn-primary" href="https://www.facebook.com/tucuenta" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
            <a class="btn btn-danger" href="https://www.instagram.com/tucuenta" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="btn btn-info" href="https://twitter.com/tucuenta" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
        </div>
    </div>
</div>
<br>
<div class="container mt-4"> 
    <div class="row">
        <div class="col-md-6">
            <h2>Actividades</h2>
            <p>•	Recolección y Almacenamiento de residuos orgánicos que se generan en unidades agrícolas, pecuarias y ambientales del Centro.
                •	Elaboración de pilas de compost la descomposición de estos residuos orgánicos, para estas pilas se deben cumplir unos parámetros como relación carbono nitrógeno, Tiempo de disposición (2 a 3 meses) PH, Temperatura, Aireación y humedad.
        
                .</p>
            <a href="unidades" class="btn btn-primary">Ver más</a>
        </div>
        <div class="col-md-6">
            <h2>Diseñador Web</h2>
            <p></p>
            <a href="contacto" class="btn btn-primary">Ver más</a>
        </div>
    </div>
</div>
<br><br>
<div class="icon-box">
    <div class="icon">
        <img src="{{ asset('imgprueba/j10.png') }}" alt="Icono del SENA" width="180" height="180">
        <p>SENA</p>
    </div>

    <div class="icon">
        <img src="{{ asset('imgprueba/j9.jpg') }}" alt="Icono del Semillero" width="180" height="180">
        <p>semillero de investigación</p>
    </div>

  

    <div class="icon">
        <img src="{{ asset('imgprueba/j11.jpg') }}" alt="Icono de programador" width="180" height="180">
        <p>Semillero</p>
    </div> 
</div>
</div>
<style>
    .icon-box {
        display: flex;
        overflow: hidden; /* Hide the overflow to create a scrolling effect */
        animation: scroll 30s linear infinite; /* Animation with a 10s duration, linear timing, and infinite loop */
    }

    @keyframes scroll {
        0% {
            transform: translateX(100%); /* Start from the right edge */
        }
        100% {
            transform: translateX(-100%); /* End on the left edge */
        }
    }

    .icon {
        text-align: center;
        margin: 0 10px; /* Adjust as needed for spacing between icons */
        animation: fadeIn 5s ease-in-out infinite; /* Optional fade-in effect */
    }

    @keyframes fadeIn {
        0%, 100% {
            opacity: 2;
        }
        50% {
            opacity: 5;
        }
    }
</style>


<!-- Sección de Aves Comunes -->
<section id="aves-comunes" class="container mt-4">
    <h2>Como es nuestro centro de formación!</h2>
    <p>El Centro de Formación Agroindustrial del Huila tiene como función principal impartir formación 
        profesional integral con calidad a todos los Colombianos; con el fin de desarrollar competencias
         laborales que permitan la inserción laboral del personal no vinculado en el sector productivo y 
         la cualificación del talento humano en las empresas. De igual forma articula entidades y procesos 
         para contribuir con el desarrollo económico de la Región.</p>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="../imgprueba/j6.jpg" class="card-img-top" alt="Imagen de Ave 1">
                <div class="card-body">
                    <h5 class="card-title">Avistamiento</h5>
                    <p class="card-text">En el SENA, existen diversas actividades 
                        compuestas al desarrollo de actividades que mejoran la avifauna de la biodiversidad de nuestro centro
                        de formación.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="imgprueba/j7.jpg" class="card-img-top" alt="Imagen de Ave 2">
                <div class="card-body">
                    <h5 class="card-title">Gasela</h5>
                    <p class="card-text">Este avistamiento, es lo que nos hace el unico centro de formación dodne podemos apreciar las diferentes aves.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="../imgprueba/j8.jpg" class="card-img-top" alt="Imagen de Ave 3">
                <div class="card-body">
                    <h5 class="card-title">Avistamiento</h5>
                    <p class="card-text">Nuestros aprendices del teg de gestión de recursos naturales, son los grandes defensores de las problematicas interpuestas por los cambios climaticos.</p>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Sección de Historia del Proyecto -->
    <section id="historia-proyecto" class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Nuestra aventura</h2>
                <h5>
                    Surge de la curiosidad del Porqué es importante el cuidado de las aves en un ecosistema!
                </h5>
    
                <p>El proyecto inicia con la instructora Yoly Dayana Moreno Ortega: Líder del semillero de investigación de Biodiversidad y Ecología (SEBI) del centro de formación Agroindustria la Angostura. 
                    En la actualidad se encuentra desarrollando proyectos en Pro de la conservación del medio ambiente y monitoreo de las asociaciones de fauna silvestre en los sistemas productivos agropecuarios.</p>
    
                <p>Para el desarrollo de este proyecto se contó con la colaboración con el programa de formación Teg. de recursos naturales (Ficha 627240), 
                    con los cuales se empleó el método de senso visuales en cada zona previamente seleccionada, en horarios de 7:00 a.m/10:00 a.m-12:00 p.m/4:00 p.m. 
                    En esta fase se identificaron 36 aves relacionando 11 órdenes y 22 familias de aves...
                </p>
                
            </div>
            <div class="col-md-6 text-center">
                <!-- Imagen del libro con estilos CSS para hacerla más pequeña -->
                <img src="{{ asset('imgprueba/libro.jpg') }}" alt="Avifauna del centro de formación" style="max-width: 200px; height: auto;">
                <!-- Enlace al libro -->
                <p>Te invitamos a conocer más sobre nuestro proyecto <a href="https://biblioteca.sena.edu.co/F/MQDJJ1E7MTA1K16DCBACATHNYGGBQNTNIXS8X3G3YBIMQGYS6M-20375?func=full-set-set&set_number=002390&set_entry=000002&format=999" target="_blank">aquí</a>.</p>
            </div>
        </div>
    </section>

    <br>
    </section>
    <footer class="bg-green text-center text-white">
        <div class="container p-4">
            <!-- Redes sociales -->
 
                 <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/tu_pagina_de_facebook" role="button">
                    <i class="bi bi-facebook"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                      </svg><!-- Icono de Facebook -->
                </a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/tu_usuario_de_twitter" role="button">
                    <i class="bi bi-twitter"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                      </svg><!-- Icono de Twitter -->
                </a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/tu_usuario_de_instagram" role="button">
                    <i class="bi bi-instagram"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                      </svg> <!-- Icono de Instagram -->
                </a>
            </section>
                   <section class="mb-4">
                <a href="https://centroagroindustrial.blogspot.com/" class="text-white">Centro de Formación Agroindustrial 2023</a>
            </section>
            <!-- Resto del contenido del footer -->
            
        </div>
    </footer>
</body>
</html>

@endsection