<?php
require_once('../../vendor/autoload.php');
require_once('../../conexion.php');
require_once('../../models/products.php');

    $products = products::all();

    header("Location: ../../views/products/list.php");
?>