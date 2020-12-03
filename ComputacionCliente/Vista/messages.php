<?php

if (isset($_POST["respuesta"])){
  switch ($_POST["respuesta"]) {
      case '1':
          ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Operacion realizada correctamente
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php
        break;
      case '2':
           ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              Operacion no realizada correctamente, favor de ponerse en contacto con el administrador
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
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
