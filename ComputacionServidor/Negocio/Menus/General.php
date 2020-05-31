<?php
class General
{
    function RequestOptions()
    {
        $array = array(
            "Modulos" => array(
                "identificador" => "Modulos",
                "icono" => "fas fa-th-large",
                "url" => "",
                "Subopciones" => array(
                    "Clientes" => array(
                        "identificador" => "Clientes",
                        "icono" => "fas fa-users",
                        "url" => "",
                    ),
                    "Seguridad" => array(
                        "identificador" => "Seguridad",
                        "icono" => "fas fa-shield-alt",
                        "url" => ""
                    ),
                    "Usuarios" => array(
                        "identificador" => "Usuarios",
                        "icono" => "fas fa-user",
                        "url" => ""
                    ),
                    "Examenes" => array(
                        "identificador" => "Examenes",
                        "icono" => "fas fa-cubes",
                        "url" => "",
                    ),
                    "Empleados" => array(
                        "identificador" => "Cerrar sesion",
                        "icono" => "fas fa-building",
                        "url" => ""
                    )
                )
            )
        );

        return $array;
    }
}
?>