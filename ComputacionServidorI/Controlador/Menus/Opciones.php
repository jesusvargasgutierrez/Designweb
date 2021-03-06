<?php
class OptionsBussines
{   
            /**
             * funcion que evalua en cual opcion hizo click el usuario
             * en caso de que esta opcion aun no cuente con opciones 
             * retornara el mensaje en default
         */
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

    /**
    * declaracion de funciones para retornar el 
    *resultado en la funcion principal llamada
    *RequestOptions lo que retornar estas funciones independientes
    * es una matriz de arreglos de tipo clave => valor los
    *cuales influyen en la visualizacion del menu
    */
    function ObtenerCliente()
    {
        $array = array(
            "Proceso" => array(
                "identificador" => "Procesocl",
                "icono" => "fas fa-th-large",
                "url" => "",
                "Subopciones" => array(
                    "Registro" => array(
                        "identificador" => "Clientes",
                        "icono" => "fas fa-globe",
                        "url" => "../Vista/Clientes/RegistroCliente.php"
                    )
                )
            ),
            "Escuela" => array(
                "identificador" => "Escuela",
                "icono" => "fas fa-school",
                "url" => "",
                "Subopciones" => array(
                    "Registro" => array(
                        "identificador" => "Registro",
                        "icono" => "fas fa-book-open",
                        "url" => "../Vista/Escuela/RegistroEscuela.php"
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