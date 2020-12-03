<?php
    /**
     * importacion de la clase conexion
     *
     */
    require_once ("../../Modelo/Conexion.php");
    class Escuela
    {   
        /**
         * controlador que agrega un registro
         */
        function InsertarRegistro($BD,$PropiedadesRegistro){
            /**
             * objeto que retorna la conexion
             */
            $Conexion = new Conexion();

            /**
             * obtiene la conexion
             */
            $DatosConexion = $Conexion->ObtenerConexionBD($BD);

            /**
             * declaracion de un arreglo que sera retornado
             */
            $Resultado = array();

            /**
             * realiza la insersion en la tabla 
             * sis_personal de la base de datos especificada
             */
            $result = $DatosConexion->query("INSERT INTO sis_personal (Persona,Codigo,Nombres,PrimerApellido,SegundoApellido,NombreCompleto,TipoRegistro,Materia,Correo,Telefono,Estado) VALUES ("."0,'".$PropiedadesRegistro->Codigo."','".$PropiedadesRegistro->Nombre."','".$PropiedadesRegistro->PrimerApellido."','".$PropiedadesRegistro->SegundoApellido."','".$PropiedadesRegistro->NombreCompleto."','".$PropiedadesRegistro->TipoRegistro."','".$PropiedadesRegistro->Materia."','".$PropiedadesRegistro->Correo."','".$PropiedadesRegistro->Telefono."','".$PropiedadesRegistro->Estado."')");
            /**
             * arreglo de salida que sera retornado
             */
            $Resultado = array (
                'TipoRespuesta' => "Insesion",
                'TextoRespuesta' => "Registro Insertado"
            );

            return $Resultado;
        }//fin del metodo de insersion
    }
?>