<?php
$directorio = 'src/';
$subir_archivo = $directorio.basename($_FILES['uploadfile']['name']);

    if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $subir_archivo)) 
    {
        echo "El archivo es válido y se cargó correctamente.<br><br>";
    } else {
        echo "La subida ha fallado";
    }
?>