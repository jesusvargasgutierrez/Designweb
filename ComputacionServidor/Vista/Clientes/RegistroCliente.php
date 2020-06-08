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
    <div class="container mt-3" id="tabscontrol">
        <ul class="nav row nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="col-lg-3 nav-item col-12 text-center">
              <a class="nav-link active" id="pills-General-Section" data-toggle="pill" href="#General-Section" 
              role="tab" aria-controls="General-Section" aria-selected="true">Informacion General</a>
            </li>
            <li class="col-lg-3 nav-item col-12 text-center">
              <a class="nav-link" id="pills-Address-Section" data-toggle="pill" href="#Address-Section" 
              role="tab" aria-controls="Address-Section" aria-selected="false">Direccion</a>
            </li>
        </ul>
    </div>

    <div id="firstview" class="firstview">
            <form action="../Negocio/Cliente/Agregarcliente.php" id="formulario" name="formulario" class="tab-content" method="POST" enctype="multipart/form-data">
                <span>
                   <button type="submit" id="Save" name="Save" class="btn">
                      <i class="fas fa-save"></i></span>&nbsp;Guardar
                    </button>
                </span>
                <section class="tab-pane fade show active" role="tabpanel" aria-labelledby="pseills-home-tab" id="General-Section">
                    <div class="d-flex flex-column my-1 flex-lg-row align-items-lg-center">
                        <div class="flex-fill">
                            <label class="col-form-label">Identificador:</label>
                            <input type="text" name="Codigo" value="01" class="form-control-sm enabled" placeholder="" />
                            <label class="col-form-label">Equivalencia:</label>
                            <input type="text" id="Equivalencia" name="Equivalencia" value="Client1" placeholder="Equivalencia" />
                        </div>
                    </div>
                    <div class="d-flex flex-column mt-3 flex-lg-row align-items-lg-center">
                        <div class="flex-fill order-3 my-1 mx-1">
                            <input type="text" class="form-control" value="Nombre Completo" id="NombreCompleto" name="NombreCompleto" placeholder="NombreCompleto" />
                        </div>
                        <div class="flex-fill order-0 my-1 mx-1">
                            <input type="text" class="form-control" value="Nombres" id="Nombres" name="Nombres" placeholder="Nombres" />
                        </div>
                        <div class="flex-fill order-1 my-1 mx-1">
                            <input type="text" class="form-control" value="Primer Nombre" id="PrimerNombre" name="PrimerNombre" placeholder="Primer Nombre" />
                        </div>
                        <div class="flex-fill order-2 my-1 mx-1">
                            <input type="text" class="form-control" value="Segundo Nombre" id="SegundoNombre" name="SegundoNombre" placeholder="SegundoNombre" />
                        </div>
                    </div>
                    <div class="d-flex flex-column mt-3 mt-md-2 flex-lg-row align-items-lg-center">
                        <div class="flex-fill my-1 mx-1">
                            <input class="form-control" id="DateBird" name="DateBird" type="date">
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <input type="text" class="form-control" id="age" name="age" value="27" disabled placeholder="Age" />
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <select class="form-control" id="select-genero" name="idGenero">
                                <option selected value="1">Selection Gender</option>
                                <option>Male</option>
                                <option>Femaile</option>
                            </select>
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <select class="form-control" id="select-estadocivil" name="idestadocivil">
                                <option>Selection marital status</option>
                                <option selected value="2">Single</option>
                                <option>Married</option>
                            </select>
                        </div>
                    </div>
                </section>

                <section class="tab-pane fade show active" role="tabpanel" aria-labelledby="pills-home-tab" id="Address-Section">
                    <div class="d-flex flex-column mt-3 flex-lg-row align-items-lg-center">
                        <div class="flex-fill my-1 mx-1">
                            <input type="text" class="form-control" value="Direccion" placeholder="Direccion" name="Direccion" id="Direccion" />
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <input type="text" class="form-control" value="262" placeholder="NumeroInterno" name="NumeroInterno" id="NumeroInterno" />
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <input type="text" class="form-control" placeholder="NumeroExterno" name="NumeroExterno" id="NumeroExterno" />
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <input type="text" class="form-control" value="colonia" placeholder="colonia" name="colonia" id="colonia" />
                        </div>
                    </div>
                    <div class="d-flex flex-column mt-3 flex-lg-row align-items-lg-center">
                        <div class="flex-fill my-1 mx-1">
                            <input type="text" class="form-control" value="ciudad" placeholder="ciudad" name="ciudad" id="ciudad" />
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <select class="form-control" id="estado" name="idestado">
                                <option selected>Selection State</option>
                                <option>Chihuahua</option>
                                <option>Durango</option>
                            </select>
                        </div>
                    </div>
                </section>
                <input type="hidden" id="HdAction" name="HdAction" value="GuardarCliente">
            </form>
    </div>
</body>
</html>
