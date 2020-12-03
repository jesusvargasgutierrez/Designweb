$(document).ready(function() {
    $(".accion1").click(function() {
        var div = $(this).attr('value');

        Showviews(div);
    });
});   

function Showviews(iddivshow){
    var countchild = $("#dvInformation").children().length;

        $("#"+iddivshow).addClass("d-block");

        $("#"+iddivshow).removeClass("d-none");

        for (var i = 0; i < countchild; i++) {
            var iddivhide = $("#dvInformation").children()[i].id;

            if ( iddivhide != iddivshow) {
                $("#"+iddivhide).addClass("d-none");
                $("#"+iddivhide).removeClass("d-block");
            }
        }
}