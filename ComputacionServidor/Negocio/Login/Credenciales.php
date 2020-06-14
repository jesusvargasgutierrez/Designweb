<?php
        /**
         * declaracion de clase
         * existe una funcion la cual retorta un arreglo
         * de clave valor para credenciales, por el 
         * momento estaticas
         */
    class Credenciales
    {   
        /**
         * Arreglo de credenciales
         * la modificacion del contenido de los valores
         * del arreglo influyen en el ininicio de sesion
         */
        function ObtenerCredenciales()
        {
          static $object = array (
            'Codigo' => 'Pweb',
            'Usuario' => 'ADMIN1',
            'Contrasenia' => 'Pweb1*'
           );
    
          return $object;
        } 
    }
?>