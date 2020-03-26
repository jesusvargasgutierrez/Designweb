var url1 = "Acciones.php";
$(document).ready(function() {
    $("#Save").click(function() {
        var jsonform = JSON.stringify($("#formulario").serializeArray());

        $.ajax({
            type: "POST", //aqui puede ser igual get
            url: url1, //aqui va tu direccion donde esta tu funcion php
            datatype:"json",
            data:"datos="+jsonform, //aqui tus datos
            success: function(response) {
                alert(response);
            }
        });
    });
});