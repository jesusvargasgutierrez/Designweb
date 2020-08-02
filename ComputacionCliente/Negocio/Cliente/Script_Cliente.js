/*
Evento para asegurarse que la pagina ha cargado totalmente
y hacer uso de los controles de la misma
*/
$(document).ready(function () {

    /**
     * evento click del boton cn la clase de guardar
     */
    $('.Guardar').on('click', function () {
        /**
         * el metodo validar retorna un true o false
         * si un campo no cumple las condiciones, se asigna su valor
         * de retorno a la variable validado
         */
        var validado = validar();

        //se evalua el retorno del metodo de validacion
        if(validado)
        {   
            /**
             *si el retorno fue true significa
             *que debe aparecer un mensaje 
             *indicando que algunos campos son obligatorios
             */
            Message("Los campos marcados son obligatorios!",2);
        }else{
            /**
             * si la validacion retorno un false quiere
             * decir que no hubo campos vacios o se cumplieron
             * totalmente sus validaciones
             */

             /**
              * se evalua el valor del hidden fiel
              * de accion que determina si se guarda o modifica el registro
              */
            if($('#HdAction').val() == "1")
            {
                /**
                 * metodo que guarda el registro
                 */
                Guardar();
            }else if($('#HdAction').val() == "2")
            {
                /**
                 * si el campo tiene un 2 significa
                 * que es una modificacion
                 */
                Modificar($('#Codigo').val());
            }

            /**
             * si se guarda o modifica 
             * el mensaje satisfactorio sera el mismo
             */
            Message("Operacion completa!",1);
        }

        /**
         * se enlistan los registros para visualizar
         * los cambios en alguna modificacion
         * o si se agrego uno nuevo
         */
        Listar();

        /**
         * se limpian los campos
         */
        Limpiar();
    });

    /**
     * evento click del boton nuevo
     */
    $('.Nuevo').on('click', function () {
        /**
         * el boton nuevo solo limpiara los campos
         * y cambiara el contorno de los mismos
         */
        Limpiar();
    });

    /**
     * el evento change del control de segundo apellido
     * asignara la concatenacion de los valores en mayusculas de 
     * los campos de nombres,apellido paterno y el mismo
     * campo de apellido materno
     */
    $('#SegundoApellido').change(function() {
        /**
         * se busca el metodo para rescatar el campo de
         * nombrecompleto con su identificador
         */
        NombreCompleto = document.getElementById("NombreCompleto");

        /**
         * se asigna el valor de los respectivos campos
         * para su concatenacion
         */
        Nombres = $('#Nombres').val();
        ApellidoParterno = $('#PrimerApellido').val();
        ApellidoMaterno = $('#SegundoApellido').val();

        /**
         * se asigna la concatenacion establecida utilizando
         * la propiedad value del campo que se rescato al
         * inicio del metodo.
         */
        NombreCompleto.value = Nombres.toUpperCase() + " " + ApellidoParterno.toUpperCase() + " " + ApellidoMaterno.toUpperCase();
    });

    /**
     * el vento change del campo de fecha de nacimiento
     * determinara la edad de la persona enviando el año
     * de la fecha seleccionada
     */
    $('#Nacimiento').change(function() {
        /**
         * el valor del campo se convierte en 
         * fecha
         */
        var date = new Date($(this).val());

        /**
         * se asigna el valor al campo edad que retorno
         * el metodo calcular edad con solo pasarle
         * el año.
         */
        $('#edad').val(CalcularEdad(date.getFullYear()));
    });

    /**
     * evento click del boton buscar, 
     * al presionarlo debera agregar clases para que la vista
     * del formulario se oculte y remover algunas otras para
     * evitar que se empalmen las vistas
     */
    $('.Buscar').on('click', function () {
        $(".firstview").addClass("d-none");
        $('.firstview').removeClass("d-block");

        $('.Secondview').removeClass("d-none");
        $(".Secondview").addClass("d-block");
    });

    /**
     * el evento click del boton regresar es lo
     * contrario al evento de buscar debido a que
     * la vista removera las clases de la primera
     * vista
     */

    $('.Regresar').on('click', function () {
        $(".Secondview").addClass("d-none");
        $('.Secondview').removeClass("d-block");

        $('.firstview').removeClass("d-none");
        $(".firstview").addClass("d-block");
    });

    /**
     * funcion mensaje que recibe el
     * texto a colocar ademas del tipo de
     * mensaje a mostrar, mas que un tipo
     * es un color diferente del mensaje
     */
    function Message(texto,tipo) {
        /**
         * el archivo mensaje.html contiene
         * la estructura para clocar el texto
         */
        let url = "../Negocio/Cliente/Mensajes.html";

        /**
         * realizamos una peticion get 
         * para obtener la estructura
         */
        $.get(url, function(html){
            /**
             * se asigna la estructura
             * al contenedor con el identificador
             */
            $("#message1").html(html);

            /**
             * se determina que tipo o de que color
             * se mostrara el mensaje
             */
            switch(tipo)
            {
                case 1:
                    /**
                     * si el mensaje es satisfactorio
                     * se agregara esta clase de boostrap
                     */
                    $(".alert").addClass("alert-success");
                break;
                
                case 2:
                    /**
                     * si el mensaje es una advertencia
                     * se colocara una clase para
                     * una alerta en amarillo
                     */
                    $(".alert").addClass("alert-warning");
                break;
            }//termina la decion del mensaje

            /**
             * se asigna el texto deseado a la estructura del
             * mensaje
             */
            $("#message1 .alert .mensaje").html(texto);
        });

        /**
         * el siguiente metodo determina
         * la duracion de la alerta el metodo
         * recibe una cantidad en milisengudos
         * en este ejemplo la alerta unicamente se
         * mostrara po 1 segundo y desaparecera
         */
        setTimeout(function() {
            /**
             * metodo que indica como
             * se mostrara la alerta en este caso es
             * de forma slow: lenta pero
             * se puede asignar fast: rapido
             */
            $('.alert').fadeOut('slow');

            /**
             * regresamos la plantilla de la alerta
             * retirando las clases agregadas segun
             * se dio el caso.
             */
            $('.alert').removeClass("alert-success");
            $('.alert').removeClass("alert-warning");
        }, 1000);
   }
});//termina el metodo ready

/**
 * funcion que recibe un texto y
 * lo retorna como mayusculas
 */
function Valor_mayusculas(Valor)
{
    return Valor.toUpperCase()
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
 * funcion que valida si
 * los campos del formulario
 */
function validar()
{
    /**
     * vandera a retornar
     */
    var bandera = false;
    /**
     * arreglo para almacenar los identificadores
     * de los campos del formulario
     * */
    let identificadores = [];

    /**
     * arreglo para almacenar el valor 
     * de los campos del formulario
     */
    let valores = [];

    /**
     * se recorre el contenedor con la clase
     * selectores para encontrar los campos
     * de tipo input y llenar los arreglos
     * anteriores
     */
    $(".selectores").find(':input').each(function() {
        var elemento = this;
        identificadores.push(elemento.id);
        valores.push(elemento.value);
    });

    /**
     * el campo identificador no debe
     * participar debido a que es un campo
     * inhabilitado y al principio siempre estara
     * vacio, si no se elimina esta funcion nunca retornara
     * true
     */
    let eliminar = ["Identificador"];

    /**
     * recorremos los arreglos de valores
     * e identificadores la ventaja es que son de la
     * misma longitud y no debe existir problemas con 
     * desbordamientos.
     */
    $.each(valores, function( index, value ) {
        /**detrmina si el index en el que va el ciclo
         * es el identificador si es asi debe saltearse
         * esta iteracion para no evaluarlo.
         */
        if(eliminar.indexOf(identificadores[index]) >= 0){ return;}

        /**
         * evaluacion de los controles
         * como se tienen controles input estos se evaluan con cadenas
         * los contorles de select se evaluan con el valor
         * de la opcion por defecto en este caso la 1
         */
        if((value == "" || value == 1))
        {
            /**
             * si se cumple la condicion el control debera
             * cambiar su contorno a rojo
             * para ellos con el metodo css especificamos
             * el atributo en este caso el borde.
             */
            $('#'+identificadores[index]).css("border-color", "red");

            /**
             * cualquier campo que cumpla
             * la funcion retornara true
             */
            bandera = true;
        }
    });//fin del ciclo

    /**
     * retorna el valor por default esta variable es
     * false si no entra a la condicion antes descrita
     * conservara su valor
     */
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

    /**
     * el valor del campo de accion
     * regresara en 1 para si se requiere 
     * guardar un nuvo elemento.
     */
    $("HdAction").val('1');
}

/**
 * funcion que recibe una expresion regular y determina
 * si el valor cumple con la misma
*/
function validarexpresion(valor,expresion)
{
    /**
     * despliega una alerta al usuario
     * indicandole la situacion de la
     * validacion
     */
    alert(expresion.test(valor));
}

/**
 * los siguientes metodos son referentes
 * al almacenamiento de localstorage
 */

 /**
  * arreglo vacio y global para
  * la manipulacion en todos los metodos
  * y almacenamiento de las personas agregadas
  */
let persona_array = [];

/**
 * esta funcion guarda 
 * la persona en localstorage
 */
function Guardar()
{
    /**
     * se convierte el valor
     * del campo en una fecha para su manipulacion
     */
    var date = new Date($('#Nacimiento').val());

    /**
     * objeto de los campos de la persona
     * se asignan sus valores que se rescatan del
     * formulario
     */
    var objetopersona = {
        codigo : $('#Codigo').val(),
        nombre : $('#Nombres').val(),
        Primerapellido : $('#PrimerApellido').val(),
        Segundopellido : $('#SegundoApellido').val(),
        NombreCompleto : $('#NombreCompleto').val(),
        Nacimiento : $('#Nacimiento').val(),
        Edad : CalcularEdad(date.getFullYear()),
        Genero : $('#select-genero').val(),
        EstadoCivil : $('#select-estadocivil').val(),
        RFC : $('#RFC').val(),
        CURP : $('#CURP').val(),
        Correo : $('#Correo').val()
    };

    /**
     * se agrega el objeto al arreglo global
     * persona_array
     */
    persona_array.push(objetopersona);

    /**
     * el arreglo global se asgina a localstorage
     * renombrandolo persona
     */
    localStorage.setItem('Persona', JSON.stringify(persona_array));

    /**
     * se obtiene el arreglo almacenado
     */
    localStorage.getItem('Persona');
}

/**
 * lista las posiciones
 * del arreglo almacenado
 */
function Listar()
{
    /**
     * se declara una variable
     * vacia para el contenido del cuerpo de la table
     */
    var Ccontenidotabla = "";
    /**
     * se asgina vacio al cuerpo de la
     * tabla
     */
    $('.Secondview .divtabla .Table1 .tbody-content').html('');

    /**
     * se convierte el arreglo almacenado en JSON
     */
    var DatosStorage = JSON.parse(localStorage.getItem("Persona"));

    /**
     * se evalua si el arreglo es null
     */
    if(DatosStorage === null)
    {
        DatosStorage = [];
    }else{
        /**
         * si el arreglo no es null debe
         * construir el cuerpo de la tabla
         */
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
            '<td data-id=\"'+element.codigo+'\">'+element.codigo+'</td>'+//el atributo determina el identificador del registro
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

        /**
         * se asigna la construccion al cuerpo de la
         * tabla
         */
        $('.Secondview .divtabla .Table1 .tbody-content').append(Ccontenidotabla);
    }
}

/**
 * funcion que elimna la posicion
 * del almacenamiento de localstorage
 */
function Eliminar(codigo)
{
    /**
     * se reccorre y se
     * signa su posicion
     * con su codigo enviado
     */
    var indice = 0;

    persona_array.forEach((elemento,index) => {
        if(elemento.codigo == codigo)
        {
            indice = index;
        }
    });


    /**
     * metodo para eliminar una posicion del arreglo
     * recibe el indice y la cantidad a elimnar en 
     * este caso siempre sera 1
     */
    persona_array.splice(indice,1);

    /**
     * se asigna el arreglo nuevamente
     * pero sin la posicion eliminada
     */
    localStorage.setItem('Persona', JSON.stringify(persona_array));

    /**
     * se listan los registros
     */
    Listar();
}

/**
 * funcion que recibe el codigo de la persona
 * a editar
 */
function editar(codigo)
{
    /**
     * varibale para rescatar el
     * indice de la persona
     */
    var indice = 0;

    /**
     * se realiza el recorrido para encontrar el indice
     */
    persona_array.forEach((elemento,index) => {
        if(elemento.codigo == codigo)
        {
            indice = index;
        }
    });

    /**
     * los valores se deben asignar nuevamente a sus campos
     */
    AsignarValores(indice);
}

/**
 * funcion que modifica una posicion 
 * del arreglo de localstorage
 */
function Modificar(codigo)
{
    /**
     * se reccorre y se
     * signa su posicion
     * con su codigo enviado
     */
    var indice = 0;

    persona_array.forEach((elemento,index) => {
        if(elemento.codigo == codigo)
        {
            indice = index;
        }
    });

    /**
     * se asginan los nuevos valores, en caso de aplicar
     * la posicion de la persona seleccionada.
     */
    persona_array[indice].nombre = $('#Nombres').val();
    persona_array[indice].Primerapellido = $('#PrimerApellido').val();
    persona_array[indice].Segundopellido = $('#SegundoApellido').val();
    persona_array[indice].NombreCompleto = $('#NombreCompleto').val();
    persona_array[indice].Nacimiento = $('#Nacimiento').val();
    var date = new Date($('#Nacimiento').val());
    persona_array[indice].Edad = CalcularEdad(date.getFullYear());
    persona_array[indice].Genero = $('#select-genero').val();
    persona_array[indice].EstadoCivil = $('#select-estadocivil').val();
    persona_array[indice].RFC = $('#RFC').val();
    persona_array[indice].CURP = $('#CURP').val();
    persona_array[indice].Correo = $('#Correo').val();

    /**
     * se asigna nuevamente la persona en caso de existir cambios
     * se deben reflejar
     */
    localStorage.setItem('Persona', JSON.stringify(persona_array));

    /**
     * se lista nuevamente el arreglo
     * para si se realizo algun cambio se visualice de inmediato
     */
    Listar();
}

/**
 * se asginan los valores de la posicion seleccionada a los campos del
 * formulario
 */
function AsignarValores(indice){
    /**
     * con ayuda del indice obtenido se encuentra la posicion
     */
    $('#Nombres').val(persona_array[indice].NombreCompleto);
    $('#Codigo').val(persona_array[indice].codigo);
    $('#Nombres').val(persona_array[indice].nombre);
    $('#PrimerApellido').val(persona_array[indice].Primerapellido);
    $('#SegundoApellido').val(persona_array[indice].Segundopellido);
    $('#NombreCompleto').val(persona_array[indice].NombreCompleto);
    $('#Nacimiento').val(persona_array[indice].Nacimiento);
    var date = new Date(persona_array[indice].Nacimiento);
    $('#edad').val(CalcularEdad(date.getFullYear()));
    $('#select-genero').val(persona_array[indice].Genero);
    $('#select-estadocivil').val(persona_array[indice].EstadoCivil);
    $('#RFC').val(persona_array[indice].RFC);
    $('#CURP').val(persona_array[indice].CURP);
    $('#Correo').val(persona_array[indice].Correo);

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