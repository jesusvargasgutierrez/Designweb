<?php
class Conexion
{
    function ObtenerConexion()
    {
        $enlace = new mysqli("localhost", "root", "", "master");

        if ($enlace->connect_error) {
            ?>
            <script type="text/javascript">
                alert("Existen problemas al realizar la conexion");
            </script>
           <?php
           die("Existen problemas al realizar la conexion ".$enlace->connect_error);
        }
    
        return $enlace;
    }

    function ObtenerConexionBD($BaseDatos)
    {
        $enlace = new mysqli("localhost", "root", "", $BaseDatos);

        if ($enlace->connect_error) {
           die("Existen problemas al realizar la conexion ".$enlace->connect_error);
        }
    
        return $enlace;
    }
}

/*$obj = new Conexion();

$conexion = $obj->ObtenerConexion();

$result = $conexion->query("SELECT * FROM operacion_conexiones");

if(!$result) die("error en consulta");

$result->data_seek(0);

echo $result->fetch_assoc()['Codigo'];

$result->close();
$conexion->close();*/
//UPDATE operacion_conexiones SET Conexion='PCliente' where IdConexion=2

?>