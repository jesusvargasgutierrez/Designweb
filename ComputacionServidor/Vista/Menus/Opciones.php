<?php
    /**
     * se evalua primero si el identificador existe o no
     * en caso de existir se mostrara el html completo
     */
    if(isset($_POST["Identificador"])){
        include_once('../../Negocio/Menus/Opciones.php');
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
                            /**
                             * construccion del objeto
                             */
                            $NegocioOpciones = new OptionsBussines();
                            
                            /**
                             * la importancia de la primera evaluacion
                             * de no ser por el primer if de este archivo
                             * esto causaria una excepcion si la varible identificador fuera
                             * nula
                             */
                            $identificador = $_POST["Identificador"];

                            /**
                             * uso del objeto para retornar la
                             * matriz y construir las opciones
                             */
                            $opciones1 = $NegocioOpciones->RequestOptions($identificador);

                            /**
                             * evaluamos si el arreglo no esta vacio
                             * si no lo esta comienza el procesamiento
                             * de la construccion del menu opciones
                             */                            
                            if(empty($opciones1) == 0)
                            {
                                foreach($opciones1 as $key1 => $value1)
                                {
                                    // recorrer opciones arreglo para la construccion
                                    // del menu
                                    ?>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <?php    
                                                    //desplegamos el valor de la propiedad del arreglo
                                                    echo $key1;
                                                ?>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <?php    
                                                    /**
                                                     * funcion embebida para la construcion de subopciones
                                                    */
                                                    foreach($opciones1[$key1]["Subopciones"] as $k1 => $v1)
                                                    {
                                                    ?>
                                                        <a class="dropdown-item ItemAction" href="<?php echo $opciones1[$key1]["Subopciones"][$k1]["url"];?>">
                                                            <?php echo $k1; ?> 
                                                        </a>
                                                    <?php
                                                    }
                                                ?>
                                            </div>
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

    <script type="text/javascript">
        $(document).ready(function(){
            $(".ItemAction").click(function(){   
               href = $(this).attr('href');
               if (href != "") {
                 $('#MainContent').load(href);
               }else{
                $("#MainContent").html("<h5>No hay interfaz asociada aun</h5>");
               }
               return false;
            });
        });
    </script> 
</body>
</html>

<?php
}
/**
 * fin del if
 * aqui iria un else pero no es necesario por el momento
 */
?>