$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        
        $('#icon-slide').toggleClass('fa-angle-double-left fa-angle-double-right');
    });

});