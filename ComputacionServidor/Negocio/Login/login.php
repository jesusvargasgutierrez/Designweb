<?php
    include_once('Credenciales.php');

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

        $NegocioCredenciales = new Credenciales();

        $codigo = "";
        $usuario = "";
        $contrasenia = "";

        $codigo = $NegocioCredenciales->Codigo;

        $usuario = $NegocioCredenciales->Usuario;

        $contrasenia = $NegocioCredenciales->Contrasenia;

        /*Evaluar la longitud de la propiedad del arreglo que tiene el nick 
        La longitud debe ser siempre mayor que 1
        */
        if(strlen($array["Codigo"]) >= 4)
        {   
            $Codigo1 = "";
            $Usuario1 = "";
            $Contrasenia1 = "";

            /*Si se cumple pasara a mas validaciones */

            /**
             * hacemos el inverso al valor del campo Codigo
             */
            $Codigo1 = strrev($array["Codigo"])."<br/>";

            /**
             * convertimos el primer caracter en mayuscula de contraseña
             */
            $Contrasenia1 = ucfirst($array["contrasenia"]);

            /**
             *  hacemos el inverso y covertimos la contraseña invertida a sha1 para comparar
             */
            $Contrasenia1 = sha1(strrev($array["contrasenia"]))."<br/>";

            /**
             * convertimos todo el valor del Usuario en mayusculas
             */
            $Usuario1 = sha1(strtoupper($array["Usuario"]))."<br/>";

            /**
             * Evaluamos si es igual a los valores
             * si no, marcara un error de inicio de sesion
             */

             if($codigo == $Codigo1 && $Contrasenia1 == $contrasenia && $Usuario1 == $usuario)
             {
                print("<script type=\"text/javascript\" language=\"javascript\">alert(\"Credenciales validas\");</script>");
             }else{
                print($Codigo1."<br/>".$contrasenia."<br/>".$usuario."<br/>");

                echo $codigo."<br/>"; 
                echo $Contrasenia1."<br/>"; 
                echo $Usuario1;
                print("<script type=\"text/javascript\" language=\"javascript\">alert(\"Credenciales invalidas verifique\");</script>");
             }

        }else{
            /*si no se cumple es necesario desplegar un mensaje en forma de alert usando javascript*/
            print("<script type=\"text/javascript\" language=\"javascript\">alert(\"No se tiene la longitud adecuada\");</script>");
        }
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