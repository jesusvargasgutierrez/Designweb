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
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Codigo rapido</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Almacen</th>
                        <th scope="col">Proveedor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once('../../vendor/autoload.php');
                        require_once('../../conexion.php');
                        require_once('../../models/products.php');

                        $allprod = products::select([
                                        "op_products.id_product"
                                        ,"op_products.description"
                                        ,"op_products.quick_code"
                                        ,"op_category.description as category"
                                        ,"op_suppliers.fullname as supplier"
                                    ])
                                   ->join('op_category','op_products.id_category','op_category.id_category')
                                   ->join('op_suppliers','op_products.id_provider','op_suppliers.id_supplier')
                                   ->get();

                        foreach($allprod as $p){
                            ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $p["id_product"] ?>
                                    </th>
                                    <td><?php echo $p["description"] ?></td>
                                    <td><?php echo $p["quick_code"] ?></td>
                                    <td><?php echo $p["category"] ?></td>
                                    <td>Hoyo 1</td>
                                    <td><?php echo $p["supplier"] ?></td>
                                </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
    <script src="../../../js/axios.js"></script>
</html>