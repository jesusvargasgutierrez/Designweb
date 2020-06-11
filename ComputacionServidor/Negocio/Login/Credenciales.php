<?php
    class Credenciales
    {   
        /**
         * Arreglo de credenciales
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