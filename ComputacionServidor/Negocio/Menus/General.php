<?php
class General
{
    function RequestOptions()
    {
        $array = array(
            "Modulos" => array(
                "identificador" => "Mod",
                "icono" => "fas fa-th-large",
                "url" => "www.google.com",
                "Subopciones" => array(
                    "Clientes" => array(
                        "identificador" => "Clientes",
                        "icono" => "fas fa-globe",
                        "url" => "www.google.com",
                    ),
                    "Seguridad" => array(
                        "identificador" => "Seguridad",
                        "icono" => "fas fa-shield-alt",
                        "url" => "xxx.php"
                    ),
                    "Acerca de" => array(
                        "identificador" => "Acerca",
                        "icono" => "fas fa-question-circle",
                        "url" => "xxx.php"
                    ),
                    "Cerrar Sesion" => array(
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