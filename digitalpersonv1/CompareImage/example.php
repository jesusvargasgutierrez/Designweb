<?php

/**
 * @author ThaoNv
 * compareImages example
 */
include('compareImages.php');
 
/* Get hash string from image*/
$image1 = '../test4.png';
$compareMachine = new compareImages($image1);
$image1Hash = $compareMachine->getHasString(); 
echo "Image 1: <img src='$image1'/><br/>";
echo 'Image 1 Hash :'.$image1Hash.'<br/>';

?>