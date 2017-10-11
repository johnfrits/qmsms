$(document).ready(function() {

  var userid = getParameterByName('userid');
  var counterid = getParameterByName('counterid');
  var queueid = 0; 
  var times = 3;

  $.ajax({
      type: 'GET',
      url: 'getinfocallview.php?usersID=' + userid +'',
      success: function(response){
        res = JSON.parse(response);
        if(res['Counter'] && res['Service'])
        {
            $('#name').html(res['Counter']);
            $('#nameservice').html(res['Service']);
        }
      }
   }); 


  $('#callnext').click(function(){
     $.ajax({
        type: 'GET',
        url: '../php/call_ticket.php?usersID=' + userid + '&counterid=' + counterid + '', 
        success: function(response){
          res = JSON.parse(response);
          if(res['status'] != 'error')
          {
              queueid = res['queueid'];
              ticketNumber = res['TicketNumber'];
              onQueue = res['onqueue'];
              served = res['served'];    
              name = res['name'];
              $('#nowserving').html(ticketNumber);
              $('#servedval').html(served);
              $('#onqueueval').html(onQueue);
              $('#name').html(name);
          }
        }
     }); 
  });
  
  if(queueid != null){
      $('#callagain').click(function(){

       $.ajax({
          type: 'GET',
          url: '../php/call_ticket.php?usersID=' + userid + '&callagain=true' + '&queueid=' + queueid + '&counterid=' + counterid + '',
          success: function(response){
            res = JSON.parse(response);
            if(res['status'] != 'error')
            { 
              times--;
              $('#times').html(times + ' TIME(S)');
              if(times < 0){
                $.ajax({
                  type: 'GET',
                  url: '../php/update_missed.php?missed=' + true + '&queueid=' + queueid + '',
                  success: function(response){
                    ress = JSON.parse(response);
                    if(ress['success'])
                      times = 3;
                      queueid = 0; 
                      $('#times').html(times + ' TIME(S)');
                      $('#callnext').click();
                  }
                }); 
              }
            }
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