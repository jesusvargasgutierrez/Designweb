$(document).ready(function () {

    /**
     * evento para asegurarse que
     * la pagina ha cargado totalmente
     */
    $('.Buscar').on('click', function () {
        /**
         * evento click del boton buscar
         */

        /**
         * con JQuery unicamente se agregan u ocultan
         * clases que permiten ver las vistas
         */
        $(".firstview").addClass("d-none");
        $('.firstview').removeClass("d-block");

        $('.Secondview').removeClass("d-none");
        $(".Secondview").addClass("d-block");
    });

    $('.Regresar').on('click', function () {
        /**
         * el boton de regresar 
         * realizara lo contrario del boton de consultar
         */
        $(".Secondview").addClass("d-none");
        $('.Secondview').removeClass("d-block");

        $('.firstview').removeClass("d-none");
        $(".firstview").addClass("d-block");
    });

    $('.Nuevo').on('click', function () {
        /**
         * el boton nuevo limpiara los campos
         * o los colocara con su valor por default
         */
        Limpiar();
    })
});

/**
 * evento click de la fila de la tabla donde
 * se muestran los registros del arreglo
 */
$('.Secondview .divtabla .Table1 .tbody-content').on("click","tr",function(e) {
    /**
     * se rescata el identificador
     * de la fila seleccionada, es decir a cual boton
     * se dio click
     */
    let click = e.target.id;

    /**
     * esta evaluacion es debido a que se puede dar click
     * en cualquier otra parte de la tabla
     * y eso puede tener excepciones
     */
    if(click != "<empty string>")
    {
        /**
         * se construye un arreglo propiedad
         * valor para el nombre y el id del
         * boton que se hizo click
         */
        var data = { name: '', id: '' };
        
        /**
         * se recorre el td de la fila seleccionada
         * para buscar su atribudo id del codigo
         */
        $(this).children('td').each(function() {
        var name = $(this).data('nome');
            /**
             * si se encuentra el nombre,
             * se asginara
             */
        if (name) {
            data.name = name;
        }
        
        var id = $(this).data('id');
        if (id) {
                /**
                 * si se encontro el id
                 * se asignara
                 */
            data.id = id;
        }      
        });

                /**
         * con el identificador del boton en donde
         * se dio click se eliminara o editara
         * segun sea el caso
         */
        if(click == "rid-register")
        {
                    /**
             * se envia el identificador del registro
             */
            Eliminar(data.id);
        }
        else if(click == "edit-register")
        {
                         /**
             * se envia el identificador del registro
             * primero a editarse para posiblemente 
             * modificarse.
             */
            editar(data.id);
        }
    }
});

function Eliminar(codigo)
{
    /**
     * URL a la cual se hara la peticion
     */
    var url1 = "../Negocio/Cliente/Acciones.php";

    /**
     * arreglo propiedad valor
     * para llevar el codigo de la persona
     * y la accion
     */
    let arregloeliminar = {Persona: codigo, Accion:'2'};

    /**
     * convertir el arreglo a JSON
     */
    var jsonPersona = JSON.stringify(arregloeliminar);

    /**
     * peticion post pasando el JSON generado
     * en la variable Persona
     */
    $.ajax({
        type: "POST",
        url: url1,
        datatype:"json",
        data:"Persona="+jsonPersona,
        success: function(response) {
            /**
             * asignacion de lo que responde
             * el endpoint
             */
          respuestax = response;
        }
    })
    .done(function(){
        alert("Se elimino un registro!");
    })
    .fail(function(){
    })
    .always(function(){
    });
}

function editar(codigo)
{
        /**
     * URL a la cual se hara la peticion
     */
    var url1 = "../Negocio/Cliente/Acciones.php";

        /**
     * arreglo propiedad valor
     * para llevar el codigo de la persona
     * y la accion
     */
    let arregloupdate = {Persona: codigo, Accion:'1'};

        /**
     * convertir el arreglo a JSON
     */
    var jsonPersona = JSON.stringify(arregloupdate);

        /**
     * peticion post pasando el JSON generado
     * en la variable Persona
     */
    $.ajax({
        type: "POST",
        url: url1,
        datatype:"json",
        data:"Persona="+jsonPersona,
        success: function(response) {
                        /**
             * asignacion de lo que responde
             * el endpoint
             */
          respuestax = response;
        }
    })
    .done(function(){
        /**
         * asignar resultado
         */
        Asignacion(respuestax);
    })
    .fail(function(){
    })
    .always(function(){
    });
}

function Asignacion(Respuesta)
{
        /**
     * con ayuda del indice obtenido se encuentra la posicion
     */
    var DatosStorage = JSON.parse(Respuesta);
    console.log(DatosStorage);
    DatosStorage.forEach(elemento => {
        $('#Identificador').val(elemento.Persona);
        $('#Equivalencia').val(elemento.Codigo);
        $('#Nombres').val(elemento.Nombres);
        $('#PrimerApellido').val(elemento.ApellidoPaterno);
        $('#SegundoApellido').val(elemento.ApellidoMaterno);
        $('#NombreCompleto').val(elemento.NombreCompleto);
        $('#DateBird').val(elemento.FechaNacimiento);
        var date = new Date(elemento.FechaNacimiento);
        $('#age').val(CalcularEdad(date.getFullYear()));
        $('#select-genero').val(elemento.Genero);
        $('#select-estadocivil').val(elemento.EstadoCivil);
        $('#Correo').val(elemento.Correo);
        $('#Telefono').val(elemento.Telefono);
    });

        /**
     * indica que se trata de una modificacion
     */
    $('#HdAction').val("2");

        /**
     * se cambia de vista de busqueda a 
     * la vista general
     */
    $(".Secondview").addClass("d-none");
    $('.Secondview').removeClass("d-block");

    $('.firstview').removeClass("d-none");
    $(".firstview").addClass("d-block");
}

/**
 * funcion que calcula la edad
 * recibiendo un año como valor
 */
function CalcularEdad(Valor)
{
        /**
     * se obtiene el año
     * de la fecha enviada no es necesario
     * evaluar si es una fecha entrada
     * puesto que el campo que lo usa si mandara una fecha
     * y no se tiene otro caso
     */
    var anio = (new Date).getFullYear();

        /**
     * se realiza la resta de años del
     * año actual 2020
     * y se asigna a la variable edad
     */
    let edad = anio - Valor;

        /**
     * retorna la diferencia de los años
     */
    return edad;
}

/**
 * fucnion limpiar
 * que devuelve los valores
 * por default a los controles
 * generalemnte es vacio o 1
 */
function Limpiar()
{
        /**
     * arreglo de identificadores
     * y valores
     */
    let identificadores = [];
    let valores = [];

        /**
     * se rescatan los valores de tipo input
     */
    $(".selectores").find(':input').each(function() {
        var elemento = this;
        identificadores.push(elemento.id);
        valores.push(elemento.value);
    });
    
        /**
     * se recorre un solo arreglo
     * debido a que son de la misma
     * longitud
     */
    $.each(valores, function( index, value ) {
                /**
         * se obtiene el tipo de control
         */
        var tipocontrol = $('#'+identificadores[index]).attr('type');

                /**
         * se evalua si el valor es diferente a vacio
         * o bien si esta vacio y es de tipo texto
         * entonces su contorno cambiara a negro
         */
        if((value != "" || value == "") && tipocontrol == "text")
        {
                        /**
             * cambio del color del contorno y
             * el valor del control
             */
            $('#'+identificadores[index]).css("border-color", "black");
            $('#'+identificadores[index]).val('');
        }
        else if((value >= 1))
        {
                        /**
             * aqui entraran unicamente los controles
             * select los cuales su valor por default puede
             * ser desde el 1 para este ejercicio
             */
            $('#'+identificadores[index]).css("border-color", "black");
            $('#'+identificadores[index]).val(1);
        }else if(tipocontrol == "date")
        {
                        /**
             * el campo fecha se deja vacio de igual modo
             * se pudiera colocar una fecha por default
             */
            $('#'+identificadores[index]).css("border-color", "black");
            $('#'+identificadores[index]).val('');
        }
    });
}