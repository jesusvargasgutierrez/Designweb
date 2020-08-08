<?php
  try
  {
    /**
     * debe existir una sesion 
     */
    session_start();
    /**
     * se agrega la clase proceso
     */
    require_once ("../../Modelo/Clientes/Clientes.php");

    if(isset($_POST["Persona"]) && isset($_SESSION['Tarjeta'])){
      $DatosCliente = new Cliente();

      /**
       * se recibe el JSON de AJAX
       */
      $json = $_POST["Persona"];
      
      /**
       * Se convierte el JSON en un arreglo
       * para su manipulacion
       */
      $Persona = json_decode($json, true);

      if($Persona["Accion"] == "1")
      {
        /**
        * accion 1 consulta el registro
       */
        $BD = $_SESSION['Tarjeta']["Conexion"];

        $Valores = array (
          'BaseDatos' => $BD,
          "Valores" => 'Persona, Codigo, Nombres, ApellidoPaterno, ApellidoMaterno, NombreCompleto, FechaNacimiento, Genero, EstadoCivil, Correo, Telefono, Estado',
          'Persona' => $Persona["Persona"]
        );
        /**
         * se envian los datos para consultar el registro
         */
        $DatosPersona = $DatosCliente->ConsultarCliente($Valores);

        /**
         * se requiere para devolver el resultado
         */
        print_r(json_encode($DatosPersona));
      }
      else if($Persona["Accion"] == "2"){
        /**
         * la accion sera eliminar
         */
        $BD = $_SESSION['Tarjeta']["Conexion"];

        $Valores = array (
          'BaseDatos' => $BD,
          'Persona' => $Persona["Persona"]
        );
        /**
         * se rescata el identificador y se envia la peticion
         */
        $DatosPersona = $DatosCliente->EliminarCliente($Valores);
      }
    }
    else
    {
      echo "no existe";
    }
  } 
  catch(Exception $Ex)
  {

  }
?>