<?php
    /**
     * se agrega el modelo escuela
     * se agrega la clase de propiedades a heredar
     */
    require_once ("../../Controlador/Escuela/Propiedades.php");
    require_once ("../../Modelo/Escuela/Escuela.php");

    /**
     * con extends se realiza la herencia de todas
     * las propiedades
     */
    class Acciones extends Propiedades
    {
      public function Insertar($Propiedades)
      {
        /**
         * se crea el objeto del modelo
         * escuela
         */
        $DatosEscuela = new Escuela();

        $BD = $_SESSION['Tarjeta']["Conexion"];
        
        /**
         * enviamos la peticion a datos 
         * enviandole la base de datos y la entidad
         */
        $DatosPersona = $DatosEscuela->InsertarRegistro($BD,$Propiedades);
      }
    }
?>