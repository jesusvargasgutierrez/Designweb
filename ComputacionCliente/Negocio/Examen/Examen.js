$(document).ready(function () {

  $('#BtAdd').on('click', function () {

      var validado = validar();

      //se evalua el retorno del metodo de validacion
      if(validado)
      {
        Message("Los campos marcados son obligatorios!",2);
      }else{
        var QuestionArea = $('#QuestionArea').val();
        var DDQuestionTypeDes = $('#DDQuestionType option:selected').text();
        var DDQuestionType = $('#DDQuestionType').val();
        var TBAnswer = $('#TBAnswer').val();
        var TBoptionnumber = $('#TBNumberOption').val();

        var Tablebody='<tr>'+
              '<td>\
                  <button class="btn btn bg-primary edit-register" id="edit-register"\>\
                      Editar <i class="fas fa-edit"></i>\
                  </button><br/><br/>\
                  <button class="btn btn bg-primary rid-register" id="rid-register"\>\
                      Eliminar <i class="fas fa-trash-alt"></i>\
                  </button>\
              </td>'+
              '<th>1</th>'+
              '<td>'+QuestionArea+' </td>'+
              '<th>'+DDQuestionTypeDes+'</th>'+
              '<td>'+TBAnswer+'</td>'+
              '<td>'+DDQuestionType+'</td>'+
              '<td>'+'2'+'</td>'+
            '</tr>';

        $('#tbody-content').append(Tablebody);
      }
  });

  $("#Table1").on("click", "#rid-register", function() {
    $(this).closest("tr").remove();
  });
});
 
 $('#TBNumberOption').on("keypress", function(e){
    if(e.which == 13){
    var TipoPregunta = $('#DDQuestionType').val();

    var Cantidad = $('#TBNumberOption').val();

    console.log(isNaN(Cantidad));
    if(isNaN(Cantidad))
    {
      Message("El valor no es un numero!",2);
    }else{
      Campos(TipoPregunta,Cantidad);
    }    
                
  }
});

$("#DDQuestionType").change(function() {
  var ValorDD = $('#DDQuestionType').val();

  if (ValorDD == "0") 
  {
    Showviews("",ValorDD);
  }
  else if (ValorDD == "1") 
  {
    Showviews("Viewmultipleoption",ValorDD);
  }
  else if(ValorDD == "2")
  {
    Showviews("ViewFieldsfill",ValorDD);
  }
  else if(ValorDD == "3")
  {

  }

    
  $("#ContainerViews").html("");
});

function Showviews(iddivshow,valordrop){
    var countchild = $("#secondview").children().length;

    if (valordrop != 0) 
    {
        $("#"+iddivshow).addClass("d-block");

        $("#"+iddivshow).removeClass("d-none");

        for (var i = 0; i < countchild; i++) {
            var iddivhide = $("#secondview").children()[i].id;

            if ( iddivhide != iddivshow) {
                $("#"+iddivhide).addClass("d-none");
                $("#"+iddivhide).removeClass("d-block");
            }
        }
    }
    else
    {
        for (var i = 0; i < countchild; i++) {
            var iddivhide = $("#secondview").children()[i].id;

            $("#"+iddivhide).addClass("d-none");

            $("#"+iddivhide).removeClass("d-block");
        }
    }
}

function Campos(TipoPregunta,Cantidad)
{
  let construccion = "";

  console.log(TipoPregunta);
  console.log(Cantidad);
  if(TipoPregunta == 1)
  {
    for(i=0; i < Cantidad; i++)
    {
      construccion += '<div class=\"form-check disable mt-3\">'+
        '<input class=\"form-check-input\" type=\"radio\" name=\"exampleRadios\" id=\"exampleRadios1\" value=\"option1\">'+
        '<label class=\"form-check-label\" for=\"exampleRadios1\">'+
          "Escriba su respuesta"+
        '</label>'+
        '</div>';
    }
  }
  else if(TipoPregunta == 2){
    for(i=0; i < Cantidad; i++)
    {
      construccion += '<div class=\"d-flex flex-column mt-3 flex-lg-row align-items-lg-center\">'+
        '<div class="\flex-fill my-1 mx-1\">'+
            '<label class=\"col-form-label\">Edit this for write text of answer</label></div>'+
            '<div class=\"flex-fill my-1 mx-1\">'+
            '<input type=\"text\" class=\"form-control\"/></div>'+
            '<div class=\"flex-fill my-1 mx-1\">'+
            '<label class="\col-form-label\">Edit this for write text of answer</label></div>'+
        '</div>';
    }
  }

  $("#ContainerViews").html(construccion);
}

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
      let url = "../Negocio/Examen/Mensajes.html";

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
     * recorremos los arreglos de valores
     * e identificadores la ventaja es que son de la
     * misma longitud y no debe existir problemas con 
     * desbordamientos.
     */
    $.each(valores, function( index, value ) {
        /**
         * evaluacion de los controles
         * como se tienen controles input estos se evaluan con cadenas
         * los contorles de select se evaluan con el valor
         * de la opcion por defecto en este caso es 0
         */
        if((value == "" || value == 0))
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