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

		echo $_POST['datos'];
	}
	else
	{
		echo "no existe";
	}
?>