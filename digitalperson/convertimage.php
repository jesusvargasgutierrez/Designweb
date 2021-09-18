<?php

// $imagen1 = new imagick("test.png");
// $imagen1 = new imagick("test1.png");

// $resultado = $imagen1->compareImages($imagen1, Imagick::METRIC_MEANSQUAREERROR);
// $resultado[0]->setImageFormat("png");

// header("Content-Type: image/png");
// echo $resultado[0];

// require __DIR__ . "/vendor/autoload.php";
// use pepeEpe\FastImageCompare\FastImageCompare;

// $instance = new FastImageCompare();
// $images = array(
//     'test.png',
//     'test1.png'
// );
// $similarArray = $instance->findUniques($images,0.10,FastImageCompare::PREFER_LARGER_IMAGE);

//https://packagist.org/packages/vajiral/php-image-compare
use BigV\ImageCompare;

require __DIR__ . "/vendor/autoload.php";

$image = new ImageCompare();
echo $image->compare(__DIR__ . '/test2.png',__DIR__ . '/test4.png');

// $md5image1 = md5(file_get_contents("test.png"));
// $md5image2 = md5(file_get_contents("test1.png"));

// echo $md5image1.'<br/>';
// echo $md5image2;

// if ($md5image1 == $md5image2) {
//     echo "equal";
// }

// $fichero = 'test.png';

// $data = file_get_contents("test.png");
// $array = array(); 
// foreach(str_split($data) as $char){ 
//     array_push($array, ord($char)); 
// }
// var_dump(implode(' ', $array));

// $filename = "abc.txt";
// $fp = fopen($filename, "r");

// $content = fread($fp, filesize($filename));
// $lines = explode("\n", $content);
// fclose($fp);
//print_r($lines);

// $sourceImagepath = encodeImage("test.png");
// $uploadedImagepath = encodeImage("test1.png");

// if(areEqual($sourceImagepath , $uploadedImagepath)){
//     echo "Image is already Exist";
//     return false;
// }
// echo "Image Upload";

// function encodeImage($ImagePath){
//     $ext = pathinfo($ImagePath, PATHINFO_EXTENSION);
//     $Imgcontent = file_get_contents($ImagePath);
//     $base64 = 'data:image/' . $ext . ';base64,' . base64_encode($Imgcontent);
//     return $base64;
// }

// function areEqual($sourceImage, $uploadedImage){    
//     if (strcmp($sourceImage, $uploadedImage) !== 0) {
//             return false;
//     }
//     return true;
// }

// if (file_exists($fichero)) {
//     header('Content-Description: File Transfer');
//     header('Content-Type: application/octet-stream');
//     header('Content-Disposition: attachment; filename="'.basename($fichero).'"');
//     header('Expires: 0');
//     header('Cache-Control: must-revalidate');
//     header('Pragma: public');
//     header('Content-Length: ' . filesize($fichero));
//     readfile($fichero);
//     exit;
// }

//$data = $GET['image'];
//$data = $array;
// list($type,$data) = explode(';',$data);
// list(,$data) = explode(';',$data);

// $data = base64_decode($data);

// file_put_contents('image.png',$data)

?>