var url1 = "../Negocio/Customer/Acciones.php";
var respuestax = "";
var responsejson1 = "";
$(document).ready(function() {
    $("#Save").click(function() {
        var jsonform = JSON.stringify($("#formulario").serializeArray());

        console.log(jsonform);
        $.ajax({
            type: "POST",
            url: url1,
            datatype:"json",
            data:"datos="+jsonform,
            success: function(response) {
              //alert(response);
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

    $("#Search").click(function() {
         HideControlsWuc();
         $("#secondview").addClass("d-block");
         $("#secondview").removeClass("d-none");
         $("#firstview").removeClass("d-block");
         $("#firstview").addClass("d-none");
         $("#tabscontrol").addClass("d-none");
    });

    $("#backview").click(function() {
        HideControlsWuc();
        $("#firstview").addClass("d-block");
        $("#firstview").removeClass("d-none");
        $("#secondview").removeClass("d-block");
        $("#secondview").addClass("d-none");
        $("#tabscontrol").addClass("d-block");
    });
    
});


function HideControlsWuc(){
    $("#dt_cliente_length").addClass("d-none");
    $("#dt_cliente_filter").addClass("d-none");
    $("#dt_cliente_paginate").addClass("d-none");
    $("#dt_cliente_info").addClass("d-none");
}

function Message(argument) {
     $.ajax({
        type: "POST",
        url: "../views/messages.php",
        datatype:"script",
        data:"respuesta="+argument,
     })
    .done(function(response){
        $("#message1").html(response);
    })
    .fail(function(){
         //alert(response);
    })
    .always(function(){
    });
}