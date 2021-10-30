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
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div>
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control idnumber" id="idnumber">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-2 col-form-label">Nombre completo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control fullname" id="fullname">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <input type="button" name="click" id="send" class="btn btn-primary send" value="send">
        </div>
    </div>
</body>
    <script src="../../../js/script-test.js"></script>
    <script src="../../../js/axios.js"></script>
</html>