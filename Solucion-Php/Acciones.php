<?php
	include_once('Operacion.php');

	if(isset($_POST["datos"])){

		$json = $_POST["datos"];

		$someArray = json_decode($json, true);

	    echo \Acciones\Transaccion::$Guardar;

		//$Operaciones = new Acciones();

		//echo $Operaciones->Guardar;
		
		// foreach($someArray as $key => $value) {
		//     echo "Property:".$value["name"] . ", value:" . $value["value"];
		//  }
	}
	else
	{
		echo "no existe";
	}
?>