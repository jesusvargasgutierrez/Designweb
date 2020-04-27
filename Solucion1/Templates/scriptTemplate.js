$(document).ready(function () {

    $('#BtAdd').on('click', function () {
        var QuestionArea = $('#QuestionArea').val();
        var DDQuestionTypeDes = $('#DDQuestionType option:selected').text();
        var DDQuestionType = $('#DDQuestionType').val();
        var TBAnswer = $('#TBAnswer').val();
        var TBoptionnumber = $('#TBNumberOption').val();

        var Tablebody='<tr>'+
                        '<td>\
                            <span>\
                                <a href="#" class="btn btn bg-primary" id="rid-register"\
                                     role="button">\
                                <i class="fas fa-edit"></i>\
                                </a>\
                                <a href="#" class="btn btn bg-primary" id="rid-register"\
                                     role="button">\
                                <i class="fas fa-trash-alt"></i>\
                                </a>\
                            </span>\
                        </td>'+
                        '<th>1</th>'+
                        '<td>'+QuestionArea+' </td>'+
                        '<th>'+DDQuestionTypeDes+'</th>'+
                        '<td>'+TBAnswer+'</td>'+
                        '<td>'+DDQuestionType+'</td>'+
                        '<td>'+'2'+'</td>'+
                       '</tr>';

                       alert(Tablebody);

        $('#tbody-content').append(Tablebody);

        $('#tbody-content').on('click','#rid-register',function(){
            $(this).parent().remove();
        });
    });
});