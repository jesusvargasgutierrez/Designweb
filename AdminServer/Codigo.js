$(document).ready(function() {
    $(".accion1").click(function() {
        var Direccion = "vistas/"+$(this).attr('value');
        var Vista = $(this).data('id');

        ObtenerCodigo(Direccion,Vista);

    });
});   

function Showviews(Mostrarclase){
    var countchild = $("#dvInformation").children().length;

        $("."+Mostrarclase).addClass("d-block");

        $("."+Mostrarclase).removeClass("d-none");

        for (var i = 0; i < countchild; i++) {
            var claseocultar = $("#dvInformation").children()[i].className;

            if (claseocultar != Mostrarclase) {
                $("."+claseocultar).addClass("d-none");
            }
        }
}

function ObtenerCodigo(url,vista)
{
        /**
         * realizamos una peticion get 
         * para obtener la estructura
         */
        $.get(url, function(html){
            $("#dvInformation").html(html);

            Showviews(vista);
        });
}