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
            $Codigo1 = strrev($array["Codigo"]);

            /**
             *  hacemos el inverso y covertimos la contraseña invertida a sha1 para comparar
             */
            $Contrasenia1 = sha1(strrev($array["contrasenia"]));

            /**
             * convertimos todo el valor del Usuario en mayusculas
             */
            $Usuario1 = strtolower($array["Usuario"]);
            $Usuario1 = sha1(strtoupper($Usuario1));

            /**
             * Asignamos las credenciales
             * rescatando los valores del array
             */
            $ArrayCredenciales = $NegocioCredenciales->ObtenerCredenciales();

            $Codigo = $ArrayCredenciales["Codigo"];

            $contrasenia = $ArrayCredenciales["Contrasenia"];

            $usuario = $ArrayCredenciales["Usuario"];

            /**
             * Evaluamos si es igual a los valores
             * si no, marcara un error de inicio de sesion
             */
            
             if( ($Codigo1 == strrev($Codigo)) and ($Contrasenia1 == sha1(strrev($contrasenia))) and  $Usuario1 == sha1(strtoupper($usuario)))
             {
                header('Location: ../../Vista/Inicio.php');
             }else{
                print("<script type=\"text/javascript\" language=\"javascript\">alert(\"Credenciales invalidas verifique\");</script>");

                print("<script type=\"text/javascript\" language=\"javascript\">location.href =\"../../Vista/login/Login.php\";</script>");
             }

        }else{
            /*si no se cumple es necesario desplegar un mensaje en forma de alert usando javascript*/
            print("<script type=\"text/javascript\" language=\"javascript\">alert(\"Credenciales invalidas verifique\");</script>");

            print("<script type=\"text/javascript\" language=\"javascript\">location.href =\"../../Vista/login/Login.php\";</script>");
        }
    }

?>