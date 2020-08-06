<?php
/**
 * incluimos el menu general y realiza el
 * procesamiento de la matriz correspondiente
 */
    include_once('../Negocio/Menus/Modulos.php');
?>
<html>
<head>
    <title></title>
</head>
<body>
    <!-- clase nav principal para el menu -->
    <nav class="page-header navbar navbar-light bg-lignt navbar-expand-md">
        <a class="navbar-brand" href="#">
            <span class="h4">
                Proyecto web
            </span>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse"
        data-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false"
        aria-label="Ver mas">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu-principal">
            <div class="d-flex text-center ml-auto">
                <?php
                    /**
                     * objeto de la clase Modulos
                     */
                  $NegocioModulos = new Modulos();

                  /**
                   * uso del objeto previo y llamada a la funcion para 
                   * retornar la matriz de arreglo para comenzar
                   * con el procesamiento del mismo
                   */
                  $arregloModulos = $NegocioModulos->ObtenerModulos();

                  /**
                   * inicia el procesamiento de
                   * la matriz para la construccion dinamica del menu
                   * 
                   */
                  foreach($arregloModulos as $key1 => $value1)
                  {
                    ?>
                        <!-- construccion del menu con div y php embebido -->
                        <div class="dropdown flex-fill mx-1">
                            <a href="#" role="button" id="ancle-options"
                            data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                            <i class="<?php echo $arregloModulos[$key1]["icono"]; ?>"></i>
                                &nbsp;
                                <span class="d-none d-sm-none d-md-none d-lg-block">
                                    <?php echo $key1; ?>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="ancle-options">
                              <?php
                              /**
                               * uso de PHP embebido para la construccion de la subopcion en caso
                               * de que exista
                               */
                                 foreach($arregloModulos[$key1]["Subopciones"] as $k1 => $v1)
                                 {
                                    ?>
                                        <a class="dropdown-item modulo" id="<?php echo $arregloModulos[$key1]["Subopciones"][$k1]["Identificador"]; ?>">
                                            <i class="<?php echo $arregloModulos[$key1]["Subopciones"][$k1]["Icono"]; ?>"></i>
                                            &nbsp;<?php echo $arregloModulos[$key1]["Subopciones"][$k1]["Texto"]; ?>
                                        </a>
                                    <?php
                                 }  
                              ?>
                            </div>
                        </div>
                    <?php
                  }
                ?>
            </div>
        </div>
    </nav>

</body>
</html>