<?php require_once 'db_connection/connection.php'; ?>
<?php
 	
 	$data = array();

	if(isset($_GET['usersID'])){

		$userid = $_GET['usersID'];

		$sql = "INSERT INTO calls (QueueID, CountersID, UsersID) 
				VALUES ( 1, 2, '$userid') ";

		if($con->query($sql) == TRUE ){
			$data['status'] = 'success';
			echo json_encode($data);	
		}else{
			$data['status'] = 'error';
			echo json_encode($data);
		}
	}
?>	