$(function(){
  $('#customer_form').removeAttr('onsubmit').submit(function(event) {
    event.preventDefault();
    $('#form_elements').hide();
    $('#container').addClass('confirm');
    $('#confirm_message').removeClass('hidden');
    //event.preventDefault();
    });
});
