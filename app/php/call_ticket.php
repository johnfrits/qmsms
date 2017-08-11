<?php require_once 'db_connection/connection.php'; ?>
<?php
 	
 	$data = array();

	// if(isset($_GET['usersID'])){

		$userid = 2;
		$queueid = '';
		$currentId = '';

		$sql = 'SELECT * 
		FROM calls 
		WHERE CalledDateTime 
		= (	SELECT MAX(	CalledDateTime ) as CalledDateTime 
			FROM calls )';

		$result = $con->query($sql);

		while ($row = $result->fetch_assoc()) {
			$currentId = $row['QueueID'];
		}
		echo $currentId;

		$sql = 'SELECT * 
		FROM queues 
		WHERE CreatedDateTime 
		= (	SELECT MIN(	CreatedDateTime ) as CreatedDateTime 
			FROM queues WHERE Called = 0 )';

		$result = $con->query($sql);

		while ($row = $result->fetch_assoc()) {
			$queueid = $row['QueueID'];
		}
		echo $queueid;

		if($currentId == $queueid){

			$sql = "UPDATE queues
					SET Called = 1   
					WHERE QueueID = '$queueid'";

			if($con->query($sql) == TRUE){

			
			}
		}		
		else{
			
			$sql = "INSERT INTO calls (QueueID, CountersID, UsersID) 
				VALUES ( '$queueid', 2, '$userid' ) ";

			if($con->query($sql) == TRUE ){
				$data['status'] = 'success';
				echo json_encode($data);	
			}else{
				$data['status'] = 'error';
				echo json_encode($data);
			}
		}
	//}
?>	