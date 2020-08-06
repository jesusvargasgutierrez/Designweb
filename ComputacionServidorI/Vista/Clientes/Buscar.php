<!-- formulario de registro de cliente, no contiene codigo php internamente
pero si hace uso de una clase al presionar submit -->
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
</head>
<body class="">
    <div id="firstview" class="firstview">
        <div id="tabletemplate" class="tabletemplate container my-4">
            <div class="d-flex flex-column align-items-lg-center content-secondary">
                    <table id="Table1" class="flex-fill mt-3 table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Acciones</th>
                                <th scope="col">Persona</th>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Apellido Paterno</th>
                                <th scope="col">Apellido Materno</th>
                                <th scope="col">Genero</th>
                                <th scope="col">EstadoCivil</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Estado</th>
                            </tr>
                            <tbody id="tbody-content">
                                <?php  
                                    require_once ("../../Negocio/Cliente/Buscar.php");
                                    session_start();
                                    if(isset($_SESSION['Tarjeta']) ){
                                        $Busqueda = new Buscar();
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
                                                <a href="#" class="btn btn bg-primary" id="edit-register"
                                                    role="button">
                                                <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn bg-primary" id="rid-register"
                                                    role="button">
                                                <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </span>
                                        </td>
                                        <td><?php echo $Cliente[$key1]["Persona"]; ?></td>
                                        <td><?php echo $Cliente[$key1]["Codigo"]; ?></td>
                                        <td><?php echo $Cliente[$key1]["Nombres"]; ?></td>
                                        <td><?php echo $Cliente[$key1]["ApellidoMaterno"]; ?></td>
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
                        </thead>
                    </table> 
            </div>
        </div>
    </div>
</body>
</html>
