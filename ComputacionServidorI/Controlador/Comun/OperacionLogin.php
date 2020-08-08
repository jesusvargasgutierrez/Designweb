<?php
class Operacion
{
    function ObtenerUrl()
    {
	  static $object = array (
	    'Sesion' => 'http://localhost/Desarrollos/Designweb/ComputacionServidor/Controller/Negocio/Sesion/Sesion.php',
	    'Usuario' => 'http://localhost/Desarrollos/Designweb/ComputacionServidor/Controller/Negocio/Usuario/Usuario.php'
	   );

      return $object;
    }
    
    function ObtenerValorParametro()
    {
	  static $object = array (
	    'Sesion' => 'CodigoSesion',
	    'Usuario' => 'EntidadUsuario'
	   );

      return $object;
    }
    
    function ObtenerValorEndpoint()
    {
	  static $object = array (
	    'SesionBD' => 'ObtenerBaseDatos',
	    'Usuario' => 'ObtenerUsuario'
	   );

      return $object;
	}
}
?>