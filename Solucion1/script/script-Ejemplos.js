$(document).ready(function () {

    $('#ancle-Add').on('click', function () {
        var valueName = $('.inp-Name').val();
        var valueMaritalstatus = $('.inp-Maritalstatus').val();

        var HTML = '<div class="flex-fill order-3 my-1 mx-1">'+
                    valueName + '<span>&times;</span>'
                    +'</div>';

        var Tablebody='<tr>'+
                        '<td>\
                            <span>\
                                <a href="#" class="btn btn bg-primary" id="rid-register"\
                                     role="button">\
                                <i class="fas fa-trash-alt"></i>\
                                </a>\
                            </span>\
                        </td>'+
                        '<th scope="row">1</th>'+
                        '<td>'+valueName+' </td>'+
                        '<td>'+valueMaritalstatus+'</td>'+
                       '</tr>';

        $('#tbody-content').append(Tablebody);
    });


    $("#Table1").on("click", "#rid-register", function() {
        $(this).closest("tr").remove();
    });
    
});