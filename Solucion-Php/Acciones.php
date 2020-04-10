<?php
	session_start();
	include_once('Account.php');
	include_once('Cliente.php');

	if(isset($_POST["datos"])){

		$json = $_POST["datos"];

		$someArray = json_decode($json, true);

		$EntidadCliente = new Cliente();

		$DatosIngresar = new Account();

		foreach($someArray as $key => $value) {
			if ($value["name"] == "HdAction") {
				$EntidadCliente->Accion = $value["value"];
			}
		 }

		$EntidadCliente->Datos = $someArray;

		$back = $DatosIngresar->ProcedureParameters($EntidadCliente);

		echo $back;
		// $_SESSION["respuesta"] = (int)$back;

		// if (isset($_SESSION["respuesta"])) {
		// 	echo $_SESSION["respuesta"];
		// }
	}
	else
	{
		echo "no existe";
	}

	session_destroy();
?>