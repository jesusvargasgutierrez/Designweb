<?php
    /**
     * importacion de la clase conexion
     * importacion de la libreria nusoap
     */
    require_once ("../Datos/Conexion.php");
    class ModulosDatos
    {
        function ObtenerModulos($EntidadModulo){
            /**
             * objeto para usar los metodos relacionados con la conexion
             */
            $Conexion = new Conexion();

            /**
             * se asigna el nombre de la base de datos
             */
            $BaseDatos = $EntidadModulo["BaseDatos"];

            $DatosConexion = $Conexion->ObtenerConexionBD($BaseDatos);

            $Resultado = array();

            /**
             * selecciona los modulos en estado 1
             */
            $result = $DatosConexion->query("SELECT * FROM operacion_modulo where Estado=1");

                /**
                 * evalua si devolvio 
                 * datos
                 */
            if($result)
            {  
                $posts = array();

                /**
                * asigna los datos consultados
                */
                while($row = $result->fetch_array(MYSQLI_ASSOC))
                {
                    $posts[] = $row;
                }

                /**
                 * se agrega el icono principal
                 */
                $arrayModulos = array(
                    "Modulos" => array(
                        "identificador" => "Modulos",
                        "icono" => "fas fa-th-large",
                        "url" => "",
                        "Subopciones" => $posts
                    )
                );

                $Resultado = $arrayModulos;
            }
            else{
                    /**
                     * retorna si no se encuentra un
                     * registro
                     */
                $Resultado = array (
                    'TipoRespuesta' => '2',
                    'TextoRespuesta' => 'No hay datos'
                );
            }

            return $Resultado;
        }
    }
?>