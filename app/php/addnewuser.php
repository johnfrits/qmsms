<?php require_once 'db_connection/connection.php'; ?>
<?php 
	$data = array();
 	$Name = $_GET['name'];
 	$username = $_GET['username'];
 	$password = $_GET['password'];
 	$email = $_GET['email'];
 	$role = $_GET['role'];
 	$assignedCounter = $_GET['assignedCounter'];

    $sql = "INSERT INTO Users (Name, Username, Password, Email, Role, AssignedCounterID ) 
    		VALUES ('$Name' , '$username' , '$password' , '$email' , '$role' , '$assignedCounter')";

	if($con->query($sql) == TRUE ){
		$data['status'] = 'success';
		echo json_encode($data);
	}
	else{
		$data['status'] = 'error';
		echo json_encode($data);
	}
?>