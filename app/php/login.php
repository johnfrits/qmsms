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
		   header('Location: app/');
			while($row = $result->fetch_assoc()){
				$Name 	= $row['Name'];
				$Role 	= $row['Role'];
			}
		}
	}
?>	