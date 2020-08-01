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
        'ListarPersona' => 'BuscarCliente',
        'ConsultarPersona' => 'ConsultarCliente',
        'ActualizarPersona' => 'ActualizarCliente',
        'InactivarPersona' => 'InactivarCliente',
        'EliminarPersona' => 'EliminarCliente'
      );

      return $object;
    }
    
    function ObtenerValorEndpoint()
    {
      static $object = array (
        'InsertarCliente' => 'InsertarCliente',
        'ListarPersona' => 'BuscarCliente',
        'ConsultarPersona' => 'ConsultarCliente',
        'ActualizarPersona' => 'ActualizarCliente',
        'InactivarPersona' => 'InactivarCliente',
        'EliminarPersona' => 'EliminarCliente'
      );

      return $object;
	  }
}
?>