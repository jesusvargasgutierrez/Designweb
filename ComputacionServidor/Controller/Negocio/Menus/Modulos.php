<?php
    require_once ("../../Datos/Conexion.php");
    require_once ("../../../nusoap/lib/nusoap.php");

    $server = new soap_server();
    $namespace = "urn:ObtenerModuloswsdl";
    $server->configureWSDL('ObtenerModulos', $namespace);
    $server->schemaTargetNamespace = $namespace;

    $server->register("ObtenerModulos",array('EntidadModulo' => 'xsd:string'),array('return' => 'xsd:Array'),$namespace);

    function ObtenerModulos($EntidadModulo){
        $Conexion = new Conexion();

        $BaseDatos = $EntidadModulo;

        $DatosConexion = $Conexion->ObtenerConexionBD($BaseDatos);

        $Resultado = array();

        $result = $DatosConexion->query("SELECT * FROM operacion_modulo where Estado=1");

        if($result)
        {  
            $posts = array();
            while($row = $result->fetch_array(MYSQLI_ASSOC))
            {
                $posts[] = $row;
            }

            $arrayModulos = array(
                "Modulos" => array(
                    "identificador" => "Modulos",
                    "icono" => "fas fa-th-large",
                    "url" => "",
                    "Subopciones" => $posts
                )
            );

            $Resultado = $arrayModulos;
            //$Resultado = $result->fetch_array(MYSQLI_ASSOC);
        }
        else{
            $Resultado = array (
                'TipoRespuesta' => '2',
                'TextoRespuesta' => 'Usuario o Contraseña invalidas'
            );
        }

        return $Resultado;
    }

    $server->service(file_get_contents("php://input"));
?>