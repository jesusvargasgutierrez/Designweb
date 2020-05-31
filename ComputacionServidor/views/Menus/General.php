<?php
    include_once('../Negocio/Menus/General.php');
?>
<html>
<head>
    <title></title>
</head>
<body>
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
                  $NegocioOpciones = new General();

                  $arregloOpciones = $NegocioOpciones->RequestOptions();

                  foreach($arregloOpciones as $key1 => $value1)
                  {
                    ?>
                        <div class="dropdown flex-fill mx-1">
                            <a href="#" role="button" id="ancle-options"
                            data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                            <i class="<?php echo $arregloOpciones[$key1]["icono"]; ?>"></i>
                                &nbsp;
                                <span class="d-none d-sm-none d-md-none d-lg-block">
                                    <?php echo $key1; ?>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="ancle-options">
                              <?php
                                 foreach($arregloOpciones[$key1]["Subopciones"] as $k1 => $v1)
                                 {
                                    ?>
                                        <a class="dropdown-item modulo" id="<?php echo $arregloOpciones[$key1]["Subopciones"][$k1]["identificador"]; ?>">
                                            <i class="<?php echo $arregloOpciones[$key1]["Subopciones"][$k1]["icono"]; ?>"></i>
                                            &nbsp;<?php echo $k1; ?>
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