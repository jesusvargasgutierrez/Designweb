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
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Producto</th>
                        <th scope="col">codigo rapido</th>
                        <th scope="col">Precio compra</th>
                        <th scope="col">Precio empleado</th>
                        <th scope="col">Precio venta</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach(json_decode($_GET['products']) as $p){
                            ?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?php echo $p->description ?></td>
                                    <td><?php echo $p->quick_code ?></td>
                                    <td><?php echo '$'.number_format($p->sales_price, 2, '.', '') ?></td>
                                    <td><?php echo '$'.number_format($p->employed_price, 2, '.', '') ?></td>
                                    <td><?php echo '$'.number_format($p->shop_price, 2, '.', '') ?></td>
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