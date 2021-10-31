$(".send").on("click",function(e){
    e.preventDefault();
    var controller = $('#controlador').val();
    var model = $('#modelo').val();
    var request = $('#request').val();
    var fields = $('#fields').val();

    axios
    .post(`../../controllers/pack/makefiles.php`, {
        controller,
        model,
        request,
        fields
    })
    .then(response => {
        alert(response);
    });
});