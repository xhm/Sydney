$(function(){
  $('#customer_form').removeAttr('onsubmit').submit(function(event) {
    event.preventDefault();
    $('#form_elements').hide();
    $('#confirm_message').html("Thank you.");
    //event.preventDefault();
    });
});
