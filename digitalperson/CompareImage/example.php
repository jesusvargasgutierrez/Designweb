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

/* Compare this image with an other image*/
$image2 = '../test3.png';
//$diff = $compareMachine->compareWith($image2); //easy
$image2Hash = $compareMachine->hasStringImage($image2); 
$diff = $compareMachine->compareHash($image2Hash); 
echo "Image 2: <img src='$image2'/><br/>";
echo 'Image 2 Hash :'.$image2Hash.'<br/>';
echo 'Different rates (image1 Vs image2): '.$diff;
if($diff>11){
    echo ' => 2 different image';
}
else{
    echo ' => duplicate image';
}
echo '<br/>-------------------------------------------------------------<br/>';
?>