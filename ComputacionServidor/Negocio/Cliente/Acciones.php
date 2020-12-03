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
    require_once ("../../Negocio/Cliente/Proceso.php");

    if(isset($_POST["Persona"]) && isset($_SESSION['Tarjeta'])){
      $Proceso = new Procesar();

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

        /**
         * se envian los datos para consultar el registro
         */
        $DatosPersona = $Proceso->ConsultarPersona($BD,$Persona["Persona"]);

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

        /**
         * se rescata el identificador y se envia la peticion
         */
        $DatosPersona = $Proceso->EliminarPersona($BD,$Persona["Persona"]);
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