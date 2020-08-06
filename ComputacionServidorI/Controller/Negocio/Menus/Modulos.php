<?php
    /**
     * importacion de la clase conexion
     * importacion de la libreria nusoap
     */
    require_once ("../../Datos/Conexion.php");
    require_once ("../../../nusoap/lib/nusoap.php");

            /**
     * creacion del objeto para el uso de nusoap
     * se crea un WSDL llamado Insertar cliente
     */
    $server = new soap_server();
    $namespace = "urn:ObtenerModuloswsdl";
    $server->configureWSDL('ObtenerModulos', $namespace);
    $server->schemaTargetNamespace = $namespace;

        /**
     * se registra un nuevo controlador llamado ObtenerModulos
     * recibe un string llamado 
     * EntidadModulo y retornara un arreglo 
     */
    $server->register("ObtenerModulos",array('EntidadModulo' => 'xsd:string'),array('return' => 'xsd:Array'),$namespace);

    function ObtenerModulos($EntidadModulo){
                        /**
         * objeto para usar los metodos relacionados con la conexion
         */
        $Conexion = new Conexion();

                        /**
         * se asigna el nombre de la base de datos
         */
        $BaseDatos = $EntidadModulo;

        $DatosConexion = $Conexion->ObtenerConexionBD($BaseDatos);

        $Resultado = array();

        /**
         * selecciona los modulos en estado 1
         */
        $result = $DatosConexion->query("SELECT * FROM operacion_modulo where Estado=1");

            /**
             * evalua si devolvio 
             * datos
             */
        if($result)
        {  
            $posts = array();

            /**
            * asigna los datos consultados
            */
            while($row = $result->fetch_array(MYSQLI_ASSOC))
            {
                $posts[] = $row;
            }

            /**
             * se agrega el icono principal
             */
            $arrayModulos = array(
                "Modulos" => array(
                    "identificador" => "Modulos",
                    "icono" => "fas fa-th-large",
                    "url" => "",
                    "Subopciones" => $posts
                )
            );

            $Resultado = $arrayModulos;
        }
        else{
                /**
                 * retorna si no se encuentra un
                 * registro
                 */
            $Resultado = array (
                'TipoRespuesta' => '2',
                'TextoRespuesta' => 'No hay datos'
            );
        }

        return $Resultado;
    }

    //escencial para el funcionamiento del WSDL
    $server->service(file_get_contents("php://input"));
?>