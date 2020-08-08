<?php
    /**
     * uso de la libreria nusoap
     */
    require_once ("../nusoap/lib/nusoap.php");
class Peticion
{   
    /**
     * funcion que realiza la peticion
     * alguna modficacion a esta funcion 
     * puede causar problemas en toda la
     * aplicacion
     */
    function RealizarPeticion($EntidadPeticion)
    {   
        /**
         * se asigna la URL
         */
        $cliente = new nusoap_client($EntidadPeticion['Url'],false);
        
        /**
         * se asigna el arreglo
         */
        $parametros = array($EntidadPeticion['Parametro']=>$EntidadPeticion['Valor']);
        
        /**
         * se hace la llamada y se obtiene la
         * respuesta
         */
        $respuesta = $cliente->call($EntidadPeticion['Endpoint'],$parametros);

        /**
         * retorno de la respuesta
         */
        return $respuesta;
    }
}
?>