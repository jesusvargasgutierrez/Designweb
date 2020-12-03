<?php  
    /**
     * importacion de la clase operacion,proceso y negocio de la peticion
     * importacion de la libreria nusoap
     */
    require_once ("../Comun/Operacion.php");
    require_once ("../Comun/PeticionNegocio.php");
    require_once ("../Cliente/Proceso.php");
    require_once ("../../nusoap/lib/nusoap.php");

    /**
     * se debe tener una session iniciada
     */
    session_start();
    if(isset($_SESSION['Tarjeta']) && isset($_POST["Campo1"]) ){

        /**
         * si la tarjeta de login y al menos el campo 1 quien es
         * el identificador existen realiza lo siguiente
         */

         /**
          * objetos para la peticion
          */
        $NegocioPeticion = new Peticion();
        $NegocioOperacion = new Operacion();

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
           * arreglo con conexion y 
           * valores a insertar
           */
          $Persona= array (
            'BaseDatos' => $_SESSION['Tarjeta']["Conexion"],
            'values' => $insert
          );

          /**
           * se obtiene la URL, parametros y endpoints registrados
           */
          $ArrayURL = $NegocioOperacion->ObtenerUrl();
          $ArrayValParametro = $NegocioOperacion->ObtenerValorParametro();
          $ArrayEndpoint = $NegocioOperacion->ObtenerValorEndpoint();
          
          /**
           * arreglo de valores para la
           * peticion
           */
          $Valores = array(
            'Url' => $ArrayURL["Cliente"],
            'Parametro' => $ArrayValParametro["InsertarCliente"],
            'Valor' => $Persona,
            'Endpoint' => $ArrayEndpoint["InsertarCliente"]
          );

          /**
           * se realiza la peticion
           * al endpoint de insert
           */
          $Cliente = $NegocioPeticion->RealizarPeticion($Valores);
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
             * arreglo de entrada del controlador
             */
            $Persona= array (
              'BaseDatos' => $_SESSION['Tarjeta']["Conexion"],
              'Valores' => $Actualizacion,
              "Persona" => $array["Campo0"]
            );
            
            /**
             * llamada al controlador para
             * ejecutar la sentencia contruida
             */
            $ArrayURL = $NegocioOperacion->ObtenerUrl();
            $ArrayValParametro = $NegocioOperacion->ObtenerValorParametro();
            $ArrayEndpoint = $NegocioOperacion->ObtenerValorEndpoint();
            
            /**
             * se construye un arreglo de
             * valores que seran enviados
             */
            $Valores = array(
              'Url' => $ArrayURL["Cliente"],
              'Parametro' => $ArrayValParametro["ActualizarPersona"],
              'Valor' => $Persona,
              'Endpoint' => $ArrayEndpoint["ActualizarPersona"]
            );

            /**
             * realizar peticion de UPDATE
             */
            $Cliente = $NegocioPeticion->RealizarPeticion($Valores);
        }
        else if($_POST["HdAction"] == 3){

          /**
           * arreglo de entrada para
           * eliminar el registro
           */
          $Persona= array (
            'BaseDatos' => $_SESSION['Tarjeta']["Conexion"],
            'Valores' => "",
            "Persona" => $array["Campo0"]
          );

          /**
           * obtener parametros de consumo
           * para eliminar
           */
          $ArrayURL = $NegocioOperacion->ObtenerUrl();
          $ArrayValParametro = $NegocioOperacion->ObtenerValorParametro();
          $ArrayEndpoint = $NegocioOperacion->ObtenerValorEndpoint();

          /**
           * valores necesarios para eliminar un registro
           * 
           */
          $Valores = array(
            'Url' => $ArrayURL["Cliente"],
            'Parametro' => $ArrayValParametro["EliminarPersona"],
            'Valor' => $Persona,
            'Endpoint' => $ArrayEndpoint["EliminarPersona"]
          );

          /**
           * peticion de eliminar
           */
          $Cliente = $NegocioPeticion->RealizarPeticion($Valores);
      }
    }else {
     echo "no existe";
    }
?>