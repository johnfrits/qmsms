<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>QMSMS | Queueing View</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
   <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="../assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href="../assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--Angular JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular-route.js"></script>
     <!--   Core JS Files   -->
    <script src="../assets/js/jquery.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap-notify.js"></script>
    <script src='voice.js'></script>
    <script src='blink.js'></script>
    <!-- Custom JS -->
    <style type="text/css">
      html, body, .wrapper{
        height: 100%;
        overflow: auto;
      }
      h1 {
        text-align: center;
        font-size: 3vw;
      }
      h2 {
        font-size: 5vw;
        font-weight: bolder;
      }
      h3 {
        font-size: 6vw;
      }
      h4 {
        font-size: 4vw;
      }
      h5 {
        font-size: 2vw;
        color: white;
      }
    </style>
</head>
<body>
  <div class="wrapper">
    <div class="container-fluid" style="padding-top: 10px; background-color: #fd6b68">
         <div class="navbar-header pull-right">
             <h5>QMSMS | DAVAO CITY HALL<h5>
         </div>
         <div class="navbar-header ">
             <h5>NOW SERVING !!!<h5>
         </div>
    </div>
    <div class="content">
      <table id="tbl" class="table table-bordered text-center"> 
        <th>
          <h1>COUNTER #</h1> 
        </th>
        <th>
          <h1>SERVICE</h1>
        </th>
        <th>
          <h1>TICKET NUMBER</h1>
        </th> 
             <?php include 'populate_counter.php';?>
      </table>
    </div>
  </div>
</body>
</html>
<script type="text/javascript">

  function checkcall() {

    $.ajax({
        type: "GET",
        url: "../php/call.php",
        cache: false,
        success: function(response) {
          res = JSON.parse(response);
          if (curr != res["CallID"]) {
              curr = res["CallID"];
              counterName = res["CounterName"].trim();
              ticketNumber = res["TicketNumber"];
              serviceName = res["ServiceName"];
              counterName = counterName.replace(/\s/g, '');
             // get id
              var incrementer = 0;

              $('#tbl h2').each(function() { 

                if(this.id.indexOf('Counter') > -1){

                  ++incrementer;

                    if( this.id == counterName){
                      $("#Prionumber" + incrementer).html(ticketNumber);
                      $("#Service" + incrementer).html(serviceName);
                      messageVoice = ('TicketNumber' + ticketNumber + ' Please proceed to '+ counterName);
                      responsiveVoice.speak(messageVoice);
                      
                      //  $("#Prionumber" + incrementer).blink({delay: 300});  
                      // setTimeout(function(){
                      //  $("#Prionumber" + incrementer).unblink();
                      // }, 3000);
                  }
                }
            });
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
              counterName = res["CounterName"].trim();
              ticketNumber = res["TicketNumber"];
              serviceName = res["ServiceName"];
              counterName = counterName.replace(/\s/g, '');
             // get id
              var incrementer = 0;
              $('#tbl h2').each(function() {

                if(this.id.indexOf('Counter') > -1){

                  ++incrementer;
                  if( this.id == counterName){
                      $("#Prionumber" + incrementer).html(ticketNumber);
                      $("#Service" + incrementer).html(serviceName);
                      messageVoice = ('TicketNumber' + ticketNumber + ' Please proceed to '+ counterName);
                      responsiveVoice.speak(messageVoice);


                      //  $("#Prionumber" + incrementer).blink({delay: 300});  
                      // setTimeout(function(){
                      //  $("#Prionumber" + incrementer).unblink();
                      // }, 3000);
                  }
                }
            });
          }
      });


      checkcall();
  });
</script>
