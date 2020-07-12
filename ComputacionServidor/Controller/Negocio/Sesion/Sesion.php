<?php
    require_once ("../../Datos/Conexion.php");
    require_once ("../../../nusoap/lib/nusoap.php");

    $server = new soap_server();
    $namespace = "urn:ObtenerBaseDatoswsdl";
    $server->configureWSDL('ObtenerBaseDatos', $namespace);
    $server->schemaTargetNamespace = $namespace;

    $server->register("ObtenerBaseDatos",array('CodigoSesion' => 'xsd:string'),array('return' => 'xsd:Array'),$namespace);

    function ObtenerBaseDatos($CodigoSesion){
        $Conexion = new Conexion();

        $DatosConexion = $Conexion->ObtenerConexion();

        $Resultado = array();

        if($CodigoSesion != ""){            
            $result = $DatosConexion->query("SELECT Nombre,Conexion FROM operacion_conexiones where Codigo='".$CodigoSesion."' and idEstado=1");

            if($result)
            {  
               $Resultado = $result->fetch_array(MYSQLI_ASSOC);
            }
            else{
                $Resultado = array (
                    'Codigo' => 'xx',
                    'Usuario' => 'xx',
                    'Response' => 'Success'
                );
            }
        }
        else{
            $Resultado = array (
                'Codigo' => 'xx',
                'Usuario' => 'xx',
                'Response' => 'Success'
            );
        }

        return $Resultado;
    }

    $server->service(file_get_contents("php://input"));
?>