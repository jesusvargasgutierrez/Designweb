<?php
	include_once('classOptionType.php');

	if(isset($_POST["respuestas"])){

		$json = $_POST["respuestas"];

		$someArray = json_decode($json);

		$Cantidad = $someArray->{'Numbercontrols'};

		$Tipopregunta = $someArray->{'DDValue'};

		$OptionType = new classOptionType();

		$string1 = "";

		if ($Cantidad == "1") {
			 $string1 = $OptionType->OptionMultiple($Cantidad);
		}
		elseif ($Cantidad == "2") {
			$string1 = $OptionType->OptionFillField($Cantidad);
		}

		if (is_numeric($Cantidad)) {
				switch ($Cantidad) {
					case '1':
						$string1; 
					break;
					case '2':
						$string1; 
					break;
				}
		}
		else
		{
			echo "Does not a number!";
		}
	}




?>