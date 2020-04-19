<?php
	include_once('DatosWuc.php');
	include_once('PropertyWuc.php');
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

					  	//falta variable POST Tarjeta

						$EntidadWuc = new PropertyWuc();

						$DatosWuc = new SearchWuc();

						$EntidadWuc->Accion = $_POST["Consulta"];

						$json = $DatosWuc->ProcedureNoParameters($EntidadWuc);

						$someArray = json_decode($json, true);

						?>
							<tr>
								<th>Select</th>
						<?php
						foreach($someArray["data"][0] as $key => $value) {
						?>
							<th><?php echo $key; ?></th>
						<?php
						}
						?>
							<tr>
						<?php

						for ($i=0; $i < count($someArray["data"]); $i++) { 
							?>
								<tr>
									<td><a href="">Select</a></td>
							<?php
							foreach($someArray["data"][$i] as $key => $value) {
								?>
									<td><?php echo $value; ?></td>
								<?php
							}

							?>
								</tr>
							<?php
					    }
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
