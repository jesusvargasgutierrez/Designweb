var url1 = "Acciones.php";
var respuestax = "";
var responsejson1 = "";
$(document).ready(function() {
    $("#Save").click(function() {
        var jsonform = JSON.stringify($("#formulario").serializeArray());

        $.ajax({
            type: "POST",
            url: url1,
            datatype:"json",
            data:"datos="+jsonform,
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

    $("#Search").click(function() {
         HideControlsWuc();
         $("#secondview").addClass("d-block");
         $("#secondview").removeClass("d-none");
         $("#firstview").removeClass("d-block");
         $("#firstview").addClass("d-none");
    });

    $("#backview").click(function() {
        HideControlsWuc();
        $("#firstview").addClass("d-block");
        $("#firstview").removeClass("d-none");
        $("#secondview").removeClass("d-block");
        $("#secondview").addClass("d-none");
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
        type: "POST", //aqui puede ser igual get
        url: "views/messages.php",
        datatype:"script", //aqui va tu direccion donde esta tu funcion php
        data:"respuesta="+argument,//aqui tus datos
    })
    .done(function(response){
        $("#message1").html(response);
    })
    .fail(function(){
        alert(response);
    })
    .always(function(){
        //alert("always");
    });;
}