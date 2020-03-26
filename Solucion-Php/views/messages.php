<?php
  session_start();
  if (isset($_SESSION["respuesta"])){

  switch ($_SESSION["respuesta"]) {
    case '1':
?>
  <div class="alert alert-success" role="alert">
    Operacion realizada correctamente
  </div>
<?php
      break;
    case '2':
?>
  <div class="alert alert-warning" role="alert">
    Operacion no realizada correctamente
  </div>
<?php
      break;
    case '3':
?>
  <div class="alert alert-danger" role="alert">
    Operacion no realizada correctamente, favor de ponerse en contacto con el administrador
  </div>
<?php
  }
}
  session_destroy();
?>
</body>
</html>
