<?php
    /**
     * importacion de la clase conexion
     *
     */
    require_once ("../../Datos/Conexion.php");
    class Cliente
    {   
        /**
         * controlador que agrega una persona
         */
        function InsertarCliente($EntidadCliente){
            /**
             * objeto que retorna la conexion
             */
            $Conexion = new Conexion();

            /**
             * asigna el nombre de la base de datos 
             * a la cual se conectara
             */
            $BaseDatos = $EntidadCliente['BaseDatos'];

            /**
             * obtiene la conexion
             */
            $DatosConexion = $Conexion->ObtenerConexionBD($BaseDatos);

            /**
             * declaracion de un arreglo que sera retornado
             */
            $Resultado = array();

            /**
             * realiza la insersion en la tabla 
             * sis_persona de la base de datos especificada
             */
            $result = $DatosConexion->query("INSERT INTO sis_persona (Persona,Codigo,Nombres,ApellidoPaterno,ApellidoMaterno,NombreCompleto,FechaNacimiento,Genero,EstadoCivil,Correo,Telefono,Estado) VALUES ".$EntidadCliente['values']);

            /**
             * arreglo de salida que sera retornado
             */
            $Resultado = array (
                'TipoRespuesta' => $BaseDatos,
                'TextoRespuesta' => $DatosConexion
            );

            return $Resultado;
        }//fin del metodo de insersion

        /**
         * dicho controlador lista todos los registros en 
         * estado 1
         */
        function BuscarCliente($EntidadCliente){
            /**
             * objeto para usar los metodos relacionados con la conexion
             */
            $Conexion = new Conexion();

            /**
             * se asigna el nombre de la base de datos
             */
            $BaseDatos = $EntidadCliente['BaseDatos'];

            /**
             * se obtiene la cadena de conexion
             */
            $DatosConexion = $Conexion->ObtenerConexionBD($BaseDatos);

            /**
             * arreglo que retorna el resultado del SELECT
             */
            $Resultado = [];
            
            /**
             * consulta con SELECT los campos de la tabla 
             * sis_persona
             */

            /**
             * los campos a consultar son de forma
             * dinamica
             */
            $result = $DatosConexion->query("SELECT ". $EntidadCliente['Valores'] ." FROM sis_persona where Estado=1");

            if($result)
            {  
                /**
                 * si la consulta tiene 
                 * registros
                 */
                $posts = array();

                /**
                 * asignacion de los valores de la consulta realizada
                 * para retornarlos
                 */
                while($row = $result->fetch_array(MYSQLI_ASSOC))
                {
                    $posts[] = $row;
                }

                $Resultado = $posts;
            }
            else{
                /**
                 * si la consulta no devuelve 
                 * registros retornara el siguiente arreglo
                 */
                $Resultado = array (
                    'TipoRespuesta' => '2',
                    'TextoRespuesta' => 'No existe'
                );
            }

            return $Resultado;
        }//fin de busquedacliente

        function ConsultarCliente($EntidadCliente){
            /**
             * objeto de conexion
             * ,asignacion de la base de datos
             * uso del metodo para obtener conexion
             */
            $Conexion = new Conexion();

            $BaseDatos = $EntidadCliente['BaseDatos'];

            $DatosConexion = $Conexion->ObtenerConexionBD($BaseDatos);

            /**
             * arreglo a retornar
             */
            $Resultado = [];
            
            /**
             * selecciona los valores recibidos en estado 1 pero
             * indicandoles cual una persona
             */
            $result = $DatosConexion->query("SELECT ". $EntidadCliente['Valores'] ." FROM sis_persona where Estado=1 and Persona=".$EntidadCliente['Persona']);

            if($result)
            {  
                /**
                 * se asgina la consulta de la persona
                 * buscada
                 */
                $posts = array();
                while($row = $result->fetch_array(MYSQLI_ASSOC))
                {
                    $posts[] = $row;
                }

                $Resultado = $posts;
            }
            else{
                /**
                 * si la consulta no devuelve 
                 * registros retornara el siguiente arreglo
                 */
                $Resultado = array (
                    'TipoRespuesta' => '2',
                    'TextoRespuesta' => 'Usuario o Contraseña invalidas'
                );
            }

            return $Resultado;
        }//fin de un consultacliente

        function ActualizarCliente($EntidadCliente){
            /**
             * objeto de conexion
             * ,asignacion de la base de datos
             * uso del metodo para obtener conexion
             */
            $Conexion = new Conexion();

            $BaseDatos = $EntidadCliente['BaseDatos'];

            $DatosConexion = $Conexion->ObtenerConexionBD($BaseDatos);

            $Resultado = array();

            /**
             * sentencia para actualizar una persona
             * indicandole los campos a actualizar de forma dinamica
             */
            $result = $DatosConexion->query("UPDATE sis_persona SET ".$EntidadCliente['Valores']." WHERE Persona=".$EntidadCliente['Persona']);

            $Resultado = array (
                'TipoRespuesta' => $BaseDatos,
                'TextoRespuesta' => $DatosConexion
            );

            return $Resultado;
        }//fin de actualizacion de la persona

        function EliminarCliente($EntidadCliente){
            /**
             * objeto de conexion
             * ,asignacion de la base de datos
             * uso del metodo para obtener conexion
             */
            $Conexion = new Conexion();

            $BaseDatos = $EntidadCliente['BaseDatos'];

            $DatosConexion = $Conexion->ObtenerConexionBD($BaseDatos);

            $Resultado = array();

            /**
             * sentencia que elimina una sola persona
             */
            $result = $DatosConexion->query("DELETE FROM sis_persona WHERE Persona=".$EntidadCliente['Persona']);

            $Resultado = array (
                'TipoRespuesta' => $BaseDatos,
                'TextoRespuesta' => $DatosConexion
            );

            return $Resultado;
        }//fin del metodo de eliminar

    }
?>