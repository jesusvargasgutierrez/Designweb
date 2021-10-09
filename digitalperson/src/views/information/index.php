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
    <div class="container border border-danger mt-3">
        <div class="row border border-warning">
            <div class="col">
                <div class="text-center img-dactilar border border-danger">
                    <img class="capture" src="" alt="Fotografia">
                </div>
            </div>
            <div class="col border border-primary">
                <h4 class="text-center">Informaci&oacute;n</h4>
                <input type="text" name="hash" id="hash" class="form-control">
            </div>
        </div>
    </div>
</body>
<script src="../../../js/es6-shim.js"></script>
<script src="../../../js/websdk.client.bundle.min.js"></script>
<script src="../../../js/fingerprint.sdk.min.js"></script>
<script src="../../../js/script-info.js"></script>
<script src="../../../js/axios.js"></script>
<script src="../../../js/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.js" integrity="sha512-UNbeFrHORGTzMn3HTt00fvdojBYHLPxJbLChmtoyDwB6P9hX5mah3kMKm0HHNx/EvSPJt14b+SlD8xhuZ4w9Lg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>