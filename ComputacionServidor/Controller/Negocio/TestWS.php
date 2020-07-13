<?php  
    require_once ("TestSpace.php");
    require_once ("../../nusoap/lib/nusoap.php");

    $NegocioPeticion = new TestSpace();
      
    $Resultado = array (
        'BaseDatos' => 'pwebservidor',
        'Usuario' => 'd5aa170e875913b89d169c57b96b452548fabfff',
        'Contrasenia' => '5ed547d7adec8ded22e147c4f489d578869d6e48'
    );

    $Valores = array(
        'Url' => 'http://localhost/Desarrollos/Designweb/ComputacionServidor/Controller/Negocio/Menus/Modulos.php',
        'Parametro' => "EntidadModulo",
        'Arreglo' => "pwebservidor",
        'Endpoint' => 'ObtenerModulos'
    );

    print_r($NegocioPeticion->Peticion($Valores));
?>