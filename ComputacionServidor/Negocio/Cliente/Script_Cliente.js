$(document).ready(function () {

    $('.Buscar').on('click', function () {
        $(".firstview").addClass("d-none");
        $('.firstview').removeClass("d-block");

        $('.Secondview').removeClass("d-none");
        $(".Secondview").addClass("d-block");
    });

    $('.Regresar').on('click', function () {
        $(".Secondview").addClass("d-none");
        $('.Secondview').removeClass("d-block");

        $('.firstview').removeClass("d-none");
        $(".firstview").addClass("d-block");
    });

    /*$('.Nuevo').on('click', function () {
        Limpiar();
    })*/
});

$('.Secondview .divtabla .Table1 .tbody-content').on("click","tr",function(e) {
    let click = e.target.id;

    if(click != "<empty string>")
    {
        var data = { name: '', id: '' };
    
        $(this).children('td').each(function() {
        var name = $(this).data('nome');
        if (name) {
            data.name = name;
        }
        
        var id = $(this).data('id');
        if (id) {
            data.id = id;
        }      
        });

        if(click == "rid-register")
        {
            Eliminar(data.id);
        }
        else if(click == "edit-register")
        {
            editar(data.id);
        }
    }
});

function Eliminar(codigo)
{

}

function editar(codigo)
{
    var url1 = "../Negocio/Cliente/Acciones.php";
    var jsonPersona = JSON.stringify(codigo);

    console.log(jsonPersona);
    $.ajax({
        type: "POST",
        url: url1,
        datatype:"json",
        data:"Persona="+jsonPersona,
        success: function(response) {
          //alert(response);
          respuestax = response;
        }
    })
    .done(function(){
        Asignacion(respuestax);
    })
    .fail(function(){
    })
    .always(function(){
    });
}

function Asignacion(Respuesta)
{
    var DatosStorage = JSON.parse(Respuesta);
    console.log(DatosStorage);
    DatosStorage.forEach(elemento => {
        $('#Identificador').val(elemento.Persona);
        $('#Codigo').val(elemento.codigo);
        $('#Nombres').val(elemento.nombres);
        $('#PrimerApellido').val(elemento.ApellidoMaterno);
        $('#SegundoApellido').val(elemento.SegundoPaterno);
        $('#NombreCompleto').val(elemento.NombreCompleto);
        $('#Nacimiento').val(elemento.FechaNacimiento);
        var date = new Date(elemento.FechaNacimiento);
        $('#edad').val(CalcularEdad(date.getFullYear()));
        $('#select-genero').val(elemento.Genero);
        $('#select-estadocivil').val(elemento.EstadoCivil);
        $('#Correo').val(elemento.Correo);
        $('#Telefono').val(elemento.Telefono);
    })

    $('#HdAction').val("2");

    $(".Secondview").addClass("d-none");
    $('.Secondview').removeClass("d-block");

    $('.firstview').removeClass("d-none");
    $(".firstview").addClass("d-block");
}

function CalcularEdad(Valor)
{
    var anio = (new Date).getFullYear();

    let edad = anio - Valor;

    return edad;
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