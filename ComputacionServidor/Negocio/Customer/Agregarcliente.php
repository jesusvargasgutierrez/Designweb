<?php  
    if(isset($_POST['Codigo']) ){
        foreach($_POST as $propiedad=>$valor){
             $variable = $propiedad;
             $$variable = $valor;

             $Values = $Values."'".$variable."',";
             $propiedades1 = $Values."'".$$variable."',";
        }

        print("<br/> Utilizando la funcion split para formar una tabla de propiedad valor <br/>");
        $arreglosplitvalores = split(",", $Values);
        $arreglosplitpropiedades = split(",", $propiedades1);

        $tablahtml = "<table><thead><th>Propiedad</th><th>Valor</th></thead> <tbody>";

        for ($i=0; $i <count($arreglosplitvalores); $i++) { 
          $tablahtml = $tablahtml . "<tr> <td>" . $arreglosplitpropiedades[$i]."</td>";
          $tablahtml = $tablahtml . "<td>" . $arreglosplitvalores[$i]."</td> </tr>";
        }

        $tablahtml = $tablahtml . "</tbody></table>";

        print($tablahtml);



        print("<br/> Utilizando la funcion var_dump para imprimir el arreglo de valores <br/>");

        var_dump($arreglosplitpropiedades);


        $cliente = new clientes();
        $cliente->Procesamiento($Values);
    }else {
     echo "no existe";
    }

    class clientes {
      function Procesamiento($Entrada){
        //echo $Entrada;
      }
   }
?>