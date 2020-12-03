<?php
class classOptionType
{
	function OptionMultiple($Cantidad1)
	{
		for ($i=0; $i < $Cantidad1; $i++) { 
			?>
				<div class="form-check disable mt-3">
				           <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
				           <label class="form-check-label" for="exampleRadios1">
				              Edit this for write text of answer
				            </label>
				         </div>
			<?php
		}		         
	}

	function OptionFillField($Cantidad1)
	{
		for ($i=0; $i < $Cantidad1; $i++) { 
			?>
                        <div class="d-flex flex-column mt-3 flex-lg-row align-items-lg-center">
                            <div class="flex-fill my-1 mx-1">
                                <label class="col-form-label">Edit this for write text of answer</label>
                            </div>
                            <div class="flex-fill my-1 mx-1">
                                <input type="text" class="form-control" />
                            </div>
                            <div class="flex-fill my-1 mx-1">
                                <label class="col-form-label">Edit this for write text of answer</label>
                            </div>
                        </div>
			<?php
		}		         
	}

	function OptionMultiple1($Cantidad1)
	{
		$div = "					  <div class=\"form-check mt-3\">
				           <input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios1\" value=\"option1\">
				           <label class=\"form-check-label\" for=\"exampleRadios1\">
				              Edit this for write text of answer
				            </label>
				         </div>";

		echo $div;		         
	}
}

?>