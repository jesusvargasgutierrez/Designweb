<?php
require_once('vendor/autoload.php');
require_once('conexion.php');
require_once('models/TracerMembers.php');
include('../CompareImage/compareImages.php');

    $zip = new ZipArchive;
    $zip->open($url);
    $zip->extractTo('tmp/');
    $zip->close();

    $compareMachine = new compareImages('');

    for($i = 1; $i <= 3; $i++){
        TracerMembers::create([
           'id_member' => 1,
           'tracer_hash' => $compareMachine->hasStringImage("tmp/tracers/trace".$i.".png") 
        ]); 
    }
?>