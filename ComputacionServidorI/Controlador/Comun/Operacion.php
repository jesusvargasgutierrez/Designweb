<?php
class Operacion
{
    function ObtenerUrl()
    {
      /**
       * funcion que retorna los enlaces
       * a los controladores creados
       */
      static $object = array (
        'Cliente' => 'http://localhost/Desarrollos/Designweb/ComputacionServidor/Controller/Negocio/Clientes/Clientes.php'
      );

      return $object;
    }
    
    function ObtenerValorParametro()
    {
      /**
       * funcion que retorna los nombres de los 
       * parametros que recibe cada controlador
       */
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
      /**
       * funcion que retorna un arreglo para
       * cada cada nombre del endpoint 
       */
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