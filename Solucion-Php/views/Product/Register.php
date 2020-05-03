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

    <script src="../Negocio/Customer/ScriptAcciones.js" type="text/javascript"></script>
</head>
<body class="">
    <?php
      include_once('../Menus/Actions.php');
    ?>

    <div id="firstview" class="firstview">
            <div class="tab-content" id="Sections-content">
                <section class="tab-pane fade show active" role="tabpanel" aria-labelledby="pseills-home-tab" id="General-Section">
                    <form action="Account.php" id="formulario" name="formulario" method="POST">
                        <div class="d-flex flex-column my-1 flex-lg-row align-items-lg-center">
                            <div class="flex-fill">
                                <label class="col-form-label">Product ID:</label>
                                <input type="text" id="Code1" name="Code1" value="01" disabled class="form-control-sm enabled" placeholder=""/>
                                <a href="#" role="button" id="ancle-options" class="btn btn-info">
                                    <i class="fas fa-search"></i>
                                </a>
                                <label class="col-form-label">Equivalencia:</label>
                                <input type="text" id="Equivalence" name="Equivalence" value="Client1" placeholder="Equivalence"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column mt-3 flex-lg-row align-items-lg-center">
                            <div class="flex-fill my-1 mx-1">
                                <input type="text" class="form-control" value="Description" id="Description" name="Description" placeholder="Description"/>
                            </div>
                        </div> 
                        <div class="d-flex flex-column mt-3 flex-lg-row align-items-lg-center">

                            <div class="flex-fill my-1 mx-1">
                                <select class="form-control" id="select-Mark" name="DDMark">
                                    <option selected value="1">Mark</option>
                                    <option>Mark 1</option>
                                </select>
                            </div>
                            <div class="flex-fill my-1 mx-1">
                                <input type="text" class="form-control" value="Unit Price" id="unitprice" name="unitprice" placeholder="unitprice"/>
                            </div>
                            <div class="flex-fill my-1 mx-1">
                                <input type="text" class="form-control" value="quantity" id="quantity" name="quantity" placeholder="Quantity"/>
                            </div>
                            <div class="flex-fill my-1 mx-1">
                                <input type="text" class="form-control" id="quantitymax" name="quantitymax" value="quantitymax" placeholder="Quantity Max"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column mt-3 mt-md-2 flex-lg-row align-items-lg-center">
                            <div class="flex-fill my-1 mx-1">
                                <input class="form-control" id="Dateinput" name="Dateinput" value="1993/02/08" type="date">
                            </div>
                            <div class="flex-fill my-1 mx-1">
                                <input class="form-control" id="Datedie" name="Datedie" value="1993/02/08" type="date">
                            </div>
                            <div class="flex-fill my-1 mx-1">
                                <select class="form-control" id="select-Category" name="DDcategory">
                                    <option selected value="1">Category</option>
                                    <option>Category 1</option>
                                </select>
                            </div>
                        </div>

                        <input type="hidden" id="HdAction" name="HdAction" value="GuardarCliente"> 
                    </form>
                </section>
            </div>
    </div>

    <div id="secondview" class="d-none">           
        <?php
         $_POST["Consulta"] = "ConsultarCliente";

           include_once('Search.php');
        ?>
    </div>

</body>
</html>
