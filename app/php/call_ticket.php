<?php require_once 'db_connection/connection.php'; ?>
<?php
 	
 	$data = array();
	if(isset($_GET['usersID'])){

		$userid = $_GET['usersID'];
		$callagain = isset($_GET['callagain']) ? true : false;
		$counterid = $_GET['counterid'];
		$queueid = '';
		$serviceid = '';

		$sql = 'SELECT *
				FROM counters
				WHERE CountersID = '.$counterid.'';

		$result = $con->query($sql);
		
		while ($row = $result->fetch_assoc()) {
			$serviceid = $row['AssignedService'];
		}

		if($callagain == true){
			if(isset($_GET['queueid'])){
				
				$queueid = $_GET['queueid'];

				$sql = "SELECT * 	
						FROM queues 
						WHERE QueueID = '.$queueid.'
						AND ServiceID = '.$serviceid.'";

				$result = $con->query($sql);

				while ($row = $result->fetch_assoc()) {
					$queueid = $row['QueueID'];
				}

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
		}
		if($callagain == false){

			$sql = 'SELECT * 
					FROM queues 
					WHERE CreatedDateTime 
					= (	SELECT MIN(	CreatedDateTime ) as CreatedDateTime 
						FROM queues 
						WHERE Called = 0)';

			$result = $con->query($sql);

			while ($row = $result->fetch_assoc()) {
				$queueid = $row['QueueID'];
			}

			$sql = "UPDATE queues
					SET Called = 1   
					WHERE QueueID = '$queueid'";

			if($con->query($sql) == TRUE){

				$sql = "INSERT INTO calls (QueueID, CountersID, UsersID) 
					VALUES ( '$queueid', 2, '$userid' ) ";

				if($con->query($sql) == TRUE ){
					$data['status'] = 'success';
					$data['queueid'] = $queueid;
					echo json_encode($data);	
				}else{
					$data['status'] = 'error';
					echo json_encode($data);
				}
			}
		}
	}
?>	