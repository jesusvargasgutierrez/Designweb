<?php
    require_once ("../../Datos/Conexion.php");

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

                /**
                 * evalua si devolvio 
                 * datos
                 */
                if($result)
                {  
                    /**
                     * asigna los datos consultados
                     */
                $Resultado = $result->fetch_array(MYSQLI_ASSOC);
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

                /**
                 * si retorno resultadose se asignan
                 * los valores
                 */
                if($result)
                {  
                $Resultado = $result->fetch_array(MYSQLI_ASSOC);
                }
                else{
                    /**
                     * en caso contrario se
                     * retorna el siguiente mensaje
                     */
                    $Resultado = array (
                        'TipoRespuesta' => '2',
                        'TextoRespuesta' => 'Usuario o Contraseña invalidas'
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