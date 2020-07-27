$(document).ready(function () {

    $('.Guardar').on('click', function () {
        var validado = validar();

        console.log(validado);
        if(validado)
        {
            Message("Los campos marcados son obligatorios!",2);
        }else{
            Guardar();
            Message("Operacion completa!",1);
            Limpiar();
        }
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

    function Message(texto,tipo) {
        let url = "../Negocio/Cliente/Mensajes.html";

        $.get(url, function(html){
            $("#message1").html(html);

            switch(tipo)
            {
                case 1:
                    $(".alert").addClass("alert-success");
                break;
                
                case 2:
                    $(".alert").addClass("alert-warning");
                break;
            }

            $("#message1 .alert .mensaje").html(texto);
        });

        setTimeout(function() {
            $('.alert').fadeOut('slow');
            $('.alert').removeClass("alert-success");
            $('.alert').removeClass("alert-warning");
        }, 1000);
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
    var bandera = false;
    let identificadores = [];
    let valores = [];

    $(".selectores").find(':input').each(function() {
        var elemento = this;
        identificadores.push(elemento.id);
        valores.push(elemento.value);
    });

    let eliminar = ["Identificador"];

    console.log(identificadores);
    console.log(valores);

    $.each(valores, function( index, value ) {
        if(eliminar.indexOf(identificadores[index]) >= 0){ return;}

        if((value == "" || value == 1))
        {
            $('#'+identificadores[index]).css("border-color", "red");

            bandera = true;
        }
    });

    return bandera;
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
let persona_array = [];
function Guardar()
{
    var objetopersona = {
        nombre : $('#Nombres').val(),
        primerapellido : $('#PrimerApellido').val()
    };

    persona_array.push(objetopersona);

    localStorage.setItem('Persona', JSON.stringify(persona_array));

    localStorage.getItem('Persona');
}