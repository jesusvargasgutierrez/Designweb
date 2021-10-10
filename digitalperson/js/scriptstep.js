$(document).ready(function(){

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    
    $(".next").click(function(){
    
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
        step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;
            
            current_fs.css({
            'display': 'none',
            'position': 'relative'
            });
            next_fs.css({'opacity': opacity});
        },
            duration: 600
        });
    });
    
    $(".previous").click(function(){
    
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show();
        
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
                
                current_fs.css({
                'display': 'none',
                'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            },
            duration: 600
        });
    });
    
    $('.radio-group .radio').click(function(){
        $(this).parent().find('.radio').removeClass('selected');
        $(this).addClass('selected');
    });
    
    $(".submit").click(function(){
        return false;
    })
    
});

$(".saveinfo").on("click",function(e){
    var fullname = $(".fullname").val();
    var birthday = $(".birthday").val();
    var position = $(".position").val();

    axios
    .post(`src/controllers/information/informationcontroller.php`, {
        action: 1,
        fullname,
        birthday,
        position
    })
    .then(function(res){
        var div = JSON.parse(JSON.stringify(res.data));
        $('.frame-step2').attr("src" ,"src/views/photo/index.php?id_member=" + div['id_member']);
        $('.id_member').val(div['id_member']);
        console.log(div['id_member'])
    });
    
    //alert("informacion guardada");
});

$(".take-photo").on("click",function(e){
    $('.frame-step3').attr("src" ,"src/views/trace/index.php?id_member=" + $('.id_member').val());
    //alert("informacion guardada");
});