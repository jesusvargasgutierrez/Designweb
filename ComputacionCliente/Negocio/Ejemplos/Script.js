$(document).ready(function () {
    let url = "../Negocio/Ejemplos/Productos.json";

    $.ajax({
        url: url,
        datatype:"json",
        contentType:'application/json',
        cache:false
    })
    .done(function(response){
        var html = "";

        $.each(response, function(index,element){
            html = "<article class=\"col-12 col-md-6 col-lg-3 mb-3 mb-lg-0 tarjeta\">";
                html += "<div class=\"card\">"+element.Imagen;
            //html += "<img src=\""+element.Imagen+"\" class=\"card-img-top\" alt=\"asesoria\">";
            html += "<div class=\"card-body\">";
                html += "<h5 class=\"card-title font-weight-bold\">"+element.Precio+"</h5>";
                html += "<p class=\"text-body card-text\">"+element.Descripcion+"</p>";
            html += "</div></div>"
            html += "<p class=\"parrafo\">Lorem ipsum, dolor sit amet consectetur adipisicing elit" 
            html += "Mollitia ipsa fugiat nisi laudantium quisquam fugit eos,itaque ea tenetur</p>";
            html += "<span class=\"ver\">ver menos</span>";
            html += "</article>";

            $('.articulos').append(html);
        });
    });

    $('.articulos').on('click','.ver',function(){
        event.preventDefault();
        $(this).closest(".tarjeta").find(".parrafo").slideToggle("slow");

        if($(this).text() == 'ver menos')
        {
            $(this).text('ver mas');
        }
        else
        {
            $(this).text('ver menos');   
        }  
    });
});