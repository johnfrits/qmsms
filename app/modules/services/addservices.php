<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>QMSMS</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
   <!-- Bootstrap core CSS     -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="../../assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href="../../assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
     <!--   Core JS Files   -->
    <script src="../../assets/js/jquery.js" type="text/javascript"></script>
    <script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="../../assets/js/bootstrap-checkbox-radio-switch.js"></script>
    <!--  Charts Plugin -->
    <script src="../../assets/js/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../../assets/js/bootstrap-notify.js"></script>
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="../../assets/js/light-bootstrap-dashboard.js"></script>
    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <!-- Custom JS -->
    <script src="addservice.js"></script>
    <style type="text/css">
      body{
        width: 70%;
        margin-top: 30px;
        margin-left: 30px;
        overflow: hidden;
      }
    </style>
</head>
<body>
  <div class="form-horizontal">
  <fieldset>
    <legend>Add Service</legend>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="inputName" placeholder="Name">
        </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Default Number</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" id="inputDefaultNumber" placeholder="Default Number">
        </div>
    </div>
    <div class="form-group">
      <div class="col-lg-8 col-lg-offset-2">
        <button id="cancel" class="btn btn-default">Cancel</button>
        <button id="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</div>
</body>
</html>