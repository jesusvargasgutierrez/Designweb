$(document).ready(function () {

    $('.Guardar').on('click', function () {
        Message();
    });

    $('#SegundoApellido').change(function() {
        NombreCompleto = document.getElementById("NombreCompleto");

        Nombres = $('#Nombres').val();
        ApellidoParterno = $('#PrimerApellido').val();
        ApellidoMaterno = $('#SegundoApellido').val();

        NombreCompleto.value = Nombres.toUpperCase() + " " + ApellidoParterno.toUpperCase() + " " + ApellidoMaterno.toUpperCase();
    });

    $('#Nacimiento').change(function() {
        var date = new Date($(this).val());

        $('#edad').val(CalcularEdad(date.getFullYear()));
    });

    function Message() {
        let url = "../Negocio/Cliente/Mensajes.html";

        $.get(url, function(html){
            $("#message1").html(html);
        });
   }
});

function Valor_mayusculas(Valor)
{
    return Valor.toUpperCase()
}

function CalcularEdad(Valor)
{
    var anio = (new Date).getFullYear();

    let edad = anio - Valor;

    return edad;
}