$(document).ready(function() {

  var userid = getParameterByName('userid');

  $('#callnext').click(function(){
     $.ajax({
        type: 'GET',
        url: '../php/call_ticket.php?usersID=' + userid + '', 
        success: function(response){
        }
     }); 
  });

  $('#callagain').click(function(){
     $.ajax({
        type: 'GET',
        url: '../php/call_ticket.php?userid=' + userid + '', 
        success: function(response){
          alert('try');
        }
     }); 
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