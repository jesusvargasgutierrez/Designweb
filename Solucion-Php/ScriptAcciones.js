var url1 = "Acciones.php";
$(document).ready(function() {
    $("#Save").click(function() {
        var arrayproperty = [];
        var arrayvalue = [];
        var arrayjson = [];

        $("#formulario").find(':input').each(function() {
            var elemento = this;
            if (elemento.id == 'Code1' && elemento.value == '') {
                arrayproperty.push("Guardar");
                arrayvalue.push("1");
                arrayjson.push("Guardar:1");
            }
            else if(elemento.id == 'Code1' && elemento.value != '') {
                arrayproperty.push("Guardar");
                arrayvalue.push("2");
                arrayjson.push("Guardar:2");
            }

            arrayproperty.push(elemento.id);
            arrayvalue.push(elemento.value);
            arrayjson.push(elemento.id+":"+elemento.value+"");
            //alert("elemento.id=" + elemento.id + ", elemento.value=" + elemento.value);
        });

        //array.push(elemento.value);

        //array.push("elemento.id="+ elemento.id + ", elemento.value=" + elemento.value);

        $.ajax({
            type: "POST", //aqui puede ser igual get
            url: url1, //aqui va tu direccion donde esta tu funcion php
            data: "datos=" + arrayjson, //aqui tus datos
            success: function(response) {
                alert(response);
            }
        });
    });
});