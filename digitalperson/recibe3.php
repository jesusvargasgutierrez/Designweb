<?php
var_dump($_FILES);

// $data = substr($_FILES['blobImage']['tmp_name'], strpos($_FILES['blobImage']['tmp_name'], ",") + 1);

// $dat = base64_decode($data);

// file_put_contents('image.png',$dat);

// $data = substr($_FILES['blobImage'], strpos($_FILES['blobImage'], ",") + 1);
// $directorio = 'src/';
// $subir_archivo = $directorio.basename($_FILES['blobImage']['name']);

move_uploaded_file($_FILES['blobImage']['tmp_name'], 'image.png');

// $dat = base64_decode($_FILES['blobImage']['tmp_name']);

// file_put_contents('image.png',$_FILES['blobImage']);
?>