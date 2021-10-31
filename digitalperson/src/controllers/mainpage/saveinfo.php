<?php
require_once('../../vendor/autoload.php');
require_once('../../conexion.php');
require_once('../../models/contactinfo.php');

    $request_body = file_get_contents('php://input');

    $data = json_decode($request_body, true);

    $information = contactinfo::create([
        'fullname' => $data['fullname'],
        'email' => $data['email'],
        'subjects' => $data['subjects'],
        'comments' => $data['comments']
    ]); 

    exit($information);
?>