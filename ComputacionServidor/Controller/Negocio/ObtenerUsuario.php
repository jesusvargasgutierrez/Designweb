<?php  
    require_once ("../../nusoap/lib/nusoap.php");

    $cliente = new nusoap_client("http://localhost/Desarrollos/Designweb/ComputacionServidor/Controller/Negocio/Usuario/Usuario.php",false);
      
    $Resultado = array (
        'BaseDatos' => 'pwebservidor',
        'Usuario' => 'd5aa170e875913b89d169c57b96b452548fabfff',
        'Contrasenia' => '5ed547d7adec8ded22e147c4f489d578869d6e48'
    );

    $parametros = array("EntidadUsuario"=>$Resultado);

    $respuesta = $cliente->call("ObtenerUsuario",$parametros);

    print_r($respuesta);
?>