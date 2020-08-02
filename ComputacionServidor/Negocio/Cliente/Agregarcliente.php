<?php  
    require_once ("../Comun/Operacion.php");
    require_once ("../Comun/PeticionNegocio.php");
    require_once ("../Cliente/Proceso.php");
    require_once ("../../nusoap/lib/nusoap.php");

    session_start();
    if(isset($_SESSION['Tarjeta']) && isset($_POST["Campo1"]) ){

        $NegocioPeticion = new Peticion();
        $NegocioOperacion = new Operacion();

        $array = $_POST;

        $indice = 0;

        if($_POST["HdAction"] == 1)
        {
          $ValoresInsersion = "";

          foreach($array as $key1 => $value1)
          {
            if($key1 == "HdAction"){continue;}
            if($value1 != ""){
              $ValoresInsersion .= "'".$array["Campo".$indice]."',";
            }
            $indice = $indice+1;
          }

          $insert = "(0,".trim($ValoresInsersion,",").")";

          $Persona= array (
            'BaseDatos' => $_SESSION['Tarjeta']["Conexion"],
            'values' => $insert
          );

          $ArrayURL = $NegocioOperacion->ObtenerUrl();
          $ArrayValParametro = $NegocioOperacion->ObtenerValorParametro();
          $ArrayEndpoint = $NegocioOperacion->ObtenerValorEndpoint();

          $Valores = array(
            'Url' => $ArrayURL["Cliente"],
            'Parametro' => $ArrayValParametro["InsertarCliente"],
            'Valor' => $Persona,
            'Endpoint' => $ArrayEndpoint["InsertarCliente"]
          );

          //print_r($Valores);
          $Cliente = $NegocioPeticion->RealizarPeticion($Valores);
        }
        else if($_POST["HdAction"] == 2){
            $ValoresUpdate = "";

            $Columnas = array("0","Codigo","Nombres","ApellidoPaterno","ApellidoMaterno","NombreCompleto","FechaNacimiento","Genero","EstadoCivil","Correo","Telefono","Estado",".");

            foreach($array as $key1 => $value1)
            {
              if($key1 == "HdAction"){continue;}

              if($value1 != "" && $indice != 0){
                $ValoresUpdate .= $Columnas[$indice]."='".$array["Campo".$indice]."',";
              }
              $indice = $indice+1;
            }

            $Actualizacion = trim($ValoresUpdate,",");

            $Persona= array (
              'BaseDatos' => $_SESSION['Tarjeta']["Conexion"],
              'Valores' => $Actualizacion,
              "Persona" => $array["Campo0"]
            );
  
            $ArrayURL = $NegocioOperacion->ObtenerUrl();
            $ArrayValParametro = $NegocioOperacion->ObtenerValorParametro();
            $ArrayEndpoint = $NegocioOperacion->ObtenerValorEndpoint();
  
            $Valores = array(
              'Url' => $ArrayURL["Cliente"],
              'Parametro' => $ArrayValParametro["ActualizarPersona"],
              'Valor' => $Persona,
              'Endpoint' => $ArrayEndpoint["ActualizarPersona"]
            );

            $Cliente = $NegocioPeticion->RealizarPeticion($Valores);
        }
        else if($_POST["HdAction"] == 3){
          $Persona= array (
            'BaseDatos' => $_SESSION['Tarjeta']["Conexion"],
            'Valores' => "",
            "Persona" => $array["Campo0"]
          );

          $ArrayURL = $NegocioOperacion->ObtenerUrl();
          $ArrayValParametro = $NegocioOperacion->ObtenerValorParametro();
          $ArrayEndpoint = $NegocioOperacion->ObtenerValorEndpoint();

          $Valores = array(
            'Url' => $ArrayURL["Cliente"],
            'Parametro' => $ArrayValParametro["EliminarPersona"],
            'Valor' => $Persona,
            'Endpoint' => $ArrayEndpoint["EliminarPersona"]
          );

          $Cliente = $NegocioPeticion->RealizarPeticion($Valores);
      }
    }else {
     echo "no existe";
    }
?>