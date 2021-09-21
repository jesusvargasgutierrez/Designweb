<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FingerPrint</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</head>
<body>
    <div class="container border border-danger">
        <div class="row border border-warning">
            <div class="col border border-success">
                <div class="text-center border border-secondary img-dactilar">
                    <img class="capture border border-secondary card-img-top" src="" alt="huella dactilar">
                    <a download="trace1.png" class="trace1 d-none" target="_blank">download</a>
                    <a download="trace2.png" class="trace2 d-none" target="_blank">download</a>
                    <a download="trace3.png" class="trace3 d-none" target="_blank">download</a>
                 </div>
                <div class="mt-3 text-center border border-secondary">
                    <a class="btn btn-success start" id="start" onclick="Javascript:onStart()">
                        <i class="fas fa-play text-white"></i>
                    </a>
                    <a href="#" class="btn btn-primary download disabled">
                        <i class="fas fa-download" rel="tooltip" title="Descarga la imagen"></i>
                    </a>
                </div>
            </div>
            <div class="col border border-primary">
                <div class="text-center border border-secondary">
                    Huellas capturadas
                    <span class="badge badge-primary badge-pill count">0</span>
                </div>
                <div class="mt-3 text-center badge1 border border-secondary">
                    <span class="badge badge-primary badge-pill">1</span>
                </div>
                <div class="mt-3 text-center badge2 border border-secondary">
                    <span class="badge badge-primary badge-pill">2</span>
                </div>
                <div class="mt-3 text-center badge3 border border-secondary">
                    <span class="badge badge-primary badge-pill">3</span>
                </div>
            </div>

            <canvas id="imgCanvas" />
        </div>
    </div>
    <div class="container mt-3 d-none">
        <div class="row">
            <div class="col">
                <div id="imagediv"></div>
            </div>
            <div class="col-6">
                <div id="status"></div>
                <button class="btn btn-primary" id="start" onclick="Javascript:onStart()">start</button>
                <button class="btn btn-success" id="save">save</button>
                <a href="convertimage.php" class="btn btn-warning" id="view">view</a>
                <a href="CompareImage/example.php" class="btn btn-warning">compare</a>
                <a dowload="test" id="download">download</a><br/><br/>
                <form method="post" action="recibe2.php" enctype="multipart/form-data">
                    <input id="archivo" type="file" name="uploadfile"><br/><br/>
                    <input type="submit" value="enviar"  />
                </form><br/><br/>
                <form method="post" action="recibe.php" enctype="multipart/form-data">
                    <input type="file" name="archivo[]" multiple=""><br/><br/>
                    <input type="submit" value="enviar"  />
                </form>
                <canvas id="visor">
                    Su navegador no soporta canvas
                </canvas>
            </div>
        </div>
    </div> 
</body>
<script src="es6-shim.js"></script>
<script src="websdk.client.bundle.min.js"></script>
<script src="fingerprint.sdk.min.js"></script>
<script src="app.js"></script>
<script src="axios.js"></script>
<script src="js/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.js" integrity="sha512-UNbeFrHORGTzMn3HTt00fvdojBYHLPxJbLChmtoyDwB6P9hX5mah3kMKm0HHNx/EvSPJt14b+SlD8xhuZ4w9Lg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>