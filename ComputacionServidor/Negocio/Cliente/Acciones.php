<?php
  try
  {
    session_start();
    require_once ("../../Negocio/Cliente/Proceso.php");

    if(isset($_POST["Persona"]) && isset($_SESSION['Tarjeta'])){
      $Proceso = new Procesar();

      $json = $_POST["Persona"];
      
      $Persona = json_decode($json, true);

      $BD = $_SESSION['Tarjeta']["Conexion"];

      $DatosPersona = $Proceso->ConsultarPersona($BD,$Persona);
  
      print_r(json_encode($DatosPersona));
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