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
?>