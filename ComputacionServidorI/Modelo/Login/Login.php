<?php
    require_once ("../../Modelo/Conexion.php");

    class Login
    {   
        function ObtenerBaseDatos($CodigoSesion){
                    /**
             * objeto para usar los metodos relacionados con la conexion
             */
            $Conexion = new Conexion();

            /**
             * se asigna el nombre de la base de datos
             */
            $DatosConexion = $Conexion->ObtenerConexion();

            $Resultado = array();

            /**
             * verifica que el codigo no este 
             * vacio
             */
            if($CodigoSesion["Valor"] != ""){        
                /**
                 * selecciona unicamente 
                 * el nombre y la conexion
                 * */    
                $result = $DatosConexion->query("SELECT Nombre,Conexion FROM operacion_conexiones where Codigo='".$CodigoSesion["Valor"]."' and idEstado=1");


                $posts = array();

                /**
                * asigna los datos consultados
                */
                while($row = $result->fetch_array(MYSQLI_ASSOC))
                {
                    $posts[] = $row;
                }

                /**
                 * evalua si devolvio 
                 * datos
                 */
                if(!empty($posts))
                {  
                    /**
                     * asigna los datos consultados
                     */
                    $Resultado = array (
                        'Response' => $posts
                    );
                    //$Resultado = $result->fetch_array(MYSQLI_ASSOC);
                }
                else{
                    /**
                     * retorna si no se encuentra un
                     * registro
                     */
                    array_push($posts, array("Mensaje" => "No existe el codigo"));

                    $Resultado = array (
                        'Response' => $posts
                    );
                }
            }
            else{
                                /**
                     * retorna si no se encuentra un
                     * registro
                     */
                $Resultado = array (
                    'Codigo' => '',
                    'Usuario' => '',
                    'Response' => 'No hay datos'
                );
            }

            return $Resultado;
        }

         /**
         * obsetener informacion del usuario 
         * que intenta iniciar sesion
         */
        function ObtenerUsuario($EntidadUsuario){
            /**
             * objeto para usar los metodos relacionados con la conexion
             */
            $Conexion = new Conexion();

            /**
             * se asigna el nombre de la base de datos
             */
            $BaseDatos = $EntidadUsuario['BaseDatos'];

            /**
             * se obtiene la cadena de conexion
             */
            $DatosConexion = $Conexion->ObtenerConexionBD($BaseDatos);

            $Resultado = array();

            if(count($EntidadUsuario) != 0){            
                /**
                 * sie el arreglo de entrada tiene al menos 1 registro
                 */

                /**
                 * consulta del la informacion colocada en el login
                * no hace falta aplicar el sha1 a la contraseña
                * debido a que ya llega aqui con el algoritmo
                */
                $result = $DatosConexion->query("SELECT * FROM operacion_usuarios where Usuario='".$EntidadUsuario['Usuario']."' AND Contrasenia='".$EntidadUsuario['Contrasenia']."' AND Estado=1");

                $posts = array();

                /**
                * asigna los datos consultados
                */
                while($row = $result->fetch_array(MYSQLI_ASSOC))
                {
                    $posts[] = $row;
                }

                /**
                 * evalua si devolvio 
                 * datos
                 */
                if(!empty($posts))
                {  
                    /**
                     * asigna los datos consultados
                     */
                    $Resultado = array (
                        'Response' => $posts
                    );
                    //$Resultado = $result->fetch_array(MYSQLI_ASSOC);
                }
                else{
                    /**
                     * retorna si no se encuentra un
                     * registro
                     */
                    array_push($posts, array("Mensaje" => "Credenciales invalidas"));

                    $Resultado = array (
                        'Response' => $posts
                    );
                }
            }
            else{
                /**
                 * arreglo a retornar si no hay un 
                 * usuario en el arreglo
                 */
                $Resultado = array (
                    'TipoRespuesta' => '2',
                    'TextoRespuesta' => 'Acceso vacio'
                );
            }
            return $Resultado;
        }
    }
?>