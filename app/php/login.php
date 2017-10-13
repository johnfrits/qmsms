<?php require_once 'app/php/db_connection/connection.php'; ?>
<?php require_once 'checklogin.php'; ?>
<?php
	

	if(isset($_POST['username']) && isset($_POST['password'])){

		if(!isset($_SESSION)){
			$LoggedIn = "No";
			updateLogin($LoggedIn, $UserID);
		}

		$username 			 = stripslashes($_POST['username']);
		$password 			 = stripslashes($_POST['password']);
		$username            = mysqli_real_escape_string($con, $username);
		$password            = mysqli_real_escape_string($con, $password);
		$password 			 = $password;
			
		$sql = " SELECT * FROM  users WHERE  Username  = '$username' and Password = '$password' and status = 'Active' ";

		$result = $con->query($sql);

		if($result->num_rows == 1){

			while($row = $result->fetch_assoc()){

				$LoggedIn 							= $row['LoggedIn'];
				$UserID  							= $row['UserID'];

				if($LoggedIn == "No"){

					$LoggedIn = "Yes";
					updateLogin($LoggedIn, $UserID);
				
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

				if($LoggedIn == "Yes"){
					echo "<script type='text/javascript'>alert('User has been logged in to another computer. Please try again.');</script>";
				}
			}
		}
	}
?>	