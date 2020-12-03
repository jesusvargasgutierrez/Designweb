<?php  
    require_once ("../../Negocio/Comun/Operacion.php");
    require_once ("../../Negocio/Comun/PeticionNegocio.php");
    require_once ("../../nusoap/lib/nusoap.php");
class Procesar
{
  /**
   * envia peticiones para listas
   * todos los registros
   */
  public function ListarPersona($Datos){
    $NegocioPeticion = new Peticion();
    $NegocioOperacion = new Operacion();

              /**
           * se obtiene la URL, parametros y endpoints registrados
           */
    $ArrayURL = $NegocioOperacion->ObtenerUrl();
    $ArrayValParametro = $NegocioOperacion->ObtenerValorParametro();
    $ArrayEndpoint = $NegocioOperacion->ObtenerValorEndpoint();

              /**
           * arreglo de valores para la
           * peticion
           */
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

                /**
           * se realiza la peticion
           * al endpoint de insert
           */
    $Cliente = $NegocioPeticion->RealizarPeticion($Valores);
    
    return $Cliente;
  }

  /**
   * envia peticiones para consultar 
   * un registro unico
   */
  public function ConsultarPersona($Datos,$persona){
    $NegocioPeticion = new Peticion();
    $NegocioOperacion = new Operacion();

                  /**
           * se obtiene la URL, parametros y endpoints registrados
           */
    $ArrayURL = $NegocioOperacion->ObtenerUrl();
    $ArrayValParametro = $NegocioOperacion->ObtenerValorParametro();
    $ArrayEndpoint = $NegocioOperacion->ObtenerValorEndpoint();

                  /**
           * arreglo de valores para la
           * peticion
           */
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

                      /**
           * se realiza la peticion
           * al endpoint de insert
           */
    $Cliente = $NegocioPeticion->RealizarPeticion($Valores);
    
    return $Cliente;
  }

    /**
   * envia peticiones para actualizar 
   * un registro unico
   */
  public function ActualizarPersona($Datos){
    $NegocioPeticion = new Peticion();
    $NegocioOperacion = new Operacion();

    
          /**
           * se obtiene la URL, parametros y endpoints registrados
           */
    $ArrayURL = $NegocioOperacion->ObtenerUrl();
    $ArrayValParametro = $NegocioOperacion->ObtenerValorParametro();
    $ArrayEndpoint = $NegocioOperacion->ObtenerValorEndpoint();

                      /**
           * arreglo de valores para la
           * peticion
           */
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

                            /**
           * se realiza la peticion
           * al endpoint de insert
           */
    $Cliente = $NegocioPeticion->RealizarPeticion($Valores);
    
    return $Cliente;
  }

    /**
   * envia peticiones para eliminar 
   * un registro unico
   */
  public function EliminarPersona($Datos,$persona){
    $NegocioPeticion = new Peticion();
    $NegocioOperacion = new Operacion();

              /**
           * se obtiene la URL, parametros y endpoints registrados
           */
    $ArrayURL = $NegocioOperacion->ObtenerUrl();
    $ArrayValParametro = $NegocioOperacion->ObtenerValorParametro();
    $ArrayEndpoint = $NegocioOperacion->ObtenerValorEndpoint();

                          /**
           * arreglo de valores para la
           * peticion
           */
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

                            /**
           * se realiza la peticion
           * al endpoint de insert
           */
    $Cliente = $NegocioPeticion->RealizarPeticion($Valores);
    
    return $Cliente;
  }
}
?>