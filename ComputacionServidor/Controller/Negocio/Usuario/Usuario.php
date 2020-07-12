<?php
    require_once ("../../Datos/Conexion.php");
    require_once ("../../../nusoap/lib/nusoap.php");

    $server = new soap_server();
    $namespace = "urn:ObtenerUsuariowsdl";
    $server->configureWSDL('ObtenerUsuario', $namespace);
    $server->schemaTargetNamespace = $namespace;

    $server->register("ObtenerUsuario",array('EntidadUsuario' => 'xsd:Array'),array('return' => 'xsd:Array'),$namespace);

    function ObtenerUsuario($EntidadUsuario){
        $Conexion = new Conexion();

        $BaseDatos = $EntidadUsuario['BaseDatos'];

        $DatosConexion = $Conexion->ObtenerConexionBD($BaseDatos);

        $Resultado = array();

        if(count($EntidadUsuario) != 0){            
            $result = $DatosConexion->query("SELECT * FROM operacion_usuarios where Usuario='".$EntidadUsuario['Usuario']."' AND Contrasenia='".$EntidadUsuario['Contrasenia']."' AND Estado=1");

            if($result)
            {  
               $Resultado = $result->fetch_array(MYSQLI_ASSOC);
            }
            else{
                $Resultado = array (
                    'TipoRespuesta' => '2',
                    'TextoRespuesta' => 'Usuario o Contraseña invalidas'
                );
            }
        }
        else{
            $Resultado = array (
                'TipoRespuesta' => '2',
                'TextoRespuesta' => 'Acceso vacio'
            );
        }

        return $Resultado;
    }

    $server->service(file_get_contents("php://input"));
?>