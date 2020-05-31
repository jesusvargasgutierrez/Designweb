var url1 = "../views/Menus/Opciones.php";
$(document).ready(function() {

    $(".modulo").click(function(){   
        var identificador = $(this).attr('id');

        $.ajax({
            type: "POST",
            url: url1,
            datatype:"json",
            data:"Identificador="+identificador
        })
        .done(function(response){
            $("#principales").html(response);
        })
   });

    $(".ItemAction").click(function(){   
       href = $(this).attr('href');
       $('#MainContent').load(href);
       //return false;
    });


});