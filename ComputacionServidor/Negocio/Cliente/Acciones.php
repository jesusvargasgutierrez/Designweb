<?php
  try
  {
    session_start();
    require_once ("../../Negocio/Cliente/Proceso.php");

    if(isset($_POST["Persona"]) && isset($_SESSION['Tarjeta'])){
      $Proceso = new Procesar();

      $json = $_POST["Persona"];
      
      $Persona = json_decode($json, true);

      if($Persona["Accion"] == "1")
      {
        $BD = $_SESSION['Tarjeta']["Conexion"];

        $DatosPersona = $Proceso->ConsultarPersona($BD,$Persona["Persona"]);

        print_r(json_encode($DatosPersona));
      }
      else if($Persona["Accion"] == "2"){
        $BD = $_SESSION['Tarjeta']["Conexion"];

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