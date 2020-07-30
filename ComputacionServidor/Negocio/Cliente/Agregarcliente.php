<?php  
    require_once ("../Comun/Operacion.php");
    require_once ("../Comun/PeticionNegocio.php");
    require_once ("../../nusoap/lib/nusoap.php");

    session_start();
    if(isset($_SESSION['Tarjeta']) && isset($_POST['Codigo']) ){

        $NegocioPeticion = new Peticion();
        $NegocioOperacion = new Operacion();

        $array = $_POST;

        $ValoresInsersion = "";

        foreach($array as $key1 => $value1)
        {
          if($value1 != ""){
            $ValoresInsersion .= "'".$value1."',";
          }
        }

        $fijo = trim($ValoresInsersion,",");
        $fijo = "(".$fijo. ","."1)";

        echo $fijo;

        $ArrayURL = $NegocioOperacion->ObtenerUrl();
        $ArrayValParametro = $NegocioOperacion->ObtenerValorParametro();
        $ArrayEndpoint = $NegocioOperacion->ObtenerValorEndpoint();

        $Valores = array(
          'BaseDatos' => $_SESSION['Tarjeta']["Conexion"],
          'Url' => $ArrayURL["Cliente"],
          'Parametro' => $ArrayValParametro["InsertarCliente"],
          'Valor' => $fijo,
          'Endpoint' => $ArrayEndpoint["InsertarCliente"]
        );

        $Cliente = $NegocioPeticion->RealizarPeticion($Valores);

    }else {
      //si la variable no existe mostrara este mensaje
     echo "no existe";
    }
?>