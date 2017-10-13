<?php require_once '../php/db_connection/connection.php'; ?>
<?php
	function updateLogin($LoggedIn, $UserID){

		global $con, $LoggedIn, $UserID;

		$sql = "UPDATE users 
				SET LoggedIn = '$LoggedIn'
				WHERE UserID = $UserID";

		$con->query($sql);
	}
?>	