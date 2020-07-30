<?php
class Operacion
{
    function ObtenerUrl()
    {
	  static $object = array (
      'Cliente' => 'http://localhost/Desarrollos/Designweb/ComputacionServidor/Controller/Negocio/Clientes/Clientes.php'
	   );

      return $object;
    }
    
    function ObtenerValorParametro()
    {
      static $object = array (
        'InsertarCliente' => 'EntidadCliente',
        'BuscarPersona' => 'BuscarCliente'
      );

      return $object;
    }
    
    function ObtenerValorEndpoint()
    {
      static $object = array (
        'InsertarCliente' => 'InsertarCliente',
        'BuscarPersona' => 'BuscarCliente'
      );

      return $object;
	  }
}
?>