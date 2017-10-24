<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>QMSMS | Customer View</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
   <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="../assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href="../assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <!--Angular JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular-route.js"></script>
     <!--   Core JS Files   -->
    <script src="../assets/js/jquery.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="../assets/js/bootstrap-checkbox-radio-switch.js"></script>
    <!--  Charts Plugin -->
    <script src="../assets/js/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>
  <!--   <script src="addticket.js"></script> -->
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <style type="text/css">
        body  {
            margin: 0; 
            padding: 0;
            text-align: center;
        }
        .content{
            margin: 0 auto;
            width:  700px;
            margin-top: 2%;
            font-size: 40px;
        }
        label{
            font-weight: normal;
        }
        #myinput {
          padding-top: 10px;
          border: 0;
          outline: 0;
          background: transparent;
          border-bottom: 1px solid black;
          width: 100%;
          text-align: center;
          font-size: 45px;
          font-weight: bold;
        }
        button{
            margin-top: 10px;
        }
        .modal-header-success {
            color:#fff;
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #5cb85c;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
             border-top-left-radius: 5px;
             border-top-right-radius: 5px;
        }
        .modal-header-danger {
            color:#fff;
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #d9534f;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
             border-top-left-radius: 5px;
             border-top-right-radius: 5px;
        }
    </style>
</head>
<body>

<div class="wrapper">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a style="font-weight: bold;"  class="navbar-brand" id="title-brand">Enter your phone number.</a>
                </div>
                <div class="navbar-header pull-right">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <a href="../customerview" style="font-weight: bold;"  class="navbar-brand" id="title-brand">Go Back</a>
                </div>
            </div>
        </nav>

        <div class="content">
            <form method="POST" id="addticket">
                <div class="form-group">
                    <label for="inputlg">Please input your mobile number and press ENTER key.</label>
                    <input id="myinput" type="text" maxlength="11" autofocus="" name="customerInput">
                </div>
                <div class="row">
                    <button type="button" class="btn btn-danger col-sm-4" value="1"><h2>1</h2></button>
                    <button type="button" class="btn btn-danger col-sm-4" value="2"><h2>2</h2></button>
                    <button type="button" class="btn btn-danger col-sm-4" value="3"><h2>3</h2></button>
                </div>
                <div class="row">
                    <button type="button" class="btn btn-danger col-sm-4" value="4"><h2>4</h2></button>
                    <button type="button" class="btn btn-danger col-sm-4" value="5"><h2>5</h2></button>
                    <button type="button" class="btn btn-danger col-sm-4" value="6"><h2>6</h2></button>
                </div>
                 <div class="row">
                    <button type="button" class="btn btn-danger col-sm-4" value="7"><h2>7</h2></button>
                    <button type="button" class="btn btn-danger col-sm-4" value="8"><h2>8</h2></button>
                    <button type="button" class="btn btn-danger col-sm-4" value="9"><h2>9</h2></button>
                </div>
                 <div class="row">
                    <button type="button" class="btn btn-danger col-sm-4" value="Clear"><h2>Clear</h2></button>
                    <button type="button" class="btn btn-danger col-sm-4" value="0"><h2>0</h2></button>
                    <button type="button" class="btn btn-danger col-sm-4" value="Enter"><h2>Enter</h2></button>
                </div>
            </form>
        </div>

        <div id="divToPrint" style="display:none;" >
            <div style="text-align: center">
                <h1>QMSMS | DAVAO CITY</h1>
                <b><h2>Ticket Number</h2></b>
                <h1 id="ticketNumber"></h1>
                <h3>Total customer(s) waiting</h3>
                <h3 id="waiting"></h3>
                <h4 id="depserv">Department - Management | Service - Payment</h4>
                <h5 id="datetime"></h5>            
            </div>
        </div>

</div>



</body>
</html>

<script type="text/javascript">


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
                $("#datetime").text(date);
                $("#ticketNumber").text(data["Prefix"] + data["ticketNumber"]);
                $("#waiting").text(data["waiting"]);
                $('#depserv').text('Department - ' + data['DepartmentName'] + ' | ' + 'Service - ' + data['ServiceName']);
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
</script>
