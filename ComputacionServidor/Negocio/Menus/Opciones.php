<?php
class OptionsBussines
{
    function RequestOptions($ClaveModulo)
    {
        switch($ClaveModulo)
        {
            case "Clientes":
               return $this->ObtenerCliente();
            break;
            case 'Seguridad':
                return $this->Obtenerseguridad();
            break;
            case 'Usuarios':
                return $this->Obtenerusuario();
            break;
            default:
                echo "no existen opciones para este modulo";
            break;
        }
    }

    function ObtenerCliente()
    {
        $array = array(
            "Catalogo" => array(
                "identificador" => "Catalogocl",
                "icono" => "fas fa-th-large",
                "url" => "",
                "Subopciones" => array(
                    "Paises" => array(
                        "identificador" => "CatalogoPaises",
                        "icono" => "",
                        "url" => ""
                    ),
                    "Estados" => array(
                        "identificador" => "CatalogoEstados",
                        "icono" => "",
                        "url" => ""
                    ),
                    "Ciudades" => array(
                        "identificador" => "CatalogoCiudades",
                        "icono" => "",
                        "url" => ""
                    )
                )
            ),
            "Proceso" => array(
                "identificador" => "Procesocl",
                "icono" => "fas fa-th-large",
                "url" => "",
                "Subopciones" => array(
                    "Registro" => array(
                        "identificador" => "Clientes",
                        "icono" => "fas fa-globe",
                        "url" => "../views/Customer/Register.php"
                    ),
                    "Prospecto" => array(
                        "identificador" => "Prospecto",
                        "icono" => "",
                        "url" => ""
                    ),
                    "Buscar persona" => array(
                        "identificador" => "Acerca",
                        "icono" => "fas fa-question-circle",
                        "url" => ""
                    )
                )
            ),
            "Reportes" => array(
                "identificador" => "ReportesCl",
                "icono" => "fas fa-th-large",
                "url" => "",
                "Subopciones" => array(
                    "Clientes" => array(
                        "identificador" => "RepClientes",
                        "icono" => "fas fa-globe",
                        "url" => ""
                    ),
                    "Prospecto" => array(
                        "identificador" => "RepProspecto",
                        "icono" => "fas fa-shield-alt",
                        "url" => ""
                    )
                )
            )
        );

        return $array;
    }

    function Obtenerseguridad()
    {
        $array = array(
            "Catalogo" => array(
                "identificador" => "",
                "icono" => "fas fa-th-large",
                "url" => "",
                "Subopciones" => array(
                    "Notificaciones" => array(
                        "identificador" => "CatalogoNotificaciones",
                        "icono" => "",
                        "url" => ""
                    ),
                    "Acceso" => array(
                        "identificador" => "CatalogoAcceso",
                        "icono" => "",
                        "url" => ""
                    )
                )
            ),
            "Proceso" => array(
                "identificador" => "",
                "icono" => "fas fa-th-large",
                "url" => "",
                "Subopciones" => array(
                    "Registro" => array(
                        "identificador" => "RegSeguridad",
                        "icono" => "fas fa-globe",
                        "url" => ""
                    ),
                    "Notificaciones" => array(
                        "identificador" => "RegNotificacion",
                        "icono" => "",
                        "url" => ""
                    )
                )
            ),
            "Reportes" => array(
                "identificador" => "RepBitacora",
                "icono" => "",
                "url" => "",
                "Subopciones" => array(
                    "Bitacora" => array(
                        "identificador" => "RepBitacora",
                        "icono" => "",
                        "url" => ""
                    )
                )
            )
        );

        return $array;
    }

    function Obtenerusuario()
    {
        $array = array(
            "Proceso" => array(
                "identificador" => "Mod",
                "icono" => "fas fa-th-large",
                "url" => "",
                "Subopciones" => array(
                    "Registro" => array(
                        "identificador" => "Usuario",
                        "icono" => "",
                        "url" => ""
                    ),
                    "Acceso al sistema" => array(
                        "identificador" => "Accesositemausu",
                        "icono" => "",
                        "url" => ""
                    )
                )
            ),
            "Reportes" => array(
                "identificador" => "ReposrtesUsuario",
                "icono" => "",
                "url" => "",
                "Subopciones" => array(
                    "Usuarios" => array(
                        "identificador" => "RepUsuario",
                        "icono" => "",
                        "url" => "",
                    )
                )
            )
        );

        return $array;
    }
}
?>