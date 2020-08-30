<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/svg-with-js.min.css" integrity="sha512-gX1L9ovb6aHWz/bJYE364vKdGBDOeZLMt168kVRpRdo2I2TpveBJpbDzHMZQWy8liTTG7Qm9Onl1Ji92Eo3x7Q==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css" integrity="sha512-8jdwayz5n8F2cnW26l9vpV6+yGOcRAqz6HTu+DQ3FtVIAts2gTdlFZOGpYhvBMXkWEgxPN3Y22UWyZXuDowNLA==" crossorigin="anonymous" />

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="style/Lineatiempo.css" rel="stylesheet">
    
    <style>
        .seccion-principal{
            background: #373B44;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #4286f4, #373B44);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #4286f4, #373B44);
            background-size: cover;
            width: 100%;
            background-repeat: no-repeat;
            padding: 20% 0px;
        }

        .Page-footer{
            background: #4b6cb7;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #182848, #4b6cb7);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #182848, #4b6cb7);
        }

        .page-quien
        {
            background: #BBD2C5;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #292E49, #536976, #BBD2C5);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #292E49, #536976, #BBD2C5); 
        }

        .sizefontI{
            font-size: 10pt;
        }
    </style>
</head>
<body>
    <nav class="page-header navbar navbar-light bg-light navbar-expand-md">
        <a class="navbar-brand" href="#">
            <span class="h4">
                Mi portafolio
            </span>
        </a>

        <button type="button" class="navbar-toggler" data-toggle="collapse"
        data-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false"
        aria-label="Ver mas">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu-principal">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="text-body nav-link" href="https://github.com/jesusvargasgutierrez/">Gihub&nbsp;<i class="fab fa-github"></i></a></li>
                <li class="nav-item"><a class="text-body nav-link" href="https://www.linkedin.com/in/jesus-vargas-gutierrez-848b41187">Linkedin&nbsp;<i class="fab fa-linkedin"></i></a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div id="accordion" class="col-lg-4 col-md-12">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action anclalist" id="list-home-list" data-parent="#accordion" data-toggle="collapse" href="#list-perfil" role="tab" aria-controls="perfil">Mi perfil</a>
                    <div class="" id="list-home">
                        <ul class="list-group-item-text">
                          <li>
                            <button type="button" value="perfil" class="btn accion1">
                              Acerca de Mi
                            </button>
                           </li>
                        </ul>
                    </div>
                    <a class="list-group-item list-group-item-action anclalist" id="list-home-list" data-parent="#accordion" data-toggle="collapse" href="#list-home" role="tab" aria-controls="home">Programacion</a>
                    <div class="" id="list-home">
                        <ul class="list-group-item-text">
                          <li>
                            <button type="button" value="jsdiv" class="btn accion1">
                              Javascript
                            </button>
                           </li>
                          <li>
                            <button type="button" value="phpdv" class="btn accion1">
                              PHP
                            </button>
                           </li>
                          <li>
                            <button type="button" value="netdv" class="btn accion1">
                              ASP.NET y Webservice
                            </button>
                           </li>
                        </ul>
                    </div>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-parent="#accordion" data-toggle="collapse" href="#list-profile" role="tab" aria-controls="profile">Bases de datos</a>
                    <div class="" id="list-profile">
                        <ul class="list-group-item-text">
                          <li>
                            <button type="button" value="sqldv" class="btn accion1">
                             SQL Server
                            </button>
                          </li>
                          <li>
                            <button type="button" value="msdv" class="btn accion1">
                              MySQL Server
                            </button>
                           </li>
                        </ul>
                    </div>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-parent="#accordion" data-toggle="collapse" href="#list-messages" role="tab" aria-controls="messages">Paginas Ejemplo</a>
                    <div class="" id="list-messages">
                        <ul class="list-group-item-text">
                          <li><a href="https://coders-web.000webhostapp.com/">Ejemplo 1</a></li>
                          <li><a href="https://coders-web.000webhostapp.com/Templates/Page1.html">Ejemplo 2</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12" id="dvInformation">
                <div id="perfil" class="">
                    <div>
                        <a href="#carouselExampleControls" role="button" data-slide="prev">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z"/>
                            </svg>
                        </a>
                        <a href="#carouselExampleControls" role="button" data-slide="next">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-11.5.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z"/>
                            </svg>
                        </a>
                    </div>
                    <div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel" data-interval="0">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="h3 font-weight-bold">
                                    <i class="fas fa-address-card"></i>
                                    Contacto
                                </div>
                                <div class="container d-flex flex-column">
                                    <div class="d-flex flex-row align-items-stretch justify-content-center">
                                        <ul class="" style="list-style: none;">
                                            <li class="text-center">
                                                <i class="fas fa-map-marker-alt fa-5x"></i>
                                                <div class="card">
                                                    <div class="card-body">
                                                    <p class="card-text font-weight-bold">
                                                        Delicias Chihuahua
                                                    </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="pt-5 text-center">
                                                <i class="fas fa-envelope fa-5x"></i>
                                                <div class="card">
                                                    <div class="card-body">
                                                    <p class="card-text font-weight-bold">
                                                        jesvargtz@gmail.com
                                                    </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="pt-5 text-center">
                                                <i class="fab fa-whatsapp-square fa-5x"></i>
                                                <div class="card">
                                                    <div class="card-body">
                                                    <p class="card-text font-weight-bold">
                                                        639-501-31-32
                                                    </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item list-group">
                                <div class="h3 font-weight-bold">
                                    <i class="fas fa-user-graduate fa-2x"></i>
                                    Formaci&oacute;n acad&eacute;mica
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                        <div class="h5 font-weight-bold text-white sizefontI">
                                            Mayo 2020-Actualidad
                                        </div>
                                    </div>
                                    <div class="p-2 flex-fill text-center" style="border-radius: 25px">
                                    <div class="h5 font-weight-bold font-italic sizefontI">
                                        Maestría en ingeniería de software y sistemas informáticos
                                    </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-5">
                                    <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                        <div class="h5 font-weight-bold text-white sizefontI">
                                            Abril 2019 - Actualidad
                                        </div>
                                    </div>
                                    <div class="p-2 flex-fill text-center" style="border-radius: 25px">
                                    <div class="h5 font-weight-bold font-italic sizefontI">
                                            Ingles
                                    </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row mt-5">
                                    <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                        <div class="h5 font-weight-bold text-white sizefontI">
                                           Agosto 2012 - Febrero 2017
                                        </div>
                                    </div>
                                    <div class="p-2 flex-fill text-center" style="border-radius: 25px">
                                    <div class="h5 font-weight-bold font-italic sizefontI">
                                            Ingenieria en sistemas computacionales
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item list-group">
                                    <div class="h3 font-weight-bold">
                                        <i class="fas fa-briefcase fa-2x"></i>
                                        Experiencia profesional
                                    </div>
                                    <div class="d-flex flex-row">
                                        <div class="p-2 flex-fill bg-dark text-center align-self-baseline" style="border-radius: 25px">
                                            <div class="font-weight-bold text-white sizefontI">
                                                Desarrollador/QA Tester | 3 a&ntilde;os
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-1">
                                        <div class="p-2 bg-dark text-center align-self-baseline" style="border-radius: 25px">
                                            <p class="font-weight-bold text-white sizefontI">
                                                Julio 2017 – Actualidad
                                            </p>
                                        </div>
                                        <div class="p-2 flex-fill text-center align-self-baseline" style="border-radius: 25px">
                                        <div class="h5 font-weight-bold font-italic sizefontI">
                                            Soluciones y servicios estratégicos en TI (SYSETI)
                                        </div>
                                        </div>
                                        <div class="p-2 flex-fill text-center" style="border-radius: 25px">
                                            <p class="font-weight-bold font-italic sizefontI">
                                                Desarrollador de sistema financiero, desarrollador de web API en .NET,
                                                SQL server, rotación al área de calidad para realizar testeo de
                                                desarrollos según el requerimiento.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-1">
                                        <div class="p-2 flex-fill bg-dark text-center align-self-baseline" style="border-radius: 25px">
                                            <div class="h5 font-weight-bold text-white sizefontI">
                                                Desarrollador Independiente | 6 meses
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-1">
                                        <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                            <div class="h5 font-weight-bold text-white sizefontI">
                                                Enero 2017 – junio 2017
                                            </div>
                                        </div>
                                        <div class="p-2 flex-fill text-center" style="border-radius: 25px">
                                        <div class="h5 font-weight-bold font-italic sizefontI">
                                                Servicios de maquinados industriales (Semain)
                                        </div>
                                        </div>
                                        <div class="p-2 flex-fill text-center" style="border-radius: 25px">
                                            <p class="h5 font-weight-bold font-italic sizefontI">
                                                Desarrollo de aplicación Windows para control de procesos industriales
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-2">
                                        <div class="p-2 flex-fill bg-dark text-center align-self-baseline" style="border-radius: 25px">
                                            <div class="h5 font-weight-bold text-white sizefontI">
                                                Residencia Profesional | 6 meses
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-1">
                                        <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                            <div class="h5 font-weight-bold text-white sizefontI">
                                                Junio 2016 – Diciembre 2016
                                            </div>
                                        </div>
                                        <div class="p-2 flex-fill text-center" style="border-radius: 25px">
                                        <div class="h5 font-weight-bold font-italic sizefontI">
                                            Alambrados y circuitos eléctricos DELPHI
                                        </div>
                                        </div>
                                        <div class="p-2 flex-fill text-center" style="border-radius: 25px">
                                            <p class="h5 font-weight-bold font-italic sizefontI">
                                                Prácticas profesionales para obtener título de ingeniería desarrollo de una aplicación en C# 
                                                para control automatizado de procesos con hardware libre
                                            </p>
                                        </div>
                                    </div>
                            </div>
                            <div class="carousel-item list-group">
                                    <div class="h3 font-weight-bold">
                                        <i class="fas fa-clipboard-check fa-2x"></i>
                                        Habilidades
                                    </div>
                                    <div class="d-flex flex-row mt-1">
                                        <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                            <div class="font-weight-bold text-white sizefontI">
                                                C#
                                            </div>
                                        </div>
                                        <div class="p-2 flex-fill text-center">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                                            </div>
                                        </div>
                                        <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                            <div class="font-weight-bold text-white sizefontI">
                                                85%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-3">
                                        <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                            <div class="font-weight-bold text-white sizefontI">
                                                Visual Basic
                                            </div>
                                        </div>
                                        <div class="p-2 flex-fill text-center">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                                            </div>
                                        </div>
                                        <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                            <div class="font-weight-bold text-white sizefontI">
                                                85%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-3">
                                        <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                            <div class="font-weight-bold text-white sizefontI">
                                                Web API
                                            </div>
                                        </div>
                                        <div class="p-2 flex-fill text-center">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                            </div>
                                        </div>
                                        <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                            <div class="font-weight-bold text-white sizefontI">
                                                80%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-3">
                                        <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                            <div class="font-weight-bold text-white sizefontI">
                                                PHP
                                            </div>
                                        </div>
                                        <div class="p-2 flex-fill text-center">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                            </div>
                                        </div>
                                        <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                            <div class="font-weight-bold text-white sizefontI">
                                                75%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-3">
                                        <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                            <div class="font-weight-bold text-white sizefontI">
                                                JAVA
                                            </div>
                                        </div>
                                        <div class="p-2 flex-fill text-center">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                            </div>
                                        </div>
                                        <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                            <div class="font-weight-bold text-white sizefontI">
                                                80%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-3">
                                        <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                            <div class="font-weight-bold text-white sizefontI">
                                                Dise&ntilde;o web
                                            </div>
                                        </div>
                                        <div class="p-2 flex-fill text-center">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                                            </div>
                                        </div>
                                        <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                            <div class="font-weight-bold text-white sizefontI">
                                                85%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-3">
                                        <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                            <div class="font-weight-bold text-white sizefontI">
                                                React
                                            </div>
                                        </div>
                                        <div class="p-2 flex-fill text-center">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                            </div>
                                        </div>
                                        <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                            <div class="font-weight-bold text-white sizefontI">
                                                40%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-3">
                                        <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                            <div class="font-weight-bold text-white sizefontI">
                                                Ingles Hablado
                                            </div>
                                        </div>
                                        <div class="p-2 flex-fill text-center">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
                                            </div>
                                        </div>
                                        <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                            <div class="font-weight-bold text-white sizefontI">
                                                30%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row mt-3">
                                        <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                            <div class="font-weight-bold text-white sizefontI">
                                                Ingles Escrito
                                            </div>
                                        </div>
                                        <div class="p-2 flex-fill text-center">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                                            </div>
                                        </div>
                                        <div class="p-2 bg-dark text-center" style="border-radius: 25px">
                                            <div class="font-weight-bold text-white sizefontI">
                                                45%
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p id="jsdiv" class="text-justify d-none">
                    Utilizado en menus, y acciones de controles combinando jquery
                    <a href="Templates/JSExamples.html">ejemplos</a>
                </p>
                <p id="phpdv" class="text-justify d-none">
                    <a href="Templates/PHPExamples.html">Ejemplos</a> con el lenguaje PHP sin utilizar algun framework de por medio y utilizando la POO
                </p> 
                <p id="netdv" class="text-justify d-none">
                    <strong>ASP .NET</strong> es el entorno de trabajo diario si es necesario puedo crear una interfaz o bien a&ntilde;adir nuevas funciones
                    utilizando el framework de dise&ntilde;o de boostrap
                    web API para separar el front-end del backend algunos de ellos son para el envio de correos,
                    importacion de informacion etc. <a href="Templates/ASPexamples.html">ejemplos</a>
                </p>
                <p id="sqldv" class="text-justify d-none">
                    El lenguaje de consultas SQL server usado diariamente
                    es posible crear desde simples procedimientos para el CRUD, 
                    cursores o funciones dependiendo del requerimiento
                    <a href="Templates/SQLServer.html">ejemplos</a>
                </p>
                <p id="msdv" class="text-justify d-none">
                    Motor de base de datos utilizado en conjunto con PHP 
                    en un entorno de linux, mas concretamente Ubuntu generalmente
                    los procesos estan realizadas mediante rutinas utilizando la herramienta de Phpmyadmin 
                </p>
            </div>
        </div>
    </div>

    <script src="script/portafolio.js"></script>
</body>
</html>
