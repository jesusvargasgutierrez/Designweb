<?php
class Conexion
{
    function ObtenerConexion()
    {
        $enlace = mysqli_connect('localhost', 'root', '', 'master');

        if (!$enlace) {
           ?>
            <script type="text/javascript">
               //alert("Existen problemas al realizar la conexion");
            </script>
           <?php
            die(mysqli_connect_error());
        }
        ?>
        <script type="text/javascript">
           //alert("Conectado satisfactoriamente");
        </script>
       <?php
    
        return $enlace;//mysqli_close($enlace);
    }
}

$obj = new Conexion();

$conexion = $obj->ObtenerConexion();

$resultado = mysqli_query($conexion, "SELECT * FROM operacion_conexiones");

$line = "";

while($obj = $resultado->fetch_object()){
    $line.=$obj->IdConexion;
    $line.=$obj->Nombre;
} 

echo $line;

$conexion->close(); 
//echo mysqli_free_result($resultado);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>
    <input type="text" id="btn1" value="press">

    <script type="text/javascript">
     $('#btn1').on("keypress", function(e){
                if(e.which == 13){
                    alert("hello word!");
               }
            });
    </script> 
</body>  
</html>