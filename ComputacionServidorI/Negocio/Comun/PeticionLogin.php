<?php
    require_once ("../../nusoap/lib/nusoap.php");
class Peticion
{
    function RealizarPeticion($EntidadPeticion)
    {
        $cliente = new nusoap_client($EntidadPeticion['Url'],false);
    
        $parametros = array($EntidadPeticion['Parametro']=>$EntidadPeticion['Valor']);
    
        $respuesta = $cliente->call($EntidadPeticion['Endpoint'],$parametros);

        return $respuesta;
    }
}
?>