<!-- formulario de registro de cliente, no contiene codigo php internamente
pero si hace uso de una clase al presionar submit -->
<?php session_start(); ?>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="../Controlador/Cliente/Script_Cliente.js" type="text/javascript"></script>
</head>
<body class="">
    <div class="container firstview">
            <form action="../Controlador/Escuela/Agregar.php" id="formulario" name="formulario" class="tab-content" method="POST" enctype="multipart/form-data">
                <span>
                    <button type="button" class="Nuevo btn">
                        <i class="fas fa-file"></i></span>&nbsp;Nuevo
                    </button>
                   <button type="submit" class="btn">
                      <i class="fas fa-save"></i></span>&nbsp;Guardar
                    </button>
                </span>
                <section class="selectores tab-pane fade show active" role="tabpanel" aria-labelledby="pseills-home-tab" id="General-Section">
                    <div class="d-flex flex-column my-1 flex-lg-row align-items-lg-center">
                        <div class="flex-fill">
                            <label class="col-form-label">Identificador:</label>
                            <input type="text" id="Identificador" name="Campo0" value="" class="form-control-sm enabled" placeholder=""/>
                            <label class="col-form-label">Codigo:</label>
                            <input type="text" id="Equivalencia" name="Campo1" value="" required placeholder="Equivalencia"/>
                        </div>
                    </div>
                    <div class="d-flex flex-column mt-3 flex-lg-row align-items-lg-center">
                        <div class="flex-fill order-3 my-1 mx-1">
                            <input type="text" class="form-control" value="" id="NombreCompleto" name="Campo5" placeholder="NombreCompleto" />
                        </div>
                        <div class="flex-fill order-0 my-1 mx-1">
                            <input type="text" class="form-control" value="" id="Nombres" name="Campo2" placeholder="Nombres"/>
                        </div>
                        <div class="flex-fill order-1 my-1 mx-1">
                            <input type="text" class="form-control" value="" id="PrimerApellido" name="Campo3" placeholder="Primer Apellido" />
                        </div>
                        <div class="flex-fill order-2 my-1 mx-1">
                            <input type="text" class="form-control" value="" id="SegundoApellido" name="Campo4" placeholder="SegundoApellido" />
                        </div>
                    </div>
                    <div class="d-flex flex-column mt-3 mt-md-2 flex-lg-row align-items-lg-center">
                        <div class="flex-fill my-1 mx-1">
                            <select class="form-control" id="select-registro" name="Campo6">
                                <option selected value="0">Tipo Registro</option>
                                <option value="1">Alumno</option>
                                <option value="1">Profesor</option>
                            </select>
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <select class="form-control" id="select-materia" name="Campo7">
                                <option selected value="0">Selecciona materia</option>
                                <option value="1">Programacion I</option>
                                <option value="2">Ingenieria Software</option>
                                <option value="3">Seguridad en el Software</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex flex-column mt-3 mt-md-2 flex-lg-row align-items-lg-center">
                        <div class="flex-fill my-1 mx-1">
                            <input class="form-control" placeholder="Correo" id="Correo" name="Campo8" type="text">
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <input class="form-control" placeholder="Telefono" id="Telefono" name="Campo9" type="text">
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <select class="form-control" id="select-Estado" name="Campo10">
                                <option selected value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </div>
                    </div>
                </section>

                <input type="hidden" id="HdAction" name="HdAction" value="1">
            </form>
    </div>
</body>
</html>
