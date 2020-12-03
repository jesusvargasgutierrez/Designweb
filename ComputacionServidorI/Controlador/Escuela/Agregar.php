<?php  
    /**
     * importacion de la clase operacion,proceso y negocio de la peticion
     * importacion de datos
     */
    require_once ("../../Controlador/Escuela/Acciones.php");

      /**
       * se debe tener una session iniciada
       */
      session_start();
          /**
          * objetos para acceso a clase
          * heredada
          */
      $NegocioEscuela = new Acciones();

      /**
       * verificamos si al menos el campo1 
       * existe
       */
      if(isset($_SESSION['Tarjeta']) && isset($_POST["Campo1"])){
          
        /**
         * estas propiedades se heredan de la clase escuela
         * por lo tanto se pueden utilizar con la instancia de la
         * clase acciones
         */
          $NegocioEscuela->Codigo = $_POST["Campo1"];
          $NegocioEscuela->Nombre = $_POST["Campo2"];
          $NegocioEscuela->PrimerApellido = $_POST["Campo3"];
          $NegocioEscuela->SegundoApellido = $_POST["Campo4"];
          $NegocioEscuela->NombreCompleto = $_POST["Campo5"];
          $NegocioEscuela->TipoRegistro = $_POST["Campo6"];
          $NegocioEscuela->Materia = $_POST["Campo7"];
          $NegocioEscuela->Correo = $_POST["Campo8"];
          $NegocioEscuela->Telefono = $_POST["Campo9"];
          $NegocioEscuela->Estado = $_POST["Campo5"];

          /**
           * este metodo existe dentro de la clase acciones
           * y se puede utilizar con el mismo objeto
           */
          $Cliente = $NegocioEscuela->Insertar($NegocioEscuela); 
      }
    else {
     echo "Inicie sesion para ver esta interfaz.";
    }
?>