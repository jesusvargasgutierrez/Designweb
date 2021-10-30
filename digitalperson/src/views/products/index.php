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
            <form action="../../controllers/products/save.php" method="post" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlFile1">
                        Importar productos
                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-question-circle"></i>
                        </button>
                    </label>
                    <input type="file" require name="file" class="form-control-file mt-3" id="exampleFormControlFile1">
                    <input type="submit" name="import" class="form-control btn btn-primary mt-3" value="Enviar" />
                </div>
            </form>
        </div>
        <div class="row">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Acotaciones de layout</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tr>
                                <thead>
                                    <tr>
                                        <th scope="col">Columna</th>
                                        <th scope="col">valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>description</td>
                                        <td>Nombre y/o marca del producto</td>
                                    </tr>
                                    <tr>
                                        <td>quick_code</td>
                                        <td>Codigo rapido del producto</td>
                                    </tr>
                                    <tr>
                                        <td>Categoria (id_category)</td>
                                        <td>
                                            <ol>
                                                <li>Otros</li>
                                                <li>Dulces</li>
                                            </ol>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Unidad (id_unity)</td>
                                        <td>
                                            <ol>
                                                <li>Pieza</li>
                                                <li>Caja</li>
                                            </ol>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Almacen (id_warehouse)</td>
                                        <td>
                                            <ol>
                                                <li>Palapa</li>
                                                <li>Bar</li>
                                            </ol>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>sales_price</td>
                                        <td>Precio venta</td>
                                    </tr>
                                    <tr>
                                        <td>employed_price</td>
                                        <td>Precio empleado</td>
                                    </tr>
                                    <tr>
                                        <td>shop_price</td>
                                        <td>Precio compra</td>
                                    </tr>
                                </tbody>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="../../../js/axios.js"></script>
</html>