<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="bg-danger text-white d-none message"></div>
        <div class="row mt-3">
            <div class="col-md-4 col-12">
                <div class="card" style="max-width: 18rem;">
                    <div class="card-header alert alert-success alert-dismissible d-none" id="estado">
                    </div>
                    <span>
                            Miembro 
                            <?php
                               echo $_GET['id_member']
                            ?>
                    </span>
                    <div>
                        <video id="video" class="card-img-top video"></video>
                        <img class="capture card-img-top d-none" />
                        <input type="hidden" class="capture_name" />
                    </div>
                    <div class="card-footer">
                        <button id="boton" class="btn btn-primary mt-3 camera"><i class="fas fa-camera"></i></button>
                        <button class="btn btn-success mt-3 save" disabled><i style="font-size:15pt" class="far fa-save"></i></button>
                        <button class="btn btn-danger mt-3 trash" disabled><i class="far fa-trash-alt"></i></button>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-8 col-12">
                <img class="testimg" />
            </div> -->
        </div>
    </div>
	<canvas id="canvas" style="display: none;"></canvas>
</body>
    <script src="../../../js/script-photo.js"></script>
    <script src="../../../js/axios.js"></script>
</html>