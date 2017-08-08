$(document).ready(function() {

  var date = new Date();

  $('.btn').click(function(){
      var input = $('#myinput');

      if(input.val().length < 11 && $(this).val() != 'Clear' && $(this).val() != 'Enter' ){
       
          $('#myinput').val($('#myinput').val()+$(this).val());
      }   

      if($(this).val() == 'Clear'){
          $('#myinput').val("");
      }

      if($(this).val() == 'Enter'){

        if( input.val().length == 0 || input.val().length < 11 ){
          $('#myModalError').modal("show");
        }
        else{  
          var url = null;
          var serviceid = getParameterByName('serviceid');

          url = '../php/add_ticket.php?serviceid='+ serviceid +'&customerInput='+ input.val() +''; 
         
          $.post(url,$(this).serialize(),function(data) {
            if ( data['status']  == 'success') {
               $('#myModalSuccess').modal("show");
               $('#datetime').text(date);
               $('#ticketNumber').text(data['ticketNumber']);
               $('#inputNumber').text(input.val());
               $('#myinput').val("");
            } else {
               $('#myModalError').modal("show");
            }
          },'JSON');
        }
      }
  });

  function getParameterByName(name, url) {

    if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
    
  }

});