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

    <script src="../../Controlador/Login/Script_Login.js" type="text/javascript"></script>

    <style type="text/css">
        .LC{
            background: #fff;
            border-radius: 3px;
            padding: 30px;
            max-width: 100%;
        }
        .user_card {
			height: 100%;
			width: 350px;
			margin-top: auto;
			margin-bottom: auto;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;

		}

    </style>
</head>
<body class="">
    <div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="LC">
				<div class="d-flex justify-content-center form_container">
                    <form id="formulario" class="" name="formulario" method="POST">
                        <div class="user_card">
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
                                    <input type="text" class="form-control" id="Codigo" name="Codigo" placeholder="Codigo" />
                                </div>
                            </div>

                            <div class="d-flex flex-md-row my-3 align-items-lg-center">
                                <div class="">
                                    <span><i class="fas fa-user"></i></span>&nbsp;
                                </div>
                                <div class="flex-fill">
                                    <input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Usuario" />
                                </div>
                            </div>

                            <div class="d-flex flex-md-row my-3 align-items-lg-center">
                                <div class="">
                                    <span><i class="fas fa-key"></i></span>&nbsp;
                                </div>
                                <div class="flex-fill">
                                    <input type="Password" class="form-control" id="contrasenia" name="contrasenia" placeholder="Contraseña" />
                                </div>
                            </div>

                            <div class="d-flex flex-column my-3">
                                <div class="flex-fill">
                                    <input type="button" id="inicio" name="inicio" class="form-control btn btn-primary" value="Iniciar sesion" />
                                </div>
                                <div class="flex-fill text-center border-0">
                                    <a href="#" role="button" class="form-control border-0">
                                        Crear Usuario
                                    </a>
                                </div>
                                <div class="flex-fill text-center border-0">
                                    <label id="mensaje" class="font-weight-bold text-danger"></label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="../style/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
