<?php require_once 'db_connection/connection.php'; ?>
<?php require_once 'checkExistName.php'; ?>

<?php 
	$data = array();
 	$Name = $_GET['name'];
 	$username = $_GET['username'];
 	$password = $_GET['password'];
 	$email = $_GET['email'];
 	$role = $_GET['role'];
 	$assignedCounter = $_GET['assignedCounter'];
 	$counterId;
 	
	$sql = "SELECT *
    FROM counters
    WHERE Name = '$assignedCounter'";

    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
      $counterId = $row['CountersID'];
    }

    if(checkUserNameExist($username) == "true"){

		$data['usernametaken'] = 'taken';
		echo json_encode($data);

    }else{

	 	$sql = "INSERT INTO Users (Name, Username, Password, Email, Role, AssignedCounterID ) 
		VALUES ('$Name' , '$username' , '$password' , '$email' , '$role' , '$counterId')";

		if($con->query($sql) == TRUE ){
			$data['status'] = 'success';
			echo json_encode($data);
		}
		else{
			$data['status'] = 'error';
			echo json_encode($data);
		}
    }
  
?>