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
    <?php include('../components/header.php') ?>
    <div class="container mt-3">
        <div class="row">
            <form action="../../controllers/materials/save.php" method="post" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlFile1">
                        Importar insumos
                        <button type="button" class="btn d-none" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-question-circle"></i>
                        </button>
                    </label>
                    <input type="file" require name="file" class="form-control-file mt-3" id="exampleFormControlFile1">
                    <input type="submit" name="import" class="form-control btn btn-primary mt-3" value="Enviar" />
                </div>
            </form>
        </div>
        <div class="row">
            <strong>Notas:</strong>
            <ul class="text-danger">
                <li>
                    Favor de no retirar ninguna columna del archivo
                </li>
                <li>
                    Todos los campos deben de llevar un valor o un numero cero
                </li>
                <li>
                    Si la categoria o el almacen tiene un 0 por default sera automaticamente 
                    producto de venta y hoyo 1 respectivamente
                </li>
            </ul>
        </div>
    </div>
</body>
    <script src="../../../js/axios.js"></script>
</html>