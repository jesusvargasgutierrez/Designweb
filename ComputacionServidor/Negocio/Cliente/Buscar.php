<?php  
    require_once ("../../Negocio/Comun/Operacion.php");
    require_once ("../../Negocio/Comun/PeticionNegocio.php");
    require_once ("../../nusoap/lib/nusoap.php");
class Buscar
{
  public function ListarPersona($Datos){
    $NegocioPeticion = new Peticion();
    $NegocioOperacion = new Operacion();

    $ArrayURL = $NegocioOperacion->ObtenerUrl();
    $ArrayValParametro = $NegocioOperacion->ObtenerValorParametro();
    $ArrayEndpoint = $NegocioOperacion->ObtenerValorEndpoint();

    $Parametros = array (
        'BaseDatos' => $Datos,
        'Valores' => 'Persona, Codigo, Nombres, ApellidoPaterno, ApellidoMaterno, NombreCompleto, FechaNacimiento, Genero, EstadoCivil, Correo, Telefono, Estado'
    );
    
    $Valores = array(
        'Url' => "http://localhost/Desarrollos/Designweb/ComputacionServidor/Controller/Negocio/Clientes/Clientes.php",
        'Parametro' => "BuscarCliente",
        'Valor' => $Parametros,
        'Endpoint' => 'BuscarCliente'
      );

    $Cliente = $NegocioPeticion->RealizarPeticion($Valores);
    
    return $Cliente;
  }
}
?>