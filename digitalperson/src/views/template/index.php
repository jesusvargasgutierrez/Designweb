<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makefiles</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../../css/style.css" type="text/css" />
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h4 class="text-center">Nuevo paquete</h4>
                <div class="form-group row">
                    <label for="controlador" class="col-sm-2 col-form-label">Controlador</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control controlador" id="controlador">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="modelo" class="col-sm-2 col-form-label">Modelo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control modelo" id="modelo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="request" class="col-sm-2 col-form-label">Request</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control request" id="request">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fields" class="col-sm-2 col-form-label">Campos request</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control fields" id="fields">
                    </div>
                </div>
                <input type="button" name="click" id="send" class="btn btn-primary send" value="send">
                <input type="button" name="click" id="clean" class="btn btn-secondary clean" value="limpiar">
            </div>
        </div>
    </div>
</body>
<script src="../../../js/axios.js"></script>
<script src="../../../js/makepack.js"></script>
<script src="../../../js/jszip.min.js"></script>
<script src="https://momentjs.com/downloads/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.js" integrity="sha512-UNbeFrHORGTzMn3HTt00fvdojBYHLPxJbLChmtoyDwB6P9hX5mah3kMKm0HHNx/EvSPJt14b+SlD8xhuZ4w9Lg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>