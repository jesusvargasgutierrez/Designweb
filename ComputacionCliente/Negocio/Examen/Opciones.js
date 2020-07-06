$(document).ready(function () {

    $('#BtAdd').on('click', function () {

        var QuestionArea = $('#QuestionArea').val();
        var DDQuestionTypeDes = $('#DDQuestionType option:selected').text();
        var DDQuestionType = $('#DDQuestionType').val();
        var TBAnswer = $('#TBAnswer').val();
        var TBoptionnumber = $('#TBNumberOption').val();

        if (QuestionArea == "")
        {
            $('#QuestionArea').addClass("ErrorControl");
        }else{
            $('#QuestionArea').addClass("SinErrorControl");
        }
    });
});