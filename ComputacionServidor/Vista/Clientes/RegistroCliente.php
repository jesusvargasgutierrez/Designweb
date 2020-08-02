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

    <script src="../Negocio/Cliente/Script_Cliente.js" type="text/javascript"></script>
</head>
<body class="">
    <div class="container firstview">
            <form action="../Negocio/Cliente/Agregarcliente.php" id="formulario" name="formulario" class="tab-content" method="POST" enctype="multipart/form-data">
                <span>
                    <button type="button" class="Nuevo btn">
                        <i class="fas fa-file"></i></span>&nbsp;Nuevo
                    </button>
                   <button type="submit" class="btn">
                      <i class="fas fa-save"></i></span>&nbsp;Guardar
                    </button>
                    <button type="button" class="Buscar btn btn">
                       <i class="fas fa-search"></i>&nbsp;Buscar
                    </button>
                </span>
                <section class="selectores tab-pane fade show active" role="tabpanel" aria-labelledby="pseills-home-tab" id="General-Section">
                    <div class="d-flex flex-column my-1 flex-lg-row align-items-lg-center">
                        <div class="flex-fill">
                            <label class="col-form-label">Identificador:</label>
                            <input type="text" id="Identificador" name="Campo0" value="" class="form-control-sm enabled" placeholder=""/>
                            <label class="col-form-label">Equivalencia:</label>
                            <input type="text" id="Equivalencia" name="Campo1" value="Client1" placeholder="Equivalencia"/>
                        </div>
                    </div>
                    <div class="d-flex flex-column mt-3 flex-lg-row align-items-lg-center">
                        <div class="flex-fill order-3 my-1 mx-1">
                            <input type="text" class="form-control" value="Nombre Completo" id="NombreCompleto" name="Campo5" placeholder="NombreCompleto" />
                        </div>
                        <div class="flex-fill order-0 my-1 mx-1">
                            <input type="text" class="form-control" value="Nombres" id="Nombres" name="Campo2" placeholder="Nombres"/>
                        </div>
                        <div class="flex-fill order-1 my-1 mx-1">
                            <input type="text" class="form-control" value="Primer Apellido" id="PrimerApellido" name="Campo3" placeholder="Primer Apellido" />
                        </div>
                        <div class="flex-fill order-2 my-1 mx-1">
                            <input type="text" class="form-control" value="Segundo Apellido" id="SegundoApellido" name="Campo4" placeholder="SegundoApellido" />
                        </div>
                    </div>
                    <div class="d-flex flex-column mt-3 mt-md-2 flex-lg-row align-items-lg-center">
                        <div class="flex-fill my-1 mx-1">
                            <input class="form-control" id="DateBird" name="Campo6" type="date">
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <input type="text" class="form-control" id="age" name="edad" value="0" disabled placeholder="Age" />
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <select class="form-control" id="select-genero" name="Campo7">
                                <option selected value="0">Selecciona genero</option>
                                <option value="1">Hombre</option>
                                <option value="2">Mujer</option>
                            </select>
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <select class="form-control" id="select-estadocivil" name="Campo8">
                                <option selected value="0">Secciona estado civil</option>
                                <option value="1">Soltero</option>
                                <option value="2">Casado</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex flex-column mt-3 mt-md-2 flex-lg-row align-items-lg-center">
                        <div class="flex-fill my-1 mx-1">
                            <input class="form-control" placeholder="Correo" id="Correo" name="Campo9" type="text">
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <input class="form-control" placeholder="Telefono" id="Telefono" name="Campo10" type="text">
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <select class="form-control" id="select-Estado" name="Campo11">
                                <option selected value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </div>
                    </div>
                </section>

                <input type="hidden" id="HdAction" name="HdAction" value="1">
            </form>
    </div>
    <div id="Secondview" class="d-none container Secondview">
        <span>
            <button type="button"class="Regresar btn btn">
                <i class="fas fa-undo"></i>&nbsp;Regresar
            </button>
        </span>
        <div id="tabletemplate" class="tabletemplate container my-4">
            <div class="divtabla d-flex flex-column align-items-lg-center content-secondary">
                    <table class="Table1 overflow-auto flex-fill mt-3 table table-dark">
                           <thead>
                                <tr>
                                    <th scope="col">Acciones</th>
                                    <th scope="col">Persona</th>
                                    <th scope="col">Codigo</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">Apellido Paterno</th>
                                    <th scope="col">Apellido Materno</th>
                                    <th scope="col">Nombre Completo</th>
                                    <th scope="col">Fecha Nacimiento</th>
                                    <th scope="col">Genero</th>
                                    <th scope="col">EstadoCivil</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Estado</th>
                                </tr>
                           </thead>
                            <tbody id="tbody-content" class="tbody-content">
                                <?php  
                                    require_once ("../../Negocio/Cliente/Proceso.php");                                    
                                    if(isset($_SESSION['Tarjeta']) ){
                                        $Busqueda = new Procesar();
                                        $BD = $_SESSION['Tarjeta']["Conexion"];
                                        $Cliente = $Busqueda->ListarPersona($BD);
                                ?>
                                <?php
                                    foreach($Cliente as $key1 => $value1)
                                    {
                                ?>
                                    <tr>
                                        <td>
                                            <span>
                                                <button class="btn btn bg-primary edit-register" id="edit-register">
                                                    Editar <i class="fas fa-edit"></i>
                                                </button><br/><br/>
                                                <button class="btn btn bg-primary rid-register" id="rid-register">
                                                    Eliminar <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </span>
                                        </td>
                                        <td data-id="<?php echo $Cliente[$key1]["Persona"]; ?>"><?php echo $Cliente[$key1]["Persona"]; ?></td>
                                        <td><?php echo $Cliente[$key1]["Codigo"]; ?></td>
                                        <td><?php echo $Cliente[$key1]["Nombres"]; ?></td>
                                        <td><?php echo $Cliente[$key1]["ApellidoPaterno"]; ?></td>
                                        <td><?php echo $Cliente[$key1]["ApellidoMaterno"]; ?></td>
                                        <td><?php echo $Cliente[$key1]["NombreCompleto"]; ?></td>
                                        <td><?php echo $Cliente[$key1]["FechaNacimiento"]; ?></td>
                                        <td><?php echo $Cliente[$key1]["Genero"]; ?></td>
                                        <td><?php echo $Cliente[$key1]["EstadoCivil"]; ?></td>
                                        <td><?php echo $Cliente[$key1]["Correo"]; ?></td>
                                        <td><?php echo $Cliente[$key1]["Telefono"]; ?></td>
                                        <td><?php echo $Cliente[$key1]["Estado"]; ?></td>
                                    </tr>
                                <?php
                                    }
                                    }
                                    else 
                                   {
                                     echo "no hay datos";
                                  }
                                ?>
                            </tbody>
                    </table> 
            </div>
        </div>
    </div>
</body>
</html>
