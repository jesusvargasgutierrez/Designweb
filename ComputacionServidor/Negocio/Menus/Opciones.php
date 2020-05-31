<?php
class OptionsBussines
{
    function RequestOptions($ClaveModulo)
    {
        switch($ClaveModulo)
        {
            case "Clientes":
               $this->ObtenerCliente();
            break;
        }
    }

    function ObtenerCliente()
    {
        $array = array(
            "Proceso" => array(
                "identificador" => "Mod",
                "icono" => "fas fa-th-large",
                "url" => "www.google.com",
                "Subopciones" => array(
                    "Registro" => array(
                        "identificador" => "Clientes",
                        "icono" => "fas fa-globe",
                        "url" => "www.google.com",
                    ),
                    "Prospecto" => array(
                        "identificador" => "Seguridad",
                        "icono" => "fas fa-shield-alt",
                        "url" => "xxx.php"
                    ),
                    "Buscar persona" => array(
                        "identificador" => "Acerca",
                        "icono" => "fas fa-question-circle",
                        "url" => "xxx.php"
                    ),
                    "xxx" => array(
                        "identificador" => "Cerrar sesion",
                        "icono" => "fas fa-door-open",
                        "url" => "xxx.php"
                    )
                )
            )
        );

        return $array;
    }
}
?>