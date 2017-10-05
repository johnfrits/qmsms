$(document).ready(function() {

  var date = new Date();

  //for text
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

            	$('#datetime').text(date);
                $('#ticketNumber').text(data['ticketNumber']);
                $('#waiting').text(data['waiting']);
                var divToPrint = document.getElementById('divToPrint');
                var popupWin = window.open('', '_blank', 'width=900,height=900');
                popupWin.document.open();
                popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
                popupWin.document.close();
                window.location.replace('../customerview/');
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