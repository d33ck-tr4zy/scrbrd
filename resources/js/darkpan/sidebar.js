$(document).ready(function(){
    // Sidebar Toggler
    $('.sidebar-toggler').click(function () {
        $('.sidebar, .content').toggleClass("open");
        return false;
    });
});
