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

        /*utilizamos print para mostrar un mensaje en html*/
        print("<br/> <br/><strong>Utilizando la funcion var_dump para imprimir el arreglo de valores </strong> <br/>");

        /*funcion para impresion de arreglo*/
        var_dump($arreglosplitpropiedades);

        print("<br/> <br/><strong>Evaluamos si el campo de fecha de ingreso un valor con la funcion strlen </strong> <br/>");

        /*Evaluacion de la fecha
        *esta funcion por el momento no tiene operatividad
        */
        if(strlen($_POST["DateBird"]) > 0)
        {
          echo "La funcion strlen determino que el campo date bird si tiene dato";
        }else{
          echo "La funcion strlen determino que el campo date bird no tiene dato";
        }

        /**
         * enviamos un mensaje en HTML para indicar que usaremos while
         */
        print("<br/> <br/><strong>Ejemplo usando while </strong> <br/>");

        //creamos dos arreglos uno que contenga alumnos y el otro calificaciones
        $Alumnos=array('AlumnoI','AlumnoII','AlumnoIII');
        $Calificaciones=array('100','90','95');

        //comenzamos la creacion de la tabla HTML
        $tablaCalificaciones = "<table><thead><th>Alumno</th><th>Calificacion</th></thead> <tbody>";

        //declaramos un indice
        $indice = 0;

        /**
         * iniciamos el while, la diferencia es que primero convertiremos cada item
         * del arreglo alumnos en una lista para ello es el lado derecho de la igualdad each ($Alumnos)
         * el lado izquierdo nos proporciona la manipulacion por propiedad valor
         */
        while (list ($key, $val) = each ($Alumnos) )
        {
          //la primera columna contendra el alumno son solo 3 iteraciones
          $tablaCalificaciones = $tablaCalificaciones . "<tr> <td>" . $val ."</td>";

          /**
           * aprovechando que el arreglo alumno y el arreglo calificaciones tienen la
           * misma dimension podemos hacer uso de la variable indice al iniciar en 0
           * e incrementara cada fin de recorrido 
          */
          $tablaCalificaciones = $tablaCalificaciones . "<td>" . $Calificaciones[$indice] ."</td> </tr>";

          //aqui esta el incremento de la variable indice cada iteracion se incrementara 1
          $indice = $indice + 1;
        }//fin del while

        /**
         * concatenamos la tabla que se construyo en el while para añadirle el fin
         * de la tabla
         */
        $tablaCalificaciones = $tablaCalificaciones . "</tbody></table>";

        //desplegamos la tabla en pantalla con print
        print($tablaCalificaciones);

        /**
         * enviamos un mensaje en HTML para indicar que usaremos do while
         */
        print("<br/> <br/><strong>Ejemplo usando do while </strong> <br/>");

        //creamos un arreglo de 5 numeros
        $numeros = array(100,50,5,20,78);

        //declaramos un indice llamado j y se inicializa en 0
        $j = 0;

        /**
         * inicia el do while, una particularidad importante del
         * do while es que el recorrido lo hace al menos una vez, es decir,
         * la condicion de si el residuo del numero del arreglo en igual a 0
         * se evaluara al final, es por esa razon que el numero 5 le concatena
         * el enunciado que es par pero obviamente no lo es, ya que al llegar
         * a la condicion termina el bucle y ya no evalua los 2 numeros restantes
         * del arreglo
         */
        do {
          
          //se pasa el valor del arreglo segun el valor del indice j
          $numero_ = $numeros[$j];

          //se concatena un enunciado y el numero
          echo "<br/> El numero: ".$numero_ . " es par";

          //se incrementa el indice j si la evaluacion se sigue cumpliendo
          $j = $j+1;

        } while (($numero_ % 2) == 0);//realiza la evaluacion de si el residuo del numero al dividirlo entre 2 es 0
    }else {
      //si la variable no existe mostrara este mensaje
     echo "no existe";
    }
?>