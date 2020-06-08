<?php
    if(isset($_POST["Usuario"]))
    {
        $Values = '';
        $propiedades1 = "";
        $array = $_POST;
        foreach($_POST as $propiedad=>$valor){
            $variable = $propiedad;
            $$variable = $valor;

            $Values = $Values.$propiedad.",";
            $propiedades1 = $propiedades1.$$variable.",";
        }

        print("<strong> Retirando ultima coma de cadena </strong><br/>");
        echo $propiedades1 = trim($propiedades1,",")."<br/>";

        $propiedades1 = trim($propiedades1,",");

        $Values = trim($Values,",");

        /*Evaluar la longitud de la propiedad del arreglo que tiene el nick 
        La longitud debe ser siempre mayor que 1
        */
        if(strlen($array["contrasenia"]) >= 10)
        {
            /*Si se cumple pasara a mas valicaciones */

        }else{
            /*si no se cumple es necesario desplegar un mensaje en forma de alert usando javascript*/
            print("<script type=\"text/javascript\" language=\"javascript\">alert(\"No se tiene la longitud adecuada\");</script>");
        }

        /**
         * convertimos el primer caracter en mayuscula de al contraseña
         */
        echo ucfirst($array["contrasenia"]);

        /**
         * hacemos el inverso al valor del campo contraseña
         */
        echo strrev($array["contrasenia"])."<br/>";

        /**
         * covertimos la contraseña invertida a sha1 para comparar
         */
        echo sha1(strrev($array["contrasenia"]))."<br/>";

        /**
         * convertimos todo el valor del Usuario en mayusculas
         */
        echo sha1(strtoupper($array["Usuario"]))."<br/>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>