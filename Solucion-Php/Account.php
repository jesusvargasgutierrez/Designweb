<?php  
include_once('views/libs/adodb/adodb.inc.php');
include_once('Config.php');

  if(isset($_POST['Full-Name'])){

    foreach($_POST as $cm=>$val){
        $intercambio=$cm;
        $$intercambio=$val;

        echo '<br/>'.$$intercambio;
    }
  }
  else
  {
    echo "does not exist field";
  }

?>