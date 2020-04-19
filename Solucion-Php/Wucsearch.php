<?php
	include_once('DatosWuc.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<div class="">

		<div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12">
			<span>
             <button type="button" name="backview" id="backview" class="btn">
               <i class="fas fa-arrow-circle-left"></i>&nbsp;Back
             </button>
            </span><br/>

			<div class="table-responsive col-sm-12">		
				<table id="dt_cliente" class="table table-bordered table-hover" width="100%">
				  <?php
					  if(isset($_POST["Consulta"])){
					  	echo $_POST["Consulta"];
						//$json = $_POST["Consulta"];

						//$someArray = json_decode($json, true);

						//$EntidadCliente = new Cliente();

						$DatosWuc = new SearchWuc();

						/*foreach($someArray as $key => $value) {
							if ($value["name"] == "HdAction") {
								$EntidadCliente->Accion = $value["value"];
							}
						 }*/

						//$EntidadCliente->Datos = $someArray;

						$json = $DatosWuc->ProcedureNoParameters1();

						//print($json);

						$someArray = json_decode($json, true);

						//print_r($someArray["data"][0]);
						?>
							<tr>
						<?php
						foreach($someArray["data"][0] as $key => $value) {
						?>
							<th><?php echo $key; ?></th>
						<?php
						}
						?>
							<tr>
						<?php


						while (list($key1,$value1) = each($someArray)) {
							echo $value1;
						}


						foreach($someArray["data"][0] as $key => $value) {
						?>
							<td><?php echo $value; ?></td>
						<?php
						}
						// $_SESSION["respuesta"] = (int)$back;

						// if (isset($_SESSION["respuesta"])) {
						// 	echo $_SESSION["respuesta"];
						// }
					}
					else
					{
				 	?>
					 	<tr>
					 		<td>No hay Datos</td>
					 	</tr>
				  	<?php
					}	
				  ?>		
				</table>
			</div>			
		</div>		
	</div>	

</body>
</html>
