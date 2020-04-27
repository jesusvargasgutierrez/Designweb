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
        <nav class="navbar navbar-expand-md">
            <div class="container">
               <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-menu-acciones"
                   aria-controls="nav-menu-acciones" aria-expanded="false" aria-label="Opciones">
                  <span class="navbar-toggler-icon"></span>
               </button>
               
               <div class="collapse navbar-collapse" id="nav-menu-acciones">
                   <section class="container d-flex justify-content-center">
                       <div class="flex-fill">
                           <span>
                              <button type="button" name="Search" id="Search" class="btn btn">
                                 <i class="fas fa-plus-circle"></i>&nbsp;Add
                              </button>
                           </span>
                       </div>
                       <div class="flex-fill">
                          <span>
                             <button type="button" name="Search" id="Search" class="btn btn">
                               <i class="fas fa-search"></i>&nbsp;Preliminar view
                             </button>
                          </span>
                       </div>
                       <div class="flex-fill">
                        <span>
                            <button type="button" id="Save" name="Save" class="btn">
                              <i class="fas fa-save"></i></span>&nbsp;Save
                            </button>
                        </span>
                       </div>
                   </section>
               </div>
           </div>
        </nav>
    
        <div id="firstview" class="firstview container">
            <div class="tab-content" id="Sections-content">
                <section class="tab-pane fade show active" role="tabpanel" aria-labelledby="pseills-home-tab" id="General-Section">
                        <div class="d-flex flex-column mt-3 flex-lg-row align-items-lg-center">
                            <div class="flex-fill my-1 mx-1">
                                <label for="QuestionArea">Instructions:</label>
                                <textarea class="form-control" id="QuestionArea" rows="1"></textarea>
                            </div>
                            <div class="flex-fill my-1 mx-1">
                              <div class="form-group">
                                <label for="DDQuestionType">Question Type:</label>
                                <select class="form-control" id="DDQuestionType">
                                  <option selected value="0">Selection</option>
                                  <option value="1">Multiple Option</option>
                                  <option value="2">Field Fill</option>
                                  <option value="3">Write Text</option>
                                </select>
                              </div>  
                            </div>
                            <div class="flex-fill my-1 mx-1">
                              <div class="form-group">
                                <label for="TBNumberOption">Number Options:</label>
                                <div class=" my-1 mx-1">
                                    <input type="text" class="form-control" width="12px" id="TBNumberOption" placeholder="Number Option"/>
                                </div>
                              </div>  
                            </div>
                        </div>
                </section>
            </div>
        </div>

      <div id="secondview" class="secondview container">
        <div id="Viewmultipleoption" class="Viewmultipleoption d-none">
            <div class="d-flex flex-column mt-3 flex-lg-row align-items-lg-center">
                <label for="TBQuestion">Question:</label>
                <div class="flex-fill my-1 mx-1">
                    <input type="text" class="form-control" id="TBQuestion" name="TBQuestion" placeholder="Question"/>
                </div>
            </div>

            <div class="d-flex flex-column mt-3 flex-lg-row align-items-lg-center">
                <label for="TBAnswer">Answer:</label>
                <div class="flex-fill my-1 mx-1">
                    <input type="text" class="form-control" id="TBAnswer" placeholder="Answer"/>
                </div>
            </div>
        </div>

        <div id="ViewFieldsfill" class="ViewFieldsfill d-none">
            <div class="d-flex flex-column mt-3 flex-lg-row align-items-lg-center">
                <label for="TBAnswer">Answer:</label>
                <div class="flex-fill my-1 mx-1">
                    <input type="text" class="form-control" id="TBAnswer" placeholder="Answer"/>
                </div>
            </div>
        </div>
     </div>

    <div id="ContainerViews" class="ContainerViews container">

    </div>        

    <script src="scriptExampletext.js"></script>
    <script src="../script/script-Ejemplos.js"></script>
    <script src="../style/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
