<?php
require_once('../../vendor/autoload.php');
require_once('../../conexion.php');
require_once('../../models/photosmember.php');

    $request_body = file_get_contents('php://input');

    $data = json_decode($request_body, true);

    if(isset($data['action']) && $data['action'] == 1){
        
        unlink("../../tmp/src/".$data['capture']);

        exit('imagen eliminada!');
    }
    if(isset($_POST['action']) && $_POST['action'] == 2){

        move_uploaded_file($_FILES['blobImage']['tmp_name'], 'image.png');

        $path = 'image.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        unlink('image.png');

        array_map('unlink', glob("../../tmp/*.*"));

        photosmember::create([
            'id_member' => 1,
            'image_code' => $base64 
         ]); 

        echo $base64;
    }
    else{
        $imagenCodificada = file_get_contents("php://input"); //Obtener la imagen

        if(strlen($imagenCodificada) <= 0) exit("No se recibió ninguna imagen");

        $imagenCodificadaLimpia = str_replace("data:image/png;base64,", "", urldecode($imagenCodificada));
        
        $imagenDecodificada = base64_decode($imagenCodificadaLimpia);
        
        $nombreImagenGuardada = "../../tmp/foto_" . uniqid() . ".png";
        
        file_put_contents($nombreImagenGuardada, $imagenDecodificada);

        exit($nombreImagenGuardada);
    }
?>