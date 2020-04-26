<?php
    include_once('MenuOpcionesNegocio.php');
?>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
    <style type="text/css">
        .navegacion ul{
            list-style: none;
        }

        .submenu{
            visibility: hidden;
        }

        .menu li:hover .submenu{
            visibility: visible;
        }
        
    </style>
</head>
<body>
    <section class="mt-2">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggler" data-toggle="collapse"
                    data-target="#navegacion-fm" aria-controls="menu-principal" aria-expanded="false"
                    aria-label="Ver mas">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse ml-auto" id="navegacion-fm">
                    <ul class="nav navbar-nav">
                        <?php
                            $NegocioOpciones = new OptionsBussines();

                            $json = $NegocioOpciones->RequestOptions();

                            $someArray = json_decode($json, true);

                            for ($i=0; $i < count($someArray["Opciones"]); $i++) { 
                                if ($someArray["Opciones"][$i]["idisMain"] == "1") {
                                  ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <?php    
                                              echo $someArray["Opciones"][$i]["Title"];
                                          ?>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                          <?php    
                                              for ($s=0; $s < count($someArray["Opciones"][$i]["subOption"]); $s++) 
                                              { 
                                                ?>
                                                    <a class="dropdown-item" href="<?php echo $someArray["Opciones"][$i]["subOption"][$s]["Url"];?>">
                                                        <?php echo $someArray["Opciones"][$i]["subOption"][$s]["Title1"]; ?> 
                                                    </a>
                                                <?php
                                              }
                                          ?>
                                        </div>
                                    </li>
                                  <?php
                                }
                                elseif ($someArray["Opciones"][$i]["idisMain"] == "2"){
                                ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $someArray["Opciones"][$i]["Url"];?>">
                                            <?php    
                                              echo $someArray["Opciones"][$i]["Title"];
                                            ?>
                                        </a>
                                    </li>
                                <?php
                                }
                            }
                        ?> 
                    </ul>
                </div>  
            </div>
        </nav>
    </section>    

    <script src="style/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
