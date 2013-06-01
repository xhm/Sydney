$(function(){
    $('#customer_form').removeAttr('onsubmit').submit(function(event) {
        var form_data = $("#customer_form");
        if (1===2) {
        }
        else {
            event.preventDefault();
            $('#form_elements').hide();
            $('#container').addClass('confirm');
            $('#confirm_message').removeClass('hidden');
            //event.preventDefault();
        }
    });
});
