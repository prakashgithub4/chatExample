$(document).ready(function(){
    $('.signup').click(function(){
        $('.pop_frame').slideDown('slow');
    });
    $('.close').click(function(){
        $(this).parents('.pop_frame').slideUp('slow');
    });
});