/**
 * la implementacion de esta clase de javascript
 * fue para el manejo de eventos de postback
 * con ayuda de ajax se evita la recarga de la pagina y
 * la sincronia de que se visualice todo en una misma pagina
 */
var url1 = "../Vista/Menus/Opciones.php";
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

});