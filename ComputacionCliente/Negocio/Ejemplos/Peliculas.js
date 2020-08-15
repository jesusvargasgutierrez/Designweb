$(document).ready(function () {
    /**
     * evento click del boton buscar
     */
    $('#btn-buscar').on('click',function(){
        /**
         * se pasa lo que el usuario escribio
         */
        var valor = $('#input-titulo').val();

        /**
         * evaluamos si el
         * campo no esta vacio
         */
        if(valor){
            /**
             * realizamos la peticion
             */
            Peticion($('#input-titulo').val());

            /**
             * la segunda vista debe
             * aparecer con la informacion
             */
            $('.Secondview').removeClass("d-none");
            $(".Secondview").addClass("d-block");
        }else{
            /**
             *si el campo esta vacio 
             enviar una alerta
             */
            Message("Debe ingresar un valor!",2);
        }
    });

    function Peticion(nombre){
        /**
         * objeto de peticion 
         */
        var request = new XMLHttpRequest();
        /**
         * direccion de consumo
         * se concatena el nombre del titulo que 
         * el usuario ingreso en el campo
         */
        var direccion = "http://www.omdbapi.com/?apikey=6c645c70&t="+nombre;
        /**
         * variable vacia
         */
        var Datos = {};

        request.onreadystatechange = function(){
            /**
             * se realiza la peticion y se evalua
             * si la respuesta es un 4 o un 200
             */
            if(this.readyState == 4 && this.status == 200){
                /**
                 * se convierte la respuesta en JSON
                 */
                Datos = JSON.parse(this.responseText);

                /**
                 * primero se deben limpiar los datos 
                 * para evitar que se mezclen dos consultas
                 */
                Limpiar();

                /**
                 * se pasa cada valor a sus respectivos campos
                 */
                $("#Poster").attr({
                    src: Datos.Poster
                });
                $(".titulo").append(Datos.Title);
                $(".anio").append(Datos.Year);
                $(".lanzamiento").append(Datos.Released);
                $(".autores").append(Datos.Actors);
                $(".director").append(Datos.Director);
                $(".genero").append(Datos.Genre);
                $(".lenguaje").append(Datos.Language);
                $(".resenia").append(Datos.Plot);
            }
        }

        /**
         * en este caso la peticion sera de tipo GET
         */
        request.open("GET",direccion);

        /**
         * se envia la peticion
         */
        request.send();
    }

    function Peticiontest(){
        let url = "../Negocio/Ejemplos/json1.txt";
        Limpiar();
        $.get(url, function(contenido){
            var Datos = JSON.parse(contenido);
            $("#Poster").attr({
                src: Datos.Poster
            });
            $(".titulo").append(Datos.Title);
            $(".anio").append(Datos.Year);
            $(".lanzamiento").append(Datos.Released);
            $(".autores").append(Datos.Actors);
            $(".director").append(Datos.Director);
            $(".genero").append(Datos.Genre);
            $(".lenguaje").append(Datos.Language);
            $(".resenia").append(Datos.Plot);
        });
    }
});

function Limpiar(){
    /**
     * funcion que regresa el inner de cada 
     * propiedad en el HTML a vacio
     */
    $(".titulo").empty();
    $(".anio").empty();
    $(".lanzamiento").empty();
    $(".autores").empty();
    $(".director").empty();
    $(".genero").empty();
    $(".lenguaje").empty();
    $(".resenia").empty();
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
