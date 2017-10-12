<?php ob_start();?>
<?php session_start();?>
<?php include 'getUserData.php'; ?>
<?php 
  if(!$_SESSION['loggedin']){
      header("Location: HTTP/1.1 404 File Not Found", 404);
      exit;
  }
?>

<!DOCTYPE HTML>
<html lang="en">
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
    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <!-- Custom JS -->
    <script src="editusers.js"></script>
    <style type="text/css">
        body{
          background-color: #fd6b68;
        }
        .form{
          width: 900px;
          height: 600px;
          margin: 0 auto;
          margin-top: 3%;
          background-color: white;
          padding: 20px 20px 20px 20px;
        }
        .navbar-brand {
          color: white;
        }
        legend{
          text-align: center;
        }
        .navbar-brand a{
          color: white;
        }
        fieldset{
          width: 100%;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <div class="form">
        <div class="form-horizontal">
          <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" style="color: white;">QMSMS | DAVAO CITY</a>
              </div>
            </div>
          </nav>
          <legend>EDIT COUNTER</legend>
         <fieldset>
            <div class="form-group">
              <label for="inputPassword" class="col-lg-3 control-label">Name</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" id="inputName" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-lg-3 control-label">Username</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" id="inputUsername" placeholder="Username">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-lg-3 control-label">Old Password</label>
              <div class="col-lg-5">
                <input type="password" class="form-control" id="oldinputPassword" placeholder="Old Password">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-lg-3 control-label">New Password</label>
              <div class="col-lg-5">
                <input type="password" class="form-control" id="newinputPassword" placeholder="New Password">
              </div>
            </div>
             <div class="form-group">
              <label for="inputPassword" class="col-lg-3 control-label">Re-type Password</label>
              <div class="col-lg-5">
                <input type="password" class="form-control" id="inputRePassword" placeholder="Re-type Password">
              </div>
            </div>
              <div class="form-group">
              <label for="inputPassword" class="col-lg-3 control-label">Email</label>
              <div class="col-lg-5">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
              </div>
            </div>
               <div class="form-group">
              <label for="select" class="col-lg-3 control-label">Role</label>
              <div class="col-lg-5">
                <select class="form-control" id="selectRole">
                <option>Staff</option>
                <option>Administrator</option>
                </select>
              </div>
            </div>
             <div class="form-group">
              <label for="select" class="col-lg-3 control-label">Assigned Counter</label>
              <div class="col-lg-5">
                <select class="form-control" id="selectCounter">
                <?php 
                    populate_combobox_counter();
                 ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-8 col-lg-offset-3">
                <button id="delete" class="btn btn-danger">Delete</button>
                <button id="cancel" class="btn btn-default">Cancel</button>
                <button id="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </fieldset>
        </div>
    </div>   
</div>
</body>
</html>

