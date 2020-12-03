<?php
    require_once ("../../Datos/Conexion.php");
    require_once ("../../../nusoap/lib/nusoap.php");

        /**
     * creacion del objeto para el uso de nusoap
     * se crea un WSDL llamado ObtenerBaseDatos
     */
    $server = new soap_server();
    $namespace = "urn:ObtenerBaseDatoswsdl";
    $server->configureWSDL('ObtenerBaseDatos', $namespace);
    $server->schemaTargetNamespace = $namespace;

    /**
     * se registra un nuevo controlador llamado CodigoSesion
     * recibe un string llamado 
     * CodigoSesion y retornara un arreglo 
     */
    $server->register("ObtenerBaseDatos",array('CodigoSesion' => 'xsd:string'),array('return' => 'xsd:Array'),$namespace);

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
        if($CodigoSesion != ""){        
            /**
             * selecciona unicamente 
             * el nombre y la conexion
             * */    
            $result = $DatosConexion->query("SELECT Nombre,Conexion FROM operacion_conexiones where Codigo='".$CodigoSesion."' and idEstado=1");

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

     //escencial para el funcionamiento del WSDL
    $server->service(file_get_contents("php://input"));
?>