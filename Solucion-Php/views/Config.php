<?php

function conectar(){
    include_once('adodb/adodb.inc.php');
    
    $cnn = ADONewConnection('mysqli');
    
    if(empty($cnn)){
       ?>
        <script type="text/javascript">
           alert("Existen problemas al realizar la conexion");
        </script>
       <?php
    }
    if(!$cnn->Connect('localhost','root','123','Solucion1')){
       ?>
        <script type="text/javascript">
           alert("Existen Problemas al Realizar la conexion con la base de datos");
        </script>
       <?php
       die;
    }
    return $cnn;
}
?>