<?php
	include_once('../../Negocio/Test/OptionType.php');

	if(isset($_POST["respuestas"])){

		$json = $_POST["respuestas"];

		$someArray = json_decode($json);

		$Cantidad = $someArray->{'Numbercontrols'};

		$Tipopregunta = $someArray->{'DDValue'};

		$OptionType = new classOptionType();

		$string1 = "";

		if ($Tipopregunta == "1") {
			 $string1 = $OptionType->OptionMultiple($Cantidad);
		}
		elseif ($Tipopregunta == "2") {
			$string1 = $OptionType->OptionFillField($Cantidad);
		}

		if (is_numeric($Tipopregunta)) {
				switch ($Tipopregunta) {
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