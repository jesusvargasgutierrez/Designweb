<?php

class Procedures
{
	function GetProcedures()
    {
	  static $object = array (
	    'GuardarCliente' => 'Cli_ins',
	    'GuardarUsuario' => 'Usu_ins',
	    'ConsultarCliente' => 'Cli_Consultar'
	   );

      return $object;
	} 
} 
?>