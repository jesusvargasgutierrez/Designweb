<?php
require_once('../../vendor/autoload.php');
require_once('../../conexion.php');
require_once('../../models/TracerMembers.php');
include('../compareimage/compareImages.php');

    move_uploaded_file($_FILES['blobImage']['tmp_name'], 'image.png');

    $image1 = 'image.png';
    $compareMachine = new compareImages($image1);
    //$image1Hash = $compareMachine->hasStringImage($image1); 

    $tracermember = TracerMembers::all();

    $indice = 0;
    $temp = 0;
    $aux = 0;
    $count = 0;
    $member_id = 0;

    $result_trace = json_decode(json_encode($tracermember));

    foreach($result_trace as $rt){
        $diff = $compareMachine->compareHash($rt->tracer_hash);
            
        // if($diff > 11){
        //      echo "No hay coincidencias";
        //  }else{
        //      echo "Coincide con ". $rt->id_tracer;
        // }

        $temp = $rt->id_member;

        if($indice == 0){
            if($diff < 11){
                $count = $count + 1;
                //echo "Hay coincidencias";
            }
        }else {
            if($diff <= 11 && $temp == $aux){
                $count = $count + 1;
                //echo "Hay coincidencias";
            }
        }

        if($count == 2){
            $member_id = $aux;
            //detener la busqueda con dos coincidencias
            break;
        }

        $indice = $indice + 1;
        
        $aux = $rt->id_member;
    }

    unlink('image.png');

    echo $member_id;
?>