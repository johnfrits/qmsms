<?php require_once 'app/php/db_connection/connection.php'; ?>
<?php
    session_start();

	if(isset($_POST['username']) && isset($_POST['password'])){

		$username 			 = stripslashes($_POST['username']);
		$password 			 = stripslashes($_POST['password']);
		$username            = mysqli_real_escape_string($con, $username);
		$password            = mysqli_real_escape_string($con, $password);
		$password 			 = md5($password);
			
		$sql = " SELECT * FROM  users WHERE  Username  = '$username' and Password = '$password' ";

		$result = $con->query($sql);

		if($result->num_rows == 1){

			while($row = $result->fetch_assoc()){

				$_SESSION['userID']  				= $row['UserID'];
				$_SESSION['Role'] 	 				= $row['Role'];
				$_SESSION['Name']   	 			= $row['Name'];
				$_SESSION['AssignedCounterID']    	= $row['AssignedCounterID'];
				$data['status'] = 'error';
				echo json_encode($data);
				//go to app
				header('Location: app/');
			}
		}
	}
?>	