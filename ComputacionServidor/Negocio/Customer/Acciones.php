<?php
try
{
	session_start();
	include_once('../../Datos/Customer/Customer.php');
	include_once('../../views/Customer/Base.php');

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
	}
	else
	{
		echo "no existe";
	}

	session_destroy();

} catch(Exception $Ex)
{
	echo $Ex->getMessage();
}
?>