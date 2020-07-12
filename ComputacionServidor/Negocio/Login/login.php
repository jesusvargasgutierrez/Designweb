<?php
    if(isset($_POST["Codigo"]))
    {
        $array = $_POST;
        foreach($_POST as $propiedad=>$valor){
            $variable = $propiedad;
            $$variable = $valor;
        }

        require_once ("../../nusoap/lib/nusoap.php");

        $cliente = new nusoap_client("http://localhost/Desarrollos/Designweb/ComputacionServidor/Controller/Negocio/Sesion/Sesion.php",false);
          
        $parametros = array("CodigoSesion"=>sha1($array["Codigo"]));
    
        $Sesion = $cliente->call("ObtenerBaseDatos",$parametros);

        print_r($Sesion);
    }else{
        //header('Location: ../../index.php');
    }

?>