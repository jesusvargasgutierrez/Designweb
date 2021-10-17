<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FingerPrint</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../../css/style.css" type="text/css" />
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</head>
<body>
    <?php include('../components/header.php') ?>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div class="text-center img-dactilar">
                    <img class="capture" alt="Fotografia" style="width:200px; height:200px">
                </div>
            </div>
            <div class="col">
                <h4 class="text-center">Informaci&oacute;n</h4>
                <div>
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-2 col-form-label">Nombre completo</label>
                        <div class="col-sm-10">
                            <input type="text" disabled class="form-control fullname" id="fullname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="birthday" class="col-sm-2 col-form-label">Cumplea&ntilde;os</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control birthday" disabled id="birthday">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="position" class="col-sm-2 col-form-label">Puesto</label>
                        <div class="col-sm-10">
                            <select disabled class="form-control position" name="" id="position">
                                <option value="0">==========Selecciona una opcion==========</option>
                                <option value="1">Compras</option>
                                <option value="2">Recepcion</option>
                                <option value="3">RH</option>
                                <option value="4">Administracion</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input type="button" name="click" id="send" class="btn btn-primary send d-none" value="send">
                <input type="button" name="click" id="clean" class="btn btn-secondary clean" value="limpiar">
                <input type="hidden" name="hash" id="hash" value="1" class="form-control">
            </div>
        </div>
    </div>
</body>
<script src="../../../js/es6-shim.js"></script>
<script src="../../../js/websdk.client.bundle.min.js"></script>
<script src="../../../js/fingerprint.sdk.min.js"></script>
<script src="../../../js/axios.js"></script>
<script src="../../../js/script-info.js"></script>
<script src="../../../js/jszip.min.js"></script>
<script src="https://momentjs.com/downloads/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.js" integrity="sha512-UNbeFrHORGTzMn3HTt00fvdojBYHLPxJbLChmtoyDwB6P9hX5mah3kMKm0HHNx/EvSPJt14b+SlD8xhuZ4w9Lg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>