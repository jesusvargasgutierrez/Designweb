<?php
    /**
     * importacion de la clase operacion y peticion
     * importacion de la libreria nusoap
     */
    require_once ("../Modelo/Menus/Modulos.php");
    /**
     * se debe tener una session iniciada
     */
    class Modulos
    {
        function ObtenerModulos()
        {
            /**
             * objeto para acceso a modelos
             */
            $DatosModulos = new ModulosDatos();

            /**
             * verificamos si se inicio sesion
             */
            if(isset($_SESSION['Tarjeta']))
            {
                /**
                 * se construye el arreglo
                 * para realizar la peticion
                 */
                $Valores = array(
                    'BaseDatos' => 'pwebservidor'
                );

                /**
                 * utilizamos el objeto
                 */
                $Modulos = $DatosModulos->ObtenerModulos($Valores);

                return $Modulos;
            }
        }
    }
?>