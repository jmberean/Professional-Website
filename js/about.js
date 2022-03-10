$(document).ready(function () {
    $('div.hidden').fadeIn(1000).removeClass('hidden');
});

$(function() {
    function loop(){
    $('#arrow')
        .fadeIn(500)
        .fadeOut(500,loop);
    }
    loop(); // call this wherever you want
});