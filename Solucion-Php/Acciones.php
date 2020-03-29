<?php
	//include_once('Operacion.php');
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

		echo $DatosIngresar->ProcedureParameters($EntidadCliente);
	}
	else
	{
		echo "no existe";
	}
?>