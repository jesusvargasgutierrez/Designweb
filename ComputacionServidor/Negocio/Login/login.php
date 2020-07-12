<?php
    require_once ("../Comun/Operacion.php");
    require_once ("../Comun/Peticion.php");
    require_once ("../../nusoap/lib/nusoap.php");
    
    if(isset($_POST["Codigo"]))
    {
        $array = $_POST;
        foreach($_POST as $propiedad=>$valor){
            $variable = $propiedad;
            $$variable = $valor;
        }

        $NegocioPeticion = new Peticion();
        $NegocioOperacion = new Operacion();

        $ArrayURL = $NegocioOperacion->ObtenerUrl();
        $ArrayValParametro = $NegocioOperacion->ObtenerValorParametro();
        $ArrayEndpoint = $NegocioOperacion->ObtenerValorEndpoint();

        $Valores = array(
            'Url' => $ArrayURL["Sesion"],
            'Parametro' => $ArrayValParametro["Sesion"],
            'Valor' => sha1($array["Codigo"]),
            'Endpoint' => $ArrayEndpoint["SesionBD"]
        );
        
        $Sesion = $NegocioPeticion->RealizarPeticion($Valores);

        if(!isset($Sesion))
        {
            header('Location: ../../index.php');
        }

        $AccesoUsuario = array(
            'BaseDatos' => $Sesion["Conexion"],
            'Usuario' => sha1($array["Usuario"]),
            'Contrasenia' => sha1($array["contrasenia"])
        );

        $Valores = array(
            'Url' => $ArrayURL["Usuario"],
            'Parametro' => $ArrayValParametro["Usuario"],
            'Valor' => $AccesoUsuario,
            'Endpoint' => $ArrayEndpoint["Usuario"]
        );

        $User = $NegocioPeticion->RealizarPeticion($Valores);
        
        if(!isset($User))
        {
            header('Location: ../../index.php');
        }

        if(count($User) > 0)
        {
            if($User['idUsuario'] != 0){
                header('Location: ../../Vista/Inicio.php');
            }
        }
    }else{
        header('Location: ../../index.php');
    }

?>