<?php
    require_once ("../../Datos/Conexion.php");
    require_once ("../../../nusoap/lib/nusoap.php");

    $server = new soap_server();
    $namespace = "urn:Clientewsdl";
    $server->configureWSDL('InsertarCliente', $namespace);
    $server->schemaTargetNamespace = $namespace;

    $server->register("InsertarCliente",array('EntidadCliente' => 'xsd:Array'),array('return' => 'xsd:Array'),$namespace);

    function InsertarCliente($EntidadCliente){
        $Conexion = new Conexion();

        $BaseDatos = $EntidadCliente['BaseDatos'];

        $DatosConexion = $Conexion->ObtenerConexionBD($BaseDatos);

        $Resultado = array();

        $result = $DatosConexion->query("INSERT INTO sis_persona (Persona,Codigo,Nombres,ApellidoPaterno,ApellidoMaterno,NombreCompleto,FechaNacimiento,Genero,EstadoCivil,Correo,Telefono,Estado) VALUES ".$EntidadCliente['values']);

        $Resultado = array (
            'TipoRespuesta' => $BaseDatos,
            'TextoRespuesta' => $DatosConexion
        );

        //mysqli_close($DatosConexion);

        return $Resultado;
    }

    $server->register("BuscarCliente",array('EntidadCliente' => 'xsd:Array'),array('return' => 'xsd:Array'),$namespace);

    function BuscarCliente($EntidadCliente){
        $Conexion = new Conexion();

        $BaseDatos = $EntidadCliente['BaseDatos'];

        $DatosConexion = $Conexion->ObtenerConexionBD($BaseDatos);

        $Resultado = [];
        
        $result = $DatosConexion->query("SELECT ". $EntidadCliente['Valores'] ." FROM sis_persona where Estado=1");

        if($result)
        {  
            $posts = array();
            while($row = $result->fetch_array(MYSQLI_ASSOC))
            {
                $posts[] = $row;
            }

            $Resultado = $posts;
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