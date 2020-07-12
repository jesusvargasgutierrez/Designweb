<?php
    require_once ("../../nusoap/lib/nusoap.php");
class TestSpace
{
    function Peticion($EntidadPeticion)
    {
        $cliente = new nusoap_client($EntidadPeticion['Url'],false);
    
        $parametros = array($EntidadPeticion['Parametro']=>$EntidadPeticion['Arreglo']);
    
        $respuesta = $cliente->call($EntidadPeticion['Endpoint'],$parametros);

        return $respuesta;
    }
}
?>