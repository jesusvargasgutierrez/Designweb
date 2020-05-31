<?php
    $url = "http://localhost:51436/api/Test/enviarpost";
    $conexion = curl_init();    
    $envio = "datos que se envian"; // --- Puede ser un xml, un json, etc.
    curl_setopt($conexion, CURLOPT_URL,$url);
    // --- Datos que se van a enviar por POST.
    curl_setopt($conexion, CURLOPT_POSTFIELDS,$envio);
    // --- Cabecera incluyendo la longitud de los datos de envio.
    curl_setopt($conexion, CURLOPT_HTTPHEADER,array('Content-Type: application/json', 'Content-Length: '.strlen($envio)));
    // --- Petición POST.
    curl_setopt($conexion, CURLOPT_POST, 1);
    // --- HTTPGET a false porque no se trata de una petición GET.
    curl_setopt($conexion, CURLOPT_HTTPGET, FALSE);
    // -- HEADER a false.
    curl_setopt($conexion, CURLOPT_HEADER, FALSE);
    // --- Respuesta.
    $respuesta=curl_exec($conexion);
         
    if($respuesta===false)
    {
        echo $respuesta;
    }else {
        echo $respuesta;
    }
     
    curl_close($conexion);
    //header('Location: views/login/Account.php');

    function get(){
    $url = "http://localhost:51436/api/Test";     
        $conexion = curl_init();
        // --- Url   
        curl_setopt($conexion, CURLOPT_URL,$url);    
        // --- Petición GET.    
        curl_setopt($conexion, CURLOPT_HTTPGET, TRUE);
        // --- Cabecera HTTP.
        curl_setopt($conexion, CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
        // --- Para recibir respuesta de la conexión.
        curl_setopt($conexion, CURLOPT_RETURNTRANSFER, 1);
        // --- Respuesta
        $respuesta=curl_exec($conexion);
        if($respuesta===false)    
            echo "error";
        else{ echo $respuesta; }
        curl_close($conexion);
}
?>
