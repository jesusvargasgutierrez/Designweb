 $('#TBNumberOption').on("keypress", function(e){
                if(e.which == 13){
                    //alert($('#TBNumberOption').val());
                    var Valuetypequestion = $('#DDQuestionType').val();

                    var numberx = $('#TBNumberOption').val();

                    var buildjson = JSON.stringify({Numbercontrols: numberx, DDValue: Valuetypequestion}); 

                       $.ajax({
                            type: "POST",
                            url: "../Negocio/Test/Base.php",
                            datatype:"script",
                            data:"respuestas="+buildjson,
                        })
                        .done(function(response){
                          //alert(response);
                          $("#ContainerViews").html(response);
                        })
                        .fail(function(response){
                            alert("fail");
                        })
                        .always(function(){
                        });
               }
            });


$("#DDQuestionType").change(function() {
  var ValorDD = $('#DDQuestionType').val();

  if (ValorDD == "0") 
  {
    Showviews("",ValorDD);
  }
  else if (ValorDD == "1") 
  {
    Showviews("Viewmultipleoption",ValorDD);
  }
  else if(ValorDD == "2")
  {
    Showviews("ViewFieldsfill",ValorDD);
  }
  else if(ValorDD == "3")
  {

  }

    
  $("#ContainerViews").html("");
});

function Showviews(iddivshow,valordrop){
    var countchild = $("#secondview").children().length;

    if (valordrop != 0) 
    {
        $("#"+iddivshow).addClass("d-block");

        $("#"+iddivshow).removeClass("d-none");

        for (var i = 0; i < countchild; i++) {
            var iddivhide = $("#secondview").children()[i].id;

            if ( iddivhide != iddivshow) {
                $("#"+iddivhide).addClass("d-none");
                $("#"+iddivhide).removeClass("d-block");
            }
        }
    }
    else
    {
        for (var i = 0; i < countchild; i++) {
            var iddivhide = $("#secondview").children()[i].id;

            $("#"+iddivhide).addClass("d-none");

            $("#"+iddivhide).removeClass("d-block");
        }
    }
}