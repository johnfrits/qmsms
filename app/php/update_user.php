<?php require_once 'db_connection/connection.php'; ?>
<?php 

	$data = array();
	$UserId = $_GET['userid'];
 	$Name = $_GET['name'];
 	$username = isset($_GET['username']) ? $_GET['username'] : "";
	$password = isset($_GET['password']) ? $_GET['password'] : "";
	$email = isset($_GET['email']) ? $_GET['email'] : "";
	$role = isset($_GET['role']) ? $_GET['role'] : "";
	$assignedCounter = isset($_GET['assignedCounter']) ? $_GET['assignedCounter'] : "";
 	$counterId;


	if($Name != 'Active'){

		$sql = "SELECT *
        FROM counters
        WHERE name = '$assignedCounter'";

		$result = $con->query($sql);

		while ($row = $result->fetch_assoc()) {
		  $counterId = $row['CountersID'];
		}

		if($password != ""){

			$sql = "UPDATE users
			SET name 				= '$Name' 
				,Username 			= '$username'
				,Password 			= '$password'
				,Email 				= '$email'
				,Role 				= '$role'
				,AssignedCounterID	=  $counterId
			WHERE UserID 			=$UserId ";
		}else{
			$sql = "UPDATE users
			SET name 				= '$Name' 
				,Username 			= '$username'
				,Email 				= '$email'
				,Role 				= '$role'
				,AssignedCounterID	=  $counterId
			WHERE UserID 			=$UserId ";
		}
	

		if ($con->query($sql) === TRUE)
		    $data['success'] = true;
		else 
		    $data['success'] = false;
	}
	else{
		$sql = "UPDATE users
		SET status = 'Not Active'
		WHERE UserID='$UserId' ";

		if ($con->query($sql) === TRUE)
		    $data['success'] = true;
		else 
		    $data['success'] = false;
	}


	echo json_encode($data);
?>