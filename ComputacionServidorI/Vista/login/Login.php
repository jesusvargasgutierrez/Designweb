<!-- formulario de login, no contiene codigo php internamente
pero si hace uso de una clase al presionar submit
aqui es donde se comienza el uso de la primera matriz de arreglo
para la construccion del menu
-->
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <style type="text/css">
        .LC{
            background: #fff;
            border-radius: 3px;
            padding: 30px;
            max-width: 420px;
        }

        .main1{
            min-height: 100%;
padding-bottom: 35px;
position: relative;
        }

        body{
            color: #333;
            font-family: Lato,"Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 13px;
            letter-spacing: .01em;
            line-height: 20px;
            font-weight: 400;
        }
    </style>
</head>
<body class="">
    <div id="viewlogin" class="main1" style="">
            <form id="formulario" action="../../Controlador/Login/login.php" name="formulario" method="POST">
                <div class="LC">
                    <div class="d-flex flex-md-row my-1 align-items-lg-center">
                        <div class="flex-fill text-center">
                        <img src="../image/user.png" width="100" height="200"
                            class="rounded-circle img-thumbnail img-fluid" alt="User wrapper"/>
                        </div>
                    </div>
                    <div class="d-flex flex-md-row my-1 align-items-lg-center">
                        <div class="flex-fill text-center">
                            <h3>Iniciar Sesion</h3>
                        </div>
                    </div>
                    <div class="d-flex flex-md-row my-1 align-items-lg-center">
                        <div class="">
                            <span><i class="fas fa-building"></i></span>&nbsp;
                        </div>
                        <div class="flex-fill">
                            <input type="text" class="form-control" name="Codigo" placeholder="Codigo" />
                        </div>
                    </div>

                    <div class="d-flex flex-md-row my-3 align-items-lg-center">
                        <div class="">
                            <span><i class="fas fa-user"></i></span>&nbsp;
                        </div>
                        <div class="flex-fill">
                            <input type="text" class="form-control" name="Usuario" placeholder="Usuario" />
                        </div>
                    </div>

                    <div class="d-flex flex-md-row my-3 align-items-lg-center">
                        <div class="">
                            <span><i class="fas fa-key"></i></span>&nbsp;
                        </div>
                        <div class="flex-fill">
                            <input type="Password" class="form-control" name="contrasenia" placeholder="contraseña" />
                        </div>
                    </div>

                    <div class="d-flex flex-md-row my-3">
                        <div class="flex-fill">
                            <input type="submit" name="inicio" class="form-control btn btn-primary" value="Iniciar sesion" />
                        </div>
                    </div>

                    <div class="d-flex flex-md-row my-3 align-items-center">
                        <div class="flex-fill text-center border-0">
                            <a href="#" role="button" class="form-control border-0">
                                Olvide mi contrase&ntilde;a
                            </a>
                        </div>
                    </div>

                    <div class="d-flex flex-md-row my-3 align-items-center">
                        <div class="flex-fill text-center border-0">
                            <label class="d-none font-weight-bold text-danger"></label>
                        </div>
                    </div>
                </div>
            </form>
    </div>

    <script type="text/javascript" src="../style/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
