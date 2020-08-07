<?php
    require_once ("../../Datos/Login/Login.php");
    
    if(isset($_POST["Codigo"]))
    {
        $array = $_POST;
        foreach($_POST as $propiedad=>$valor){
            $variable = $propiedad;
            $$variable = $valor;
        }

        $DatosLogin = new Login();

        $Valores = array(
            'Valor' => sha1($array["Codigo"])
        );
        
        $Sesion = $DatosLogin->ObtenerBaseDatos($Valores);

        if(!isset($Sesion))
        {
            //header('Location: ../../index.php');
        }

        $AccesoUsuario = array(
            'BaseDatos' => $Sesion["Conexion"],
            'Usuario' => sha1($array["Usuario"]),
            'Contrasenia' => sha1($array["contrasenia"])
        );

        $User = $DatosLogin->ObtenerUsuario($AccesoUsuario);
        
        if(!isset($User))
        {
            //header('Location: ../../index.php');
        }

        if(count($User) > 0)
        {
            if($User['idUsuario'] != 0){
                session_start();
                $Tarjeta = array(
                    'Conexion' => $AccesoUsuario["BaseDatos"],
                    'idUsuario' => $User["idUsuario"],
                    'Nombre' => $User["Nombre"],
                    'TipoUsuario' => $User["TipoUsuario"]
                );
                $_SESSION["Tarjeta"] = $Tarjeta;
                header('Location: ../../Vista/Inicio.php');
            }
        }
    }else{
        echo "n";
        //header('Location: ../../index.php');
    }

?>