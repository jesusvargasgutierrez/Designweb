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

                        $json = $NegocioOpciones->RequestOptions();

                        $someArray = json_decode($json, true);

                        for ($i=0; $i < count($someArray["General"]); $i++)
                        {
                            ?>
                                <div class="dropdown flex-fill mx-1">
                                    <a href="#" role="button" id="ancle-options"
                                        data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                        <i class="<?php echo $someArray["General"][$i]["Image"]?>"></i>
                                        &nbsp;
                                        <span class="d-none d-sm-none d-md-none d-lg-block">
                                            <?php echo $someArray["General"][$i]["Title"]; ?>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="ancle-options">
                                        <?php    
                                            for ($s=0; $s < count($someArray["General"][$i]["subOption"]); $s++) 
                                            { 
                                              ?>
                                                <a class="dropdown-item" href="<?php echo $someArray["General"][$i]["subOption"][$s]["Url"];?>">
                                                    <i class="<?php echo $someArray["General"][$i]["subOption"][$s]["Image"];?>"></i>
                                                    &nbsp;<?php echo $someArray["General"][$i]["subOption"][$s]["Title1"]; ?>
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