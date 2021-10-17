<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/stylesheet.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('src/views/components/header.php') ?>
    <!-- MultiStep Form -->
    <div class="container-fluid">
        <div class="row justify-content-center mt-0">
            <div class="col">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong>Informacion</strong></h2>
                    <p>Complete los pasos del registro</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <div id="msform">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>General</strong></li>
                                    <li id="personal"><strong>Fotografia</strong></li>
                                    <li id="payment"><strong>Huellas</strong></li>
                                    <li id="confirm"><strong>Finish</strong></li>
                                </ul> <!-- fieldsets -->
                                <fieldset>
                                    <form>
                                        <div class="form-group row">
                                            <label for="fullname" class="col-sm-2 col-form-label">Nombre completo</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control-plaintext fullname" id="fullname">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="birthday" class="col-sm-2 col-form-label">Cumplea&ntilde;os</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control birthday" id="birthday">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="position" class="col-sm-2 col-form-label">Puesto</label>
                                            <div class="col-sm-10">
                                                <select class="form-control position" name="" id="position">
                                                    <option value="0">==========Selecciona una opcion==========</option>
                                                    <option value="1">Compras</option>
                                                    <option value="2">Recepcion</option>
                                                    <option value="3">RH</option>
                                                    <option value="4">Administracion</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                    <input type="hidden" class="id_member">
                                    <input type="button" name="next" class="next action-button saveinfo" value="Siguiente" />
                                </fieldset>
                                <fieldset>
                                    <div class="variable"></div>
                                    <iframe class="frame-step2" style="width:100%; height:300px" frameborder="0">
                                    </iframe>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Atras" /> 
                                    <input type="button" name="next" class="next action-button take-photo" value="Siguiente" />
                                </fieldset>
                                <fieldset>
                                    <iframe class="frame-step3" style="width:100%; height:300px" frameborder="0"></iframe>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Atras" /> 
                                    <input type="button" name="make_payment" class="next action-button" value="Confirmar" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Se ha registrado la informacion !</h2> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                        </div> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>Registro exitoso!</h5>
                                                <a href="/DesignWeb/digitalperson">Crear nuevo</a>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/axios.js"></script>
<script src="js/scriptstep.js"></script>
</html>