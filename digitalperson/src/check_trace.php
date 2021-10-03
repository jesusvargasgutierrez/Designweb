<?php
require_once('vendor/autoload.php');
require_once('conexion.php');
require_once('models/TracerMembers.php');
include('../CompareImage/compareImages.php');

    move_uploaded_file($_FILES['blobImage']['tmp_name'], 'image.png');

    $image1 = 'image.png';
    $compareMachine = new compareImages($image1);
    //$image1Hash = $compareMachine->hasStringImage($image1); 

    $tracermember = TracerMembers::all();

    collect($tracermember)->map(function ($tracer) use ($compareMachine) {
        $diff = $compareMachine->compareHash($tracer['tracer_hash']);

        if($diff > 11){
            echo "No hay coincidencias";
        }else{
            echo "Coincide con ". $tracer['id_tracer'];
        }
    });

    //echo $tracermember;
?>