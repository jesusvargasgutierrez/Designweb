<?php  
    require_once ("../Comun/Operacion.php");
    require_once ("../Comun/PeticionNegocio.php");
    require_once ("../../nusoap/lib/nusoap.php");

    session_start();
    if(isset($_SESSION['Tarjeta']) && isset($_POST["Campo1"]) ){

        $NegocioPeticion = new Peticion();
        $NegocioOperacion = new Operacion();

        $array = $_POST;

        $ValoresInsersion = "";

        $indice = 0;

        foreach($array as $key1 => $value1)
        {
          if($value1 != ""){
            $ValoresInsersion .= "'".$array["Campo".$indice]."',";
          }
          $indice = $indice+1;
        }

        $fijo = "(".trim($ValoresInsersion,",").")";

        $Persona= array (
          'BaseDatos' => $_SESSION['Tarjeta']["Conexion"],
          'values' => $fijo
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

        $Cliente = $NegocioPeticion->RealizarPeticion($Valores);

    }else {
     echo "no existe";
    }
?>