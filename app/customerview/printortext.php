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
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
 <!--  //  <script src="addticket.js"></script> -->
    <style type="text/css">
        .content{
            margin-top: 2%;
        }
        .panel{
            background-color: #D94A4F;
            padding-top: 50px;
            font-size: 45px;
            height: 200px;
            border-radius: 20px;
        }
        input{
            background-color: #D94A4F;
            font-size: 45px;
            height: 200px;
            border-radius: 20px;
            color: white;
        }
        a{
            color: white;
        }
        a:hover{
            color: white;
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
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a style="font-weight: bold;"  class="navbar-brand" id="title-brand">Do you want to avail to our sms notification service?</a>
                </div>
            </div>
        </nav>

        <div class="content">
            <?php 
                if(isset($_GET['serviceid'])){
                    echo 
                    '<a href="addnumber.php?serviceid='. $_GET['serviceid'] .'">
                        <div class="col-sm-4">
                            <div class="panel panel-default text-center">
                                <div class="panel-body"> 
                                  Yes
                                </div>
                            </div>
                        </div>
                    </a>';
                }
                  // href="../php/getdataprint.php?serviceid='. $_GET['serviceid'] .'
            ?>
            <input class="col-sm-4" type="button" value="No" onclick="PrintDiv();" />
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
    function PrintDiv() {    
        var date = new Date();
        var url = null;
        var serviceid = getParameterByName('serviceid');

        url = '../php/getdataprint.php?serviceid='+ serviceid +''; 
         
        $.post(url,$(this).serialize(),function(data) {
            if ( data['status']  == 'success') {
                $('#datetime').text(date);
                $("#ticketNumber").text(data["Prefix"] + data["ticketNumber"]);
                $('#waiting').text(data['waiting']);
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

    function getParameterByName(name, url) {
    if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "))
    }

</script>
