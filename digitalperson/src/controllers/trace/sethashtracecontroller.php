<?php
require_once('../../vendor/autoload.php');
require_once('../../conexion.php');
require_once('../../models/TracerMembers.php');
include('../compareImage/compareimages.php');

    move_uploaded_file($_FILES['uploadzip']['tmp_name'], '../../tmp/tracers.zip');

    $zip = new ZipArchive;
    $zip->open('../../tmp/tracers.zip');
    $zip->extractTo('../../tmp/');
    $zip->close();

    $compareMachine = new compareImages('');

    for($i = 1; $i <= 3; $i++){
        TracerMembers::create([
           'id_member' => $_GET['id_member'],
           'tracer_hash' => $compareMachine->hasStringImage("../../tmp/tracers/trace".$i.".png") 
        ]); 
    }

    unlink('../../tmp/tracers.zip');
    array_map('unlink', glob("../../tmp/tracers/*.*"));
    rmdir('../../tmp/tracers');
    header("Location: ../../views/trace/index.php");
?>