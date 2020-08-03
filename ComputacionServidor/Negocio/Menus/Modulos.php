<?php
    /**
     * importacion de la clase operacion y peticion
     * importacion de la libreria nusoap
     */
    require_once ("../Negocio/Comun/Operacion.php");
    require_once ("../Negocio/Comun/Peticion.php");
    require_once ("../nusoap/lib/nusoap.php");
class Modulos
{
    function ObtenerModulos()
    {
        /**
         * objetos para realizar la peticion
         */
        $NegocioPeticion = new Peticion();
        $NegocioOperacion = new Operacion();
        
        /**
         * se obtiene la URL, parametros y endpoints registrados
         */
        $ArrayURL = $NegocioOperacion->ObtenerUrl();
        $ArrayValParametro = $NegocioOperacion->ObtenerValorParametro();
        $ArrayEndpoint = $NegocioOperacion->ObtenerValorEndpoint();

        /**
         * se construye el arreglo
         * para realizar la peticion
         */
        $Valores = array(
            'BaseDatos' => 'pwebservidor',
            'Url' => 'http://localhost/Desarrollos/Designweb/ComputacionServidor/Controller/Negocio/Menus/Modulos.php',
            'Parametro' => "EntidadModulo",
            'Valor' => "pwebservidor",
            'Endpoint' => 'ObtenerModulos'
        );

        $Modulos = $NegocioPeticion->RealizarPeticion($Valores);

        return $Modulos;
    }
}
?>