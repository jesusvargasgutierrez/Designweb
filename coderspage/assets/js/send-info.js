$(".send").on("click",function(e){
    e.preventDefault();
    var fullname = $('#fullname').val();
    var email = $('#email').val();
    var subjects = $('#subject').val();
    var comments = $('#comments').val();

    if(fullname == '' || email == '' || subjects == '' || comments == ''){
        alert("Llena todos los campos porfavor");
    }else{
        axios
        .post(`http://localhost/DesignWeb/digitalperson/src/controllers/mainpage/saveinfo.php`, {
            fullname,
            email,
            subjects,
            comments
        })
        .then(response => {
            var msj = $('.msj');
            msj.css({
                'display': ''
            });
        });
    }
});