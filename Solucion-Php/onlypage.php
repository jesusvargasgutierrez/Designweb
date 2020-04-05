<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="ScriptAcciones.js" type="text/javascript"></script>

</head>
<body id="body1">
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
                        <li class="nav-item">
                            <a class="nav-link" href="Content1.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Servicios
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="Content1.php#MainContent">consectetur adipisicing elit</a>
                            </div>
                        </li>
                    </ul>
                </div>  
            </div>
        </nav>
    </section>

    <section class="MainContent" id="MainContent">
        
    </section>


    <script>
    $(document).ready(function() {
        $('.MainContent').load('Content1.php#MainContent');
    });
    </script>

    <script src="style/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
