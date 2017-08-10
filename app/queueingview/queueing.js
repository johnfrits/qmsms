
function checkcall() {
      $.ajax({
          type: "GET",
          url: "../php/call.php",
          cache: false,
          success: function(response) {
              res = JSON.parse(response);
              if (curr!=res["CallID"][0]) {
                  alert('new insert');
                  curr =res["CallID"][0];
              }
          }
      });
  }

  window.setInterval(function() {
      checkcall();
  }, 3000);

  $(document).ready(function() {
      $.ajax({
          type: "GET",
          url: "../php/call.php",
          cache: false,
          success: function(response) {
              res = JSON.parse(response);
              curr = res["CallID"][0];
              alert(curr);
          }
      });
      checkcall();
  });