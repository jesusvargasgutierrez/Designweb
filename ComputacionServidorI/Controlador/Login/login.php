<?php
/**
 * se importa la clase para el modelo
 */
    require_once ("../../Modelo/Login/Login.php");
    
    if(isset($_POST["Sesion"]))
    {
        /**
         * objeto para acceso a
         * modelo de login
         */
        $DatosLogin = new Login();

        /**
         * se recibe el JSON de AJAX
         */
        $json = $_POST["Sesion"];
        
        /**
         * Se convierte el JSON en un arreglo
         * para su manipulacion
         */
        $Sesionjson = json_decode($json, true);

        /**
         * arreglo de valores para
         * buscar el codigo
         * se utiliza el hash sha1
         */
        $Valores = array(
            'Valor' => sha1($Sesionjson["Codigo"])
        );

        /**
         * se consulta el codigo
         */
        $Sesion = $DatosLogin->ObtenerBaseDatos($Valores);

        /**
         * verifica si el arreglo tiene
         * la propiedad conexion
         */
        if(isset($Sesion["Response"][0]["Conexion"]))
        {   
            /**
             * arreglos para consultar usuario
             * 
             */
            $AccesoUsuario = array(
                'BaseDatos' => $Sesion["Response"][0]["Conexion"],
                'Usuario' => sha1($Sesionjson["Usuario"]),
                'Contrasenia' => sha1($Sesionjson["contrasenia"])
            );

            /**
             * se compara el usuario con
             * el registro en la base de datos
             */
            $User = $DatosLogin->ObtenerUsuario($AccesoUsuario);

            /**
             * se evalua si existe la propiedad usuario
             */
            if(isset($User["Response"][0]["Usuario"]))
            {
                /**
                 * no es posible que el usuario tenga un id 0
                 * mas sin embargo se evalua
                 */
                if($User["Response"][0]["idUsuario"] != 0){
                    session_start();
                    $Tarjeta = array(
                        'Conexion' => $Sesion["Response"][0]["Conexion"],
                        'idUsuario' => $User["Response"][0]["idUsuario"],
                        'Nombre' => $User["Response"][0]["Nombre"],
                        'TipoUsuario' => $User["Response"][0]["TipoUsuario"]
                    );
                    $_SESSION["Tarjeta"] = $Tarjeta;
                }
            }
            else{
                echo "Credenciales incorrectas";
            }
        }else{
            /**
             * si no tiene la propiedad conexion 
             * este mensaje aparecera en el login
             */
            echo "El codigo no existe";
        }
    }else{
        /**
         * si no existe el JSON 
         * este mensaje aparecera en el 
         * login
         */
        echo "Inicie sesion porfavor";
    }

?>