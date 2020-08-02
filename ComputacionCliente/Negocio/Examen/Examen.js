$(document).ready(function () {

  $('#BtAdd').on('click', function () {

      var QuestionArea = $('#QuestionArea').val();
      var DDQuestionTypeDes = $('#DDQuestionType option:selected').text();
      var DDQuestionType = $('#DDQuestionType').val();
      var TBAnswer = $('#TBAnswer').val();
      var TBoptionnumber = $('#TBNumberOption').val();

      var Tablebody='<tr>'+
            '<td>\
                <button class="btn btn bg-primary edit-register" id="edit-register"\>\
                    Editar <i class="fas fa-edit"></i>\
                </button><br/><br/>\
                <button class="btn btn bg-primary rid-register" id="rid-register"\>\
                    Eliminar <i class="fas fa-trash-alt"></i>\
                </button>\
            </td>'+
            '<th>1</th>'+
            '<td>'+QuestionArea+' </td>'+
            '<th>'+DDQuestionTypeDes+'</th>'+
            '<td>'+TBAnswer+'</td>'+
            '<td>'+DDQuestionType+'</td>'+
            '<td>'+'2'+'</td>'+
          '</tr>';

      $('#tbody-content').append(Tablebody);
  });

  $("#Table1").on("click", "#rid-register", function() {
    $(this).closest("tr").remove();
  });
});
 
 $('#TBNumberOption').on("keypress", function(e){
    if(e.which == 13){
    var TipoPregunta = $('#DDQuestionType').val();

    var Cantidad = $('#TBNumberOption').val();

    Campos(TipoPregunta,Cantidad);
                
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

function Campos(TipoPregunta,Cantidad)
{
  let construccion = "";

  console.log(TipoPregunta);
  console.log(Cantidad);
  if(TipoPregunta == 1)
  {
    for(i=0; i < Cantidad; i++)
    {
      construccion += '<div class=\"form-check disable mt-3\">'+
        '<input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios1\" value=\"option1\">'+
        '<label class=\"form-check-label\" for=\"exampleRadios1\">'+
          "Escriba su respuesta"+
        '</label>'+
        '</div>';
    }
  }
  else if(TipoPregunta == 2){
    for(i=0; i < Cantidad; i++)
    {
      construccion += '<div class=\"d-flex flex-column mt-3 flex-lg-row align-items-lg-center\">'+
        '<div class="\flex-fill my-1 mx-1\">'+
            '<label class=\"col-form-label\">Edit this for write text of answer</label></div>'+
            '<div class=\"flex-fill my-1 mx-1\">'+
            '<input type=\"text\" class=\"form-control\"/></div>'+
            '<div class=\"flex-fill my-1 mx-1\">'+
            '<label class="\col-form-label\">Edit this for write text of answer</label></div>'+
        '</div>';
    }
  }

  $("#ContainerViews").html(construccion);
}