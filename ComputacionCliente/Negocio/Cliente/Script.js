$(document).ready(function () {

    $('#Guardar').on('click', function () {
        //alert("xxxx");
        Message();
    });

    function Validar(){
        /*var QuestionArea = $('#QuestionArea').val();
        var DDQuestionTypeDes = $('#DDQuestionType option:selected').text();
        var DDQuestionType = $('#DDQuestionType').val();
        var TBAnswer = $('#TBAnswer').val();
        var TBoptionnumber = $('#TBNumberOption').val();

        if (QuestionArea == "")
        {
            $('#QuestionArea').addClass("ErrorControl");
        }else{
            $('#QuestionArea').addClass("SinErrorControl");
        }*/
    }

    function Message() {
        let url = "../Negocio/Cliente/Mensaje.html";

        $.get(url, function(html){
            $("#message1").html(html);
        });
   }
});