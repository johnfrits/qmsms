<?php include 'checklogout.php'; ?>
<?php 

	session_start();
	$UserID =  $_SESSION['userID'];  
	$LoggedIn = "No";
	updateLogin($LoggedIn, $UserID);	
	session_destroy();

	$loc = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/qmsms';
	header("Location: $loc");
	die;
?>