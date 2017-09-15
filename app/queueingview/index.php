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
    <!-- Custom JS -->
    <style type="text/css">
      html, body, .wrapper{
        height: 100%;
        overflow: hidden;
      }
      h1 {
        font-size: 13vw;
      }
      h2 {
        font-size: 7vw;
      }
      h3 {
        font-size: 5vw;
      }
      h4 {
        font-size: 3vw;
      }
      h5 {
        font-size: 2vw;
        color: #FD4440;
      }
    </style>
</head>
<body>
  <div class="wrapper">
        <div class="container-fluid" style="margin-top: 10px;">
         <div class="navbar-header">
             <h5>QMSMS | DAVAO CITY HALL<h5>
         </div>
    </div>
    <div class="content">
      <table class="table table-bordered text-center"> 
      <tr>
        <td class="col-xs-4 active" >
          <div class="panel panel-primary">
            <div class="panel-body" >
              <h2 id="hcolumn1"><b>NULL</b></h2>
              <h4 id="tcolumn1">NULL</h4>
            </div>
          </div>
        </td>
        <td rowspan="3" class="col-xs-6 active">
          <div class="panel panel-default">
            <div class="panel-body" style="height: 100%;">
              <h2><b>TICKET NUMBER</b></h2>
              <h1 id="mainTicketNumber"><b>NULL</b></h1>
              <h3>Please proceed to</h3>
              <h3 id="mainCounterNumber"><b>NULL</b></h3>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td class="col-xs-4 active">
          <div class="panel panel-default">
           <div class="panel-body">
            <h2 id="hcolumn2"><b>NULL</b></h2>
            <h4 id="tcolumn2">NULL</h4>
           </div>
          </div>
        </td>
      </tr>
      <tr>
        <td class="col-xs-4 active">
          <div id="hcolumn3" class="panel panel-default">
          <div id="tcolumn3" class="panel-body">
            <h2><b>NULL</b></h2>
            <h4>NULL</h4>
          </div>
          </div>
        </td>
      </tr>
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
              if (curr!= res["CallID"]) {
                  curr = res["CallID"];
                  callID = res["CallID"];
                  ticketNumber = res["TicketNumber"];
                  countersID = res["CountersID"];
                  $('#mainTicketNumber').html(ticketNumber);
                  $('#mainCounterNumber').html('Counter '+countersID);

                  messageVoice = ('TicketNumber' + ticketNumber + ' Please proceed to ' + ' Counter ' + countersID);
                  responsiveVoice.speak(messageVoice);
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
              callID = res["CallID"];
              ticketNumber = res["TicketNumber"];
              countersID = res["CountersID"];
              $('#mainTicketNumber').html(ticketNumber);
              $('#mainCounterNumber').html('Counter '+countersID);

              messageVoice = ('TicketNumber' + ticketNumber + ' Please proceed to ' + ' Counter ' + countersID);
              responsiveVoice.speak(messageVoice);
          }
      });
      checkcall();
  });
</script>
