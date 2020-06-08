<?php  
    /*
      * Evaluamos que exista alguna variable en este caso la variable codigo
    */
    if(isset($_POST['Codigo']) ){
        $Values = "";

        /*
        * Evaluamos el arreglo asociativo para unir los campos con una ,
        */
        foreach($_POST as $propiedad=>$valor){
             $variable = $propiedad;
             $$variable = $valor;

             $Values = $Values."'".$variable."',";
             $propiedades1 = $Values."'".$$variable."',";
        }

        
        /*
        * utilizamos una funcion print para mostrar html en pantalla
        */
        print("<br/> Utilizando la funcion explode para formar una tabla de propiedad valor <br/>");

        /*
        * la funcion explode separa los datos segun un delimitador en este caso la ,
        */
        $arreglosplitvalores = explode(",", $Values);
        $arreglosplitpropiedades = explode(",", $propiedades1);

        /*
        * construccion de la tabla
        */
        $tablahtml = "<table><thead><th>Propiedad</th><th>Valor</th></thead> <tbody>";

        for ($i=0; $i < count($arreglosplitvalores); $i++) { 
          $tablahtml = $tablahtml . "<tr> <td>" . $arreglosplitpropiedades[$i]."</td>";
          $tablahtml = $tablahtml . "<td>" . $arreglosplitvalores[$i]."</td> </tr>";
        }

        $tablahtml = $tablahtml . "</tbody></table>";

        print($tablahtml);

        print("<br/> <br/><strong>Utilizando la funcion var_dump para imprimir el arreglo de valores </strong> <br/>");

        var_dump($arreglosplitpropiedades);

        print("<br/> <br/><strong>Evaluamos si el campo de fecha de ingreso un valor con la funcion strlen </strong> <br/>");

        if(strlen($_POST["DateBird"]) > 0)
        {
          echo "La funcion strlen determino que el campo date bird si tiene dato";
        }else{
          echo "La funcion strlen determino que el campo date bird no tiene dato";
        }

        /**
         * Evaluamos la fecha y la convertimos a un formato de aaaa/mm/dd
         */
        //echo vprintf("%04d-%02d-%02d", explode('/', $_POST['DateBird']))."<br/>";
    }else {
     echo "no existe";
    }
?>