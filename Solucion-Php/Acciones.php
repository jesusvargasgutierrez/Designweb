<?php
	if(isset($_POST["datos"])){

		switch ($_POST['datos']) {
			case 'new':
				# code...
				break;
			case 'save':
				# code...
				break;
			case 'search':
				# code...
				break;
			case 'print':
				# code...
				break;
			case 'salir':
				# code...
				break;
		}

		$json = $_POST["datos"];

		$someArray = json_decode($json, true);

		foreach($someArray as $key => $value) {
		    echo "Property:".$value["name"] . ", value:" . $value["value"];
		 }
	}
	else
	{
		echo "no existe";
	}
?>