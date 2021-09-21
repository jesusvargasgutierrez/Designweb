<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FingerPrint</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
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
        </div>
    </div>
</body>
<script src="js/es6-shim.js"></script>
<script src="js/websdk.client.bundle.min.js"></script>
<script src="js/fingerprint.sdk.min.js"></script>
<script src="js/app.js"></script>
<script src="js/axios.js"></script>
<script src="js/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.js" integrity="sha512-UNbeFrHORGTzMn3HTt00fvdojBYHLPxJbLChmtoyDwB6P9hX5mah3kMKm0HHNx/EvSPJt14b+SlD8xhuZ4w9Lg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>