$(document).ready(function(){
    $(".toogle-btn").click(function(){
        $('#sidebar').toggleClass('active');
        $('.slidebar-menu li span').toggleClass('menu-hide');
    });
});