<?php
require_once('../../vendor/autoload.php');
require_once('../../conexion.php');
require_once('../../models/information.php');

    $request_body = file_get_contents('php://input');

    $data = json_decode($request_body, true);

    if(isset($data['action']) && $data['action'] == 1){
        $information = information::create([
            'fullname' => $data['fullname'],
            'birthday' => $data['birthday'],
            'position' => $data['position'] 
         ]); 

        exit($information);
    }
    else if(isset($data['action']) && $data['action'] == 2){
        $information = information::selectRaw('me_member_info.id_member AS id_member
                                ,me_member_info.fullname
                                ,me_member_info.birthday
                                ,me_member_info.position
                                ,me_member_photos.image_code')
                        ->join('me_member_photos', 'me_member_info.id_member', 'me_member_photos.id_member')
                        ->where('me_member_info.id_member', $data['id_member'])
                        ->first();

        $data = $information->image_code;
        // $imagen = str_replace('data:image/png;base64,', '', $data);
        // $imagen = str_replace(' ', '+', $imagen);
        // $imagenDecodificada = base64_decode($imagen);
        //$nombreImagenGuardada = "../../tmp/foto_" . uniqid() . ".png";
        //file_put_contents($nombreImagenGuardada, $imagenDecodificada);

        //exit('data:image/png;base64,' . base64_encode($imagenDecodificada));
        exit($data);
    }
?>