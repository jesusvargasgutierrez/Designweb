<?php  
    require_once ("TestSpace.php");
    require_once ("../../nusoap/lib/nusoap.php");

    $NegocioPeticion = new TestSpace();
      
    $Resultado = array (
        'BaseDatos' => 'pwebservidor',
        'values' => "(0,'Client1','Nombres','Primer Apellido','Segundo Apellido','Nombre Completo','2020-08-27','1','1','ffff','444','1')",
        'Persona' => "4"
    );
    
    $Valores = array(
        'BaseDatos' => "pwebservidor",
        'Url' => "http://localhost/Desarrollos/Designweb/ComputacionServidor/Controller/Negocio/Clientes/Clientes.php",
        'Parametro' => "EntidadCliente",
        'Valor' => $Resultado,
        'Endpoint' => 'InsertarCliente'
      );
      //"('01','Client1','Nombre Completo','Nombres','Primer Nombre','Segundo Nombre','2020-07-17',1,2,1)"
    /*$Valores = array(
        'Url' => 'http://localhost/Desarrollos/Designweb/ComputacionServidor/Controller/Negocio/Menus/Modulos.php',
        'Parametro' => "EntidadModulo",
        'Arreglo' => "pwebservidor",
        'Endpoint' => 'ObtenerModulos'
    );*/
    $salida1 = $NegocioPeticion->Peticion($Valores);
    print_r($salida1);
?>