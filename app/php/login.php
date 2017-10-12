<?php require_once 'app/php/db_connection/connection.php'; ?>
<?php

	if(isset($_POST['username']) && isset($_POST['password'])){

		$username 			 = stripslashes($_POST['username']);
		$password 			 = stripslashes($_POST['password']);
		$username            = mysqli_real_escape_string($con, $username);
		$password            = mysqli_real_escape_string($con, $password);
		$password 			 = $password;
			
		$sql = " SELECT * FROM  users WHERE  Username  = '$username' and Password = '$password' ";

		$result = $con->query($sql);

		if($result->num_rows == 1){

			while($row = $result->fetch_assoc()){

				$_SESSION['userID']  				= $row['UserID'];
				$_SESSION['Role'] 	 				= $row['Role'];
				$_SESSION['Name']   	 			= $row['Name'];
				$_SESSION['AssignedCounterID']    	= $row['AssignedCounterID'];
				$CountersID = $row['AssignedCounterID'];

				$sql = " SELECT * FROM counters WHERE CountersID = $CountersID ";
				$result = $con->query($sql);
				while($row = $result->fetch_assoc()){
					$_SESSION['CounterName']  = $row['Name'];
				}

				$_SESSION['loggedin']    			= true;
				//go to app
				header('Location: app/');
			}
		}
	}
?>	