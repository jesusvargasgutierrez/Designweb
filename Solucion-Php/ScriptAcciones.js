var url1 = "Acciones.php";
var respuestax = "";
$(document).ready(function() {
    $("#Save").click(function() {
        var jsonform = JSON.stringify($("#formulario").serializeArray());

        $.ajax({
            type: "POST", //aqui puede ser igual get
            url: url1, //aqui va tu direccion donde esta tu funcion php
            datatype:"json",
            data:"datos="+jsonform, //aqui tus datos
            success: function(response) {
               respuestax = response;
            }
        })
        .done(function(){
            Message(respuestax);
        })
        .fail(function(){

        })
        .always(function(){

        });
    });
});

function Message(argument) {
    $.ajax({
        type: "POST", //aqui puede ser igual get
        url: "views/messages.php",
        datatype:"script", //aqui va tu direccion donde esta tu funcion php
        data:"respuesta="+argument,//aqui tus datos
    })
    .done(function(response){
        $("#message1").html(response);
    })
    .fail(function(){
        alert("fail");
    })
    .always(function(){
        //alert("always");
    });;
}