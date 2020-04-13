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
<body class="">
    <div class="message1" id="message1">
        
    </div>

    <?php
      include_once('MenuGeneral.php');
    ?>

    <?php
      include_once('MenuOpciones.php');
    ?>

    <?php
      include_once('MenuAcciones.php');
    ?>

    <div id="MainContent" name="MainContent">
        <div id="firstview" class="firstview">
            <div class="tab-content" id="Sections-content">
                <section class="tab-pane fade show active" role="tabpanel" aria-labelledby="pseills-home-tab" id="General-Section">
                    <form action="Account.php" id="formulario" name="formulario" method="POST">
                        <div class="d-flex flex-column my-1 flex-lg-row align-items-lg-center">
                            <div class="flex-fill">
                                <label class="col-form-label">Client ID:</label>
                                <input type="text" id="Code1" name="Code1" value="01" disabled class="form-control-sm enabled" placeholder=""/>
                                <a href="#" role="button" id="ancle-options" class="btn btn-info">
                                    <i class="fas fa-search"></i>
                                </a>
                                <label class="col-form-label">Equivalencia:</label>
                                <input type="text" id="Equivalence" name="Equivalence" value="Client1" placeholder="Equivalence"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column mt-3 flex-lg-row align-items-lg-center">
                            <div class="flex-fill order-3 my-1 mx-1">
                                <input type="text" class="form-control" value="Full Name" id="FullName" name="FullName" placeholder="Full name"/>
                            </div>
                            <div class="flex-fill order-0 my-1 mx-1">
                                <input type="text" class="form-control" value="Names" id="Names" name="Names" placeholder="Names"/>
                            </div>
                            <div class="flex-fill order-1 my-1 mx-1">
                                <input type="text" class="form-control" value="First Name" id="Firstname" name="Firstname" placeholder="First name"/>
                            </div>
                            <div class="flex-fill order-2 my-1 mx-1">
                                <input type="text" class="form-control" value="Second-name" id="Secondname" name="Secondname" placeholder="Surname"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column mt-3 mt-md-2 flex-lg-row align-items-lg-center">
                            <div class="flex-fill my-1 mx-1">
                                <input class="form-control" id="DateBird" name="DateBird" value="1993/02/08" type="date">
                            </div>
                            <div class="flex-fill my-1 mx-1">
                                <input type="text" class="form-control" id="age" name="age" value="27" disabled placeholder="Age"/>
                            </div>
                            <div class="flex-fill my-1 mx-1">
                                <select class="form-control" id="select-gender" name="idGender">
                                    <option selected value="1">Selection Gender</option>
                                    <option>Male</option>
                                    <option>Femaile</option>
                                </select>
                            </div>
                            <div class="flex-fill my-1 mx-1">
                                <select class="form-control" id="select-maritalstatus" name="idMaritalStatus">
                                    <option>Selection marital status</option>
                                    <option selected value="2">Single</option>
                                    <option>Married</option>
                                </select>   
                            </div>
                        </div>

                        <input type="hidden" id="HdAction" name="HdAction" value="ConsultarCliente"> 
                    </form>
                </section>
            </div>
        </div>

        <div id="secondview" class="d-none">           
            <?php
              include_once('../datatable/Wucsearch.php');
            ?>
        </div>
    </div>

    <script src="../datatable/js/jquery-1.12.3.js"></script>
    <script src="../datatable/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            listar();
        });

        var listar = function(){
            var dtTable = $("#dt_cliente").DataTable({
                "ajax":{
                    "method":"POST",
                    "url":"../datatable/jsonarray.php"
                },
                "columns":[
                    {"data":"idCustomer"},
                    {"data":"Equivalence"},
                    {"data":"Names"}
                ]
            });
        }
    </script>
</body>
</html>
