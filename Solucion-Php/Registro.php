<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link href="../style/style_slide.css" rel="stylesheet">
    
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
    <nav class="page-header navbar navbar-light bg-lignt navbar-expand-md">
        <a class="navbar-brand" href="#">
            <span class="h4">
                Codersweb
            </span>
        </a>

        <button type="button" class="navbar-toggler" data-toggle="collapse"
        data-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false"
        aria-label="Ver mas">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu-principal">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="text-body nav-link">Inicio</a></li>
                <li class="nav-item"><a class="text-body nav-link">Servicios</a></li>
                <li class="nav-item"><a class="text-body nav-link">Productos</a></li>
                <li class="nav-item"><a class="text-body nav-link">Contacto</a></li>
            </ul>
        </div>
    </nav>
   <nav class="navbar navbar-dark bg-secondary navbar-expand-md">
        <div class="container">
           <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-menu-acciones"
               aria-controls="nav-menu-acciones" aria-expanded="false" aria-label="Opciones">
              <span class="navbar-toggler-icon"></span>
           </button>
           
           <div class="collapse navbar-collapse" id="nav-menu-acciones">
               <section class="container d-flex justify-content-center">
                   <div class="flex-fill">
                       <span><i class="fas fa-file"></i></span>&nbsp;New
                   </div>
                   <div class="flex-fill">
                       <span><i class="fas fa-save"></i></span>&nbsp;Save
                   </div>
                   <div class="flex-fill">
                       <a href="#modal" id="modal" data-href="views/BuscarCliente.html" class="Buscar"><i class="fas fa-search"></i></a>&nbsp;Search
                   </div>
                   <div class="flex-fill">
                       <span><i class="fas fa-print"></i></span>&nbsp;Print
                   </div>
                   <div class="flex-fill">
                       <span><i class="fas fa-undo"></i></span>&nbsp;Exit
                   </div>
               </section>
           </div>
       </div>
    </nav>

    <div class="tab-content" id="Sections-content">
        <section class="tab-pane fade show active" role="tabpanel" aria-labelledby="pills-home-tab" id="General-Section">
            <form action="Account.php" id="formulario" name="formulario" method="POST">
                <div class="d-flex flex-column my-1 flex-lg-row align-items-lg-center">
                    <div class="flex-fill">
                        <label class="col-form-label">Client ID:</label>
                        <input type="text" disabled class="form-control-sm enabled" placeholder=""/>
                        <a href="#" role="button" id="ancle-options" class="btn btn-info">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </div>
                <div class="d-flex flex-column mt-3 flex-lg-row align-items-lg-center">
                    <div class="flex-fill order-3 my-1 mx-1">
                        <input type="text" class="form-control" value="Full Name" name="FullName" placeholder="Full name"/>
                    </div>
                    <div class="flex-fill order-0 my-1 mx-1">
                        <input type="text" class="form-control" value="Names" name="Names" placeholder="Names"/>
                    </div>
                    <div class="flex-fill order-1 my-1 mx-1">
                        <input type="text" class="form-control" value="First Name" name="Firstname" placeholder="First name"/>
                    </div>
                    <div class="flex-fill order-2 my-1 mx-1">
                        <input type="text" class="form-control" value="Second-name" name="Secondname" placeholder="Surname"/>
                    </div>
                </div>
                <div class="d-flex flex-column mt-3 mt-md-2 flex-lg-row align-items-lg-center">
                    <div class="flex-fill my-1 mx-1">
                        <input class="form-control" type="date">
                    </div>
                    <div class="flex-fill my-1 mx-1">
                        <input type="text" class="form-control" disabled placeholder="Age"/>
                    </div>
                    <div class="flex-fill my-1 mx-1">
                        <select class="form-control" id="select-genero">
                            <option selected>Selection Gender</option>
                            <option>Male</option>
                            <option>Femaile</option>
                        </select>
                    </div>
                    <div class="flex-fill my-1 mx-1">
                        <select class="form-control" id="select-estado-civil">
                            <option selected>Selection marital status</option>
                            <option>Single</option>
                            <option>Married</option>
                        </select>   
                    </div>
                </div>

                <input type="submit" value="Registrar!!" class="btn-success" id="regp" name="alta"/>
            </form>
        </section>
    </div>

    <footer class="border border-success">
        <h1>footer content</h1>
    </footer>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $(".ancla-main").click(function(){   
               $('#Main-content').load("Html-Examples.html");
            });
        });
    </script>
</body>
</html>
