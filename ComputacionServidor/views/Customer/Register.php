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
</head>
<body class="">
    <?php
      include_once('../Menus/Actions.php');
    ?>

    <div class="container mt-3" id="tabscontrol">
        <ul class="nav row nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="col-lg-3 nav-item col-12 text-center">
              <a class="nav-link active" id="pills-General-Section" data-toggle="pill" href="#General-Section" 
              role="tab" aria-controls="General-Section" aria-selected="true">General Information</a>
            </li>
            <li class="col-lg-3 nav-item col-12 text-center">
              <a class="nav-link" id="pills-Address-Section" data-toggle="pill" href="#Address-Section" 
              role="tab" aria-controls="Address-Section" aria-selected="false">Address</a>
            </li>
        </ul>
    </div>

    <div id="firstview" class="firstview">
            <form action="" id="formulario" name="formulario" class="tab-content" method="POST">
                <section class="tab-pane fade show active" role="tabpanel" aria-labelledby="pseills-home-tab" id="General-Section">
                    <div class="d-flex flex-column my-1 flex-lg-row align-items-lg-center">
                        <div class="flex-fill">
                            <label class="col-form-label">Client ID:</label>
                            <input type="text" id="Code1" name="Code1" value="01" disabled class="form-control-sm enabled" placeholder="" />
                            <a href="#" role="button" id="ancle-options" class="btn btn-info">
                                <i class="fas fa-search"></i>
                            </a>
                            <label class="col-form-label">Equivalencia:</label>
                            <input type="text" id="Equivalence" name="Equivalence" value="Client1" placeholder="Equivalence" />
                        </div>
                    </div>
                    <div class="d-flex flex-column mt-3 flex-lg-row align-items-lg-center">
                        <div class="flex-fill order-3 my-1 mx-1">
                            <input type="text" class="form-control" value="Full Name" id="FullName" name="FullName" placeholder="Full name" />
                        </div>
                        <div class="flex-fill order-0 my-1 mx-1">
                            <input type="text" class="form-control" value="Names" id="Names" name="Names" placeholder="Names" />
                        </div>
                        <div class="flex-fill order-1 my-1 mx-1">
                            <input type="text" class="form-control" value="First Name" id="Firstname" name="Firstname" placeholder="First name" />
                        </div>
                        <div class="flex-fill order-2 my-1 mx-1">
                            <input type="text" class="form-control" value="Second-name" id="Secondname" name="Secondname" placeholder="Surname" />
                        </div>
                    </div>
                    <div class="d-flex flex-column mt-3 mt-md-2 flex-lg-row align-items-lg-center">
                        <div class="flex-fill my-1 mx-1">
                            <input class="form-control" id="DateBird" name="DateBird" value="1993/02/08" type="date">
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <input type="text" class="form-control" id="age" name="age" value="27" disabled placeholder="Age" />
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
                </section>

                <section class="tab-pane fade show active" role="tabpanel" aria-labelledby="pills-home-tab" id="Address-Section">
                    <div class="d-flex flex-column mt-3 flex-lg-row align-items-lg-center">
                        <div class="flex-fill my-1 mx-1">
                            <input type="text" class="form-control" value="Address" placeholder="Address" name="address" id="address" />
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <input type="text" class="form-control" value="262" placeholder="Internal Number" name="intnumber" id="intnumber" />
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <input type="text" class="form-control" placeholder="External Number" name="exnumber" id="exnumber" />
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <input type="text" class="form-control" value="colony" placeholder="colony" name="colony" id="colony" />
                        </div>
                    </div>
                    <div class="d-flex flex-column mt-3 flex-lg-row align-items-lg-center">
                        <div class="flex-fill my-1 mx-1">
                            <input type="text" class="form-control" value="city" placeholder="City" name="city" id="city" />
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <select class="form-control" id="DDstate" name="DDstate">
                                <option selected>Selection State</option>
                                <option>Chihuahua</option>
                                <option>Durango</option>
                            </select>
                        </div>
                        <div class="flex-fill my-1 mx-1">
                            <select class="form-control" id="DDlocation" name="DDlocation">
                                <option selected>Selection Locality</option>
                                <option>Lorem ipsum dolor sit amet</option>
                            </select>
                        </div>
                    </div>
                </section>

                <input type="hidden" id="HdAction" name="HdAction" value="GuardarCliente">
            </form>
    </div>
</body>
</html>
