<?php  
    /**
     * importacion de la clase operacion,proceso y negocio de la peticion
     * importacion de datos
     */
    require_once ("../../Modelo/Clientes/Clientes.php");

    /**
     * se debe tener una session iniciada
     */
    session_start();
          /**
          * objetos para acceso a datos
          */
    $DatosCliente = new Cliente();
    if(isset($_SESSION['Tarjeta']) && isset($_POST["Campo1"]) ){

        /**
         * si la tarjeta de login y al menos el campo 1 quien es
         * el identificador existen realiza lo siguiente
         */

        $array = $_POST;

        $indice = 0;

        /**
         * si la accion es 1 insertara
         */
        if($_POST["HdAction"] == 1)
        {
          $ValoresInsersion = "";

          /**
           * recorrer los valores excluyendo el valor
           * de la accion
           */
          foreach($array as $key1 => $value1)
          {
            if($key1 == "HdAction"){continue;}
            if($value1 != ""){
              $ValoresInsersion .= "'".$array["Campo".$indice]."',";
            }
            $indice = $indice+1;
          }

          /**
           * el 0 al inicio es el identificador de la persona
           * no se inserta por que el campo es autoincremental
           * pero debe ir, 
           */
          $insert = "(0,".trim($ValoresInsersion,",").")";
          
          /**
           * arreglo de valores para la
           * peticion
           */
          $Valores = array(
            'BaseDatos' => $_SESSION['Tarjeta']["Conexion"],
            'values' => $insert
          );

          /**
           * se realiza la peticion
           * al endpoint de insert
           */
          $Cliente = $DatosCliente->InsertarCliente($Valores);
        }
        else if($_POST["HdAction"] == 2){
            /**
             * accion de actualizar un registro
             */
            $ValoresUpdate = "";

            /**
             * se requiere un arreglo para los nombres de las
             * columnas dicho arreglo tiene una posicion al inicio
             * para el identificador y una al final para el 
             * campo hidden field
             */
            $Columnas = array("0","Codigo","Nombres","ApellidoPaterno","ApellidoMaterno","NombreCompleto","FechaNacimiento","Genero","EstadoCivil","Correo","Telefono","Estado",".");
          
            foreach($array as $key1 => $value1)
            {
              /**
               * si el campo es la accion 
               * omitir y seguir iterando
               */
              if($key1 == "HdAction"){continue;}

              /**
               * se evalua si el campo es diferente a vacio 
               * y a 0 para los campos de multiples opciones
               */
              if($value1 != "" && $indice != 0){
                /**
                 * construccion de la sentencia UPDATE
                 */
                $ValoresUpdate .= $Columnas[$indice]."='".$array["Campo".$indice]."',";
              }
              /**
               * indice que contiene la posicion
               * del arreglo
               */
              $indice = $indice+1;
            }

            /**
             * al iterar, al final sobra una , de la
             * sentencia se retira con trim
             */
            $Actualizacion = trim($ValoresUpdate,",");          
            
            /**
             * se construye un arreglo de
             * valores que seran enviados
             */
            $Valores = array(
              'BaseDatos' => $_SESSION['Tarjeta']["Conexion"],
              'Valores' => $Actualizacion,
              "Persona" => $array["Campo0"]
            );

            /**
             * realizar peticion de UPDATE
             */
            $Cliente = $DatosCliente->ActualizarCliente($Valores);
        }
        else if($_POST["HdAction"] == 3){

          /**
           * valores necesarios para eliminar un registro
           * 
           */
          $Valores = array(
            'BaseDatos' => $_SESSION['Tarjeta']["Conexion"],
            "Persona" => $array["Campo0"]
          );

          /**
           * peticion de eliminar
           */
          $Cliente = $DatosCliente->EliminarCliente($Valores);
        }

        /**
         * se construira una tabla solamente 
         * cuando se inserte o modifique un registro
         */
        if($_POST["HdAction"] != 3)
        {
            $accion = $_POST["HdAction"];
            /**
             * Realizamos una tabla con la modificacion
             * de la persona
             */
            $indice = 0;
            ?>
                <style>
                  table, th, td {
                    border: 1px solid black;
                    text-align: center;
                  }
                  table {
                    border-collapse: collapse;
                  }
                </style>
                <table>
                    <thead>
                        <tr>
                          <!-- el if ternario hace una condicion para colocar un titulo en la tabla especificando 
                          que accion se realizo -->
                          <td colspan="11"><?php echo ($accion == 1 ? "Insersion de la persona: ".$array["Campo5"] :"Actualizacion de la persona No:")." ".$array["Campo".$indice]; ?></td>
                        </tr>
                        <tr>
                          <th scope="col">Codigo</th>
                          <th scope="col">Nombres</th>
                          <th scope="col">Apellido Paterno</th>
                          <th scope="col">Apellido Materno</th>
                          <th scope="col">Nombre Completo</th>
                          <th scope="col">Fecha Nacimiento</th>
                          <th scope="col">Genero</th>
                          <th scope="col">EstadoCivil</th>
                          <th scope="col">Correo</th>
                          <th scope="col">Telefono</th>
                          <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <!-- 
                            * se asigna cada campo a un td
                            * el if ternario funciona para determinar
                            * el valor del catalogo y no desplegar numeros
                           -->
                          <td><?php echo $array["Campo1"]; ?></td>
                          <td><?php echo $array["Campo2"]; ?></td>
                          <td><?php echo $array["Campo3"]; ?></td>
                          <td><?php echo $array["Campo4"]; ?></td>
                          <td><?php echo $array["Campo5"]; ?></td>
                          <td><?php echo $array["Campo6"]; ?></td>
                          <td><?php echo ($array["Campo7"] == 1 ? "Hombre":"Mujer"); ?></td>
                          <td><?php echo ($array["Campo8"] == 1 ? "Soltero":"Casado"); ?></td>
                          <td><?php echo $array["Campo9"]; ?></td>
                          <td><?php echo $array["Campo10"]; ?></td>
                          <td><?php echo ($array["Campo11"] == 1 ? "Activo":"Inactivo"); ?></td>
                        </tr>
                    <tbody>
                </table>
          <?php
        }
    }else {
     echo "Inicie sesion para ver esta interfaz.";
    }
?>