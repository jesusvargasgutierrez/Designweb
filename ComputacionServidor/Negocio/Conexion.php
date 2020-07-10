<?php
class Conexion
{
    function ObtenerConexion()
    {
        $enlace = mysqli_connect('localhost', 'root', '');

        if (!$enlace) {
           ?>
            <script type="text/javascript">
               alert("Existen problemas al realizar la conexion");
            </script>
           <?php
            die(mysqli_connect_error());
        }
        ?>
        <script type="text/javascript">
           alert("Conectado satisfactoriamente");
        </script>
       <?php
    
        mysqli_close($enlace);
    }
}

$obj = new Conexion();

$obj->ObtenerConexion();

?>