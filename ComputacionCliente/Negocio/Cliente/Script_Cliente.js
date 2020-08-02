$(document).ready(function () {

    $('.Guardar').on('click', function () {
        Guardar();
        Message("Operacion completa!",1);

        Listar();
        /*var validado = validar();

        console.log(validado);
        if(validado)
        {
            Message("Los campos marcados son obligatorios!",2);
        }else{
            Guardar();
            Message("Operacion completa!",1);
            Limpiar();
        }*/
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
        identificador : $('#Nombres').val(),
        codigo : $('#Codigo').val(),
        nombre : $('#Nombres').val(),
        Primerapellido : $('#PrimerApellido').val(),
        Segundopellido : $('#SegundoApellido').val(),
        NombreCompleto : $('#NombreCompleto').val(),
        Nacimiento : "01/01/1900",
        Edad : "26",
        Genero : $('#select-genero').val(),
        EstadoCivil : $('#select-estadocivil').val(),
        RFC : $('#RFC').val(),
        CURP : $('#CURP').val(),
        Correo : $('#Correo').val(),
    };

    persona_array.push(objetopersona);

    localStorage.setItem('Persona', JSON.stringify(persona_array));

    localStorage.getItem('Persona');
}

function Listar()
{
    var Ccontenidotabla = "";
    $('.Secondview .divtabla .Table1 .tbody-content').html('');
    var DatosStorage = JSON.parse(localStorage.getItem("Persona"));

    if(DatosStorage === null)
    {
        DatosStorage = [];
    }else{
        DatosStorage.forEach(element => {
            Ccontenidotabla += '<tr>'+
            '<td>\
                <button class="btn btn bg-primary edit-register" id="edit-register"\>\
                    Editar <i class="fas fa-edit"></i>\
                </button><br/><br/>\
                <button class="btn btn bg-primary rid-register" id="rid-register"\>\
                    Eliminar <i class="fas fa-trash-alt"></i>\
                </button>\
            </td>'+
            '<td>1</td>'+
            '<td data-id=\"'+element.codigo+'\">'+element.codigo+'</td>'+
            '<td>'+element.nombre+'</td>'+
            '<td>'+element.Primerapellido+'</td>'+
            '<td>'+element.Segundopellido+'</td>'+
            '<td>'+element.NombreCompleto+'</td>'+
            '<td>'+element.Nacimiento+'</td>'+
            '<td>'+element.Genero+'</td>'+
            '<td>'+element.EstadoCivil+'</td>'+
            '<td>'+element.RFC+'</td>'+
            '<td>'+element.CURP+'</td>'+
            '<td>'+element.Correo+'</td>'+
           '</tr>';
        });

        $('.Secondview .divtabla .Table1 .tbody-content').append(Ccontenidotabla);
    }
    console.log(DatosStorage);
}

function Eliminar(codigo)
{
    var indice = 0;

    persona_array.forEach((elemento,index) => {
        if(elemento.codigo == codigo)
        {
            indice = index;
        }
    });

    persona_array.splice(indice,1);

    localStorage.setItem('Persona', JSON.stringify(persona_array));

    Listar();
}

function Modificar(codigo)
{
    var indice = 0;

    persona_array.forEach((elemento,index) => {
        if(elemento.codigo == codigo)
        {
            indice = index;
        }
    });

    persona_array[indice].NombreCompleto = "sss";

    localStorage.setItem('Persona', JSON.stringify(persona_array));

    Listar();
}

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
            Modificar(data.id);
        }
    }
});