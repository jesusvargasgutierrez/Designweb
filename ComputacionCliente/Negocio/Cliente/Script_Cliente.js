$(document).ready(function () {

    $('.Guardar').on('click', function () {
        validar();
        //Message();
    });

    $('.Nuevo').on('click', function () {
        Limpiar();
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

function validar()
{
    let identificadores = [];
    let valores = [];

    $(".selectores").find(':input').each(function() {
        var elemento = this;
        identificadores.push(elemento.id);
        valores.push(elemento.value);
    });

    let eliminar = ["Identificador"];

    $.each(valores, function( index, value ) {
        if(eliminar.indexOf(identificadores[index]) >= 0){ return;}

        if((value == "" || value == 1))
        {
            $('#'+identificadores[index]).css("border-color", "red");
        }
    });
}

function EliminarPosicion(arreglo,eliminar,valores)
{
    let arreglos = [];
    $.each(eliminar, function( index, valor ) {
        arreglo = $.grep(arreglo, function(value) {
            return value != valor;
        });

        valores = valores.splice(index,1);
    });

    arreglos.push(arreglo,valores);

    return arreglos;
}

function Limpiar()
{
    let identificadores = [];
    let valores = [];

    $(".selectores").find(':input').each(function() {
        var elemento = this;
        identificadores.push(elemento.id);
        valores.push(elemento.value);
    });
    
    $.each(valores, function( index, value ) {
        var tipocontrol = $('#'+identificadores[index]).attr('type');

        if((value != "" || value == "") && tipocontrol == "text")
        {
            $('#'+identificadores[index]).css("border-color", "black");
            $('#'+identificadores[index]).val('');
        }
        else if((value >= 1))
        {
            $('#'+identificadores[index]).css("border-color", "black");
            $('#'+identificadores[index]).val(1);
        }else if(tipocontrol == "date")
        {
            $('#'+identificadores[index]).css("border-color", "black");
            $('#'+identificadores[index]).val('');
        }
    });
}

function validarexpresion(valor,expresion)
{
    alert(expresion.test(valor));
}