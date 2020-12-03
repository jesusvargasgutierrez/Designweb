<?php
    /**
     * importacion de la clase conexion
     * importacion de la libreria nusoap
     */
    require_once ("../../Datos/Conexion.php");
    require_once ("../../../nusoap/lib/nusoap.php");

    /**
     * creacion del objeto para el uso de nusoap
     * se crea un WSDL llamado ObtenerUsuario
     */
    $server = new soap_server();
    $namespace = "urn:ObtenerUsuariowsdl";
    $server->configureWSDL('ObtenerUsuario', $namespace);
    $server->schemaTargetNamespace = $namespace;

    /**
     * se registra un nuevo controlador llamado ObtenerUsuario
     * recibe un arreglo llamado 
     * EntidadUsuario y retornara un arreglo 
     */
    $server->register("ObtenerUsuario",array('EntidadUsuario' => 'xsd:Array'),array('return' => 'xsd:Array'),$namespace);

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

    //escencial para el funcionamiento del WSDL
    $server->service(file_get_contents("php://input"));
?>