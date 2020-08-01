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
        'Parametro' => $ArrayValParametro["ListarPersona"],
        'Valor' => $Parametros,
        'Endpoint' => $ArrayEndpoint["ListarPersona"]
      );

    $Cliente = $NegocioPeticion->RealizarPeticion($Valores);
    
    return $Cliente;
  }

  public function ConsultarPersona($Datos,$persona){
    $NegocioPeticion = new Peticion();
    $NegocioOperacion = new Operacion();

    $ArrayURL = $NegocioOperacion->ObtenerUrl();
    $ArrayValParametro = $NegocioOperacion->ObtenerValorParametro();
    $ArrayEndpoint = $NegocioOperacion->ObtenerValorEndpoint();

    $Parametros = array (
        'BaseDatos' => $Datos,
        'Valores' => "Persona, Codigo, Nombres, ApellidoPaterno, ApellidoMaterno, NombreCompleto, FechaNacimiento, Genero, EstadoCivil, Correo, Telefono, Estado",
        'Persona' => $persona
    );
    
    $Valores = array(
        'Url' => "http://localhost/Desarrollos/Designweb/ComputacionServidor/Controller/Negocio/Clientes/Clientes.php",
        'Parametro' => $ArrayValParametro["ConsultarPersona"],
        'Valor' => $Parametros,
        'Endpoint' => $ArrayEndpoint["ConsultarPersona"]
      );

    $Cliente = $NegocioPeticion->RealizarPeticion($Valores);
    
    return $Cliente;
  }

  public function ActualizarPersona($Datos){
    $NegocioPeticion = new Peticion();
    $NegocioOperacion = new Operacion();

    $ArrayURL = $NegocioOperacion->ObtenerUrl();
    $ArrayValParametro = $NegocioOperacion->ObtenerValorParametro();
    $ArrayEndpoint = $NegocioOperacion->ObtenerValorEndpoint();

    $Parametros = array (
        'BaseDatos' => $Datos,
        'Valores' => "Estado = 2",
        'Persona' => "4"
    );
    
    $Valores = array(
        'Url' => "http://localhost/Desarrollos/Designweb/ComputacionServidor/Controller/Negocio/Clientes/Clientes.php",
        'Parametro' => $ArrayValParametro["ActualizarPersona"],
        'Valor' => $Parametros,
        'Endpoint' => $ArrayEndpoint["ActualizarPersona"]
      );

    $Cliente = $NegocioPeticion->RealizarPeticion($Valores);
    
    return $Cliente;
  }

  public function EliminarPersona($Datos,$persona){
    $NegocioPeticion = new Peticion();
    $NegocioOperacion = new Operacion();

    $ArrayURL = $NegocioOperacion->ObtenerUrl();
    $ArrayValParametro = $NegocioOperacion->ObtenerValorParametro();
    $ArrayEndpoint = $NegocioOperacion->ObtenerValorEndpoint();

    $Parametros = array (
        'BaseDatos' => $Datos,
        'Valores' => "",
        'Persona' => $persona
    );
    
    $Valores = array(
        'Url' => "http://localhost/Desarrollos/Designweb/ComputacionServidor/Controller/Negocio/Clientes/Clientes.php",
        'Parametro' => $ArrayValParametro["EliminarPersona"],
        'Valor' => $Parametros,
        'Endpoint' => $ArrayEndpoint["EliminarPersona"]
      );

    $Cliente = $NegocioPeticion->RealizarPeticion($Valores);
    
    return $Cliente;
  }
}
?>