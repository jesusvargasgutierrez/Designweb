<?php

if (isset($_POST["respuesta"])){
  switch ($_POST["respuesta"]) {
      case '1':
          ?>
            <div class="alert alert-success">
              Operacion realizada correctamente
            </div>
          <?php
        break;
      case '2':
           ?>
            <div class="alert alert-danger">
              Operacion no realizada correctamente, favor de ponerse en contacto con el administrador
            </div>
          <?php
        break;
      case '3':
      break;
  }
}
?>

<div id="bodymessage">
<div>
