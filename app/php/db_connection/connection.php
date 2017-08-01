<?php
	 $con = mysqli_connect("localhost", "root", "", "qmsms");

	 if(mysqli_connect_errno()){
	 	die("Could not connect ". mysqli_error());
	 }
?>