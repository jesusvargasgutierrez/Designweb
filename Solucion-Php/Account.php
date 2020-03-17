<?php  
include_once('views/adodb/adodb.inc.php');
include_once('views/Config.php');

  if(isset($_POST['FullName'])){

    foreach($_POST as $cm=>$val){
        $intercambio=$cm;
        $$intercambio=$val;

        echo "<br>".$intercambio ."&nbsp;".$$intercambio;
    }

    $conn = conectar();
    $sql = "call Op_InsUser('".$Names."','".$Firstname."','".$Secondname."','".$FullName."');";
    $set = $conn->Execute($sql);
    $respuesta = ($set->RecordCount()) ? 2 : 1;

    echo $respuesta;
    
    session_start();
    $_SESSION["respuesta"] = $respuesta;

    header ("Location: Registro.php");
  }
  else
  {
    echo "does not exist field";
  }

?>