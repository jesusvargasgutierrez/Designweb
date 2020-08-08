/**
 * la implementacion de esta clase de javascript
 * fue para el manejo de eventos de postback
 * con ayuda de ajax se evita la recarga de la pagina y
 * la sincronia de que se visualice todo en una misma pagina
 */
var url1 = "../../Controlador/Login/login.php";
$(document).ready(function() {

    $("#inicio").click(function(){   
        /**
         * arreglo propiedad valor
         * para llevar el codigo y las credenciales
         */
        let arreglosesion = {
            Codigo: $("#Codigo").val(), 
            Usuario:$("#Usuario").val(),
            contrasenia:$("#contrasenia").val()
        };

        /*
        *se convierten los campos
        * en JSON
        */
        var jsonsesion = JSON.stringify(arreglosesion);

        /**
         * peticion utilizando AJAX
         * a la URL especificada
         */
        $.ajax({
            type: "POST",
            url: url1,
            datatype:"json",
            data:"Sesion="+jsonsesion
        })
        .done(function(response){
            /**
             * se evalua si la respuesta esta vacia
             * 
             */
            if(response == "")
            {
                /**
                 * se envia a la pagina de inicio
                 */
                window.location.href ="../../Vista/Inicio.php";
            }
            else{
                /**
                 * aparece un mensaje de error en el login
                 */
                $("#mensaje").html(response);
            }
        })
   });

});