$(document).ready(function() {

  var userid = getParameterByName('userid');
  var counterid = getParameterByName('counterid');
  var queueid = 0; 
  
  $('#callnext').click(function(){
     $.ajax({
        type: 'GET',
        url: '../php/call_ticket.php?usersID=' + userid + '&counterid=' + counterid + '', 
        success: function(response){
          res = JSON.parse(response);
          queueid = res['queueid'];
          ticketNumber = res['TicketNumber'];
          onQueue = res['onqueue'];
          served = res['served'];    
          $('#nowserving').html(ticketNumber);
          $('#servedval').html(served);
          $('#onqueueval').html(onQueue);
        }
     }); 
  });
  
  if(queueid != null){
      $('#callagain').click(function(){
       $.ajax({
          type: 'GET',
          url: '../php/call_ticket.php?usersID=' + userid + '&callagain=true' + '&queueid=' + queueid + '&counterid=' + counterid + '',
          success: function(response){

          }
       }); 
    });
  }

  
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