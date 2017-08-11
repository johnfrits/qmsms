function checkcall() {
      $.ajax({
          type: "GET",
          url: "../php/call.php",
          cache: false,
          success: function(response) {
              res = JSON.parse(response);
              if (curr!= res["CallID"]) {
                  curr = res["CallID"];
        
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
              curr = res["CallID"];
          }
      });
      checkcall();
  });