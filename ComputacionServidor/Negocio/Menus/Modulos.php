<?php
    require_once ("../Negocio/Comun/Operacion.php");
    require_once ("../Negocio/Comun/Peticion.php");
    require_once ("../nusoap/lib/nusoap.php");
class Modulos
{
    function ObtenerModulos()
    {
        $NegocioPeticion = new Peticion();
        $NegocioOperacion = new Operacion();
        
        $ArrayURL = $NegocioOperacion->ObtenerUrl();
        $ArrayValParametro = $NegocioOperacion->ObtenerValorParametro();
        $ArrayEndpoint = $NegocioOperacion->ObtenerValorEndpoint();

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