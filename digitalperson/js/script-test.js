$(".send").on("click",function(e){
    e.preventDefault();
    var id_member = $('#idnumber').val();

    axios
    .post(`../../controllers/test/testcontroller.php`, {
        id_member
    })
    .then(response => {
        var mydate = new Date(response.data.birthday);
        $('.fullname').val(response.data.fullname);
    });
});