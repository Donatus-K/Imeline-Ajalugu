$(document).ready(function() {
    
    var checkboxes = $("input[type='checkbox']"),
        button = $('.done');
    button.attr("disabled", true);

    checkboxes.click(function() {
        if(checkboxes.is(":checked")){
            button.addClass('active');
            button.attr("disabled", false);
        }else {
            button.removeClass('active');
            button.attr("disabled", true);
        }
    });
    
    $(":checkbox").on('click', function(){
        $(this).parent().parent().toggleClass("selected");
    });
    
});//end of jQuery