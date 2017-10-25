<?php require_once 'db_connection/connection.php'; ?>
<?php require_once 'getnthqueue.php'; ?>
<?php
 	
 	$data = array();
	if(isset($_GET['usersID'])){

		$userid = $_GET['usersID'];
		$callagain = isset($_GET['callagain']) ? true : false;
		$missed = isset($_GET['callagain']) ? 1 : 0;
		$queueid = '';
		$serviceid = '';
		$onqueue = '';
		$served = '';
		$name = '';
		$prefix = '';


		if(isset($_GET['counterid'])){
			$counterid = $_GET['counterid'];

			$sql = 'SELECT *
				FROM counters
				WHERE CountersID = '.$counterid.'';

				$result = $con->query($sql);
				
				while ($row = $result->fetch_assoc()) {
					$serviceid = $row['AssignedService'];
					$name = $row['Name'];
				}
		}


		if($callagain == true){
			if(isset($_GET['queueid'])){
				
				$queueid = $_GET['queueid'];

				if($queueid != 0){

					$sql = "SELECT * 	
							FROM queues 
							WHERE QueueID = '.$queueid.'";

					$result = $con->query($sql);

					while ($row = $result->fetch_assoc()) {
						$queueid = $row['QueueID'];
					}

					$sql = "INSERT INTO calls (QueueID, CountersID, UsersID) 
						VALUES ( '$queueid', $counterid, '$userid' ) "; 

					if($con->query($sql) == TRUE ){
						$data['status'] = 'success';
	 					echo json_encode($data);	
					}else{
						$data['status'] = 'error';
						echo json_encode($data);
					}	
				}
				else{
					$data['status'] = 'error';
					echo json_encode($data);
				}
			}
		}

		if($callagain == false){

			$sql = 'SELECT * 
				FROM queues 
				WHERE CreatedDateTime 
				= (	SELECT MIN(CreatedDateTime) AS CreatedDateTime 
					FROM queues 
					WHERE Called = 0
					AND ServiceID = '.$serviceid.' 
					AND CreatedDateTime > CURRENT_DATE )';

			$result = $con->query($sql);

			while ($row = $result->fetch_assoc()) {
				$queueid = $row['QueueID'];
				$ticketNumber = $row['TicketNumber'];
			}

			if($queueid != 0 && $ticketNumber != 0){

				$sql = "UPDATE queues
						SET Called = 1   
						WHERE QueueID = '$queueid'";

				if($con->query($sql) == TRUE){

					//get prefix
					$sql = "SELECT *
					FROM services
					WHERE ServiceID = $serviceid";

					$result = $con->query($sql);

					while ($row = $result->fetch_assoc()) {
						$prefix = $row['Prefix'];
					}

					// get onqueue
					$sql = 'SELECT *
					FROM queues
					WHERE Called = 0
					AND ServiceID = '.$serviceid.'
					AND CreatedDateTime > CURRENT_DATE';

					$result = $con->query($sql);
					$onqueue = $result->num_rows;

					// get served
					$sql = 'SELECT *
						FROM queues
						WHERE Called = 1
						AND ServiceID = '.$serviceid.'
						AND CreatedDateTime > CURRENT_DATE';

					$result = $con->query($sql);
					$served = $result->num_rows;

					if($onqueue >= 5){
						getnthqueue($serviceid);
					}


					$sql = "INSERT INTO calls (QueueID, CountersID, UsersID) 
						VALUES ( '$queueid', $counterid , '$userid' ) ";
		
					if($con->query($sql) == TRUE ){

						$data['status'] = 'success';
						$data['queueid'] = $queueid;
						$data['onqueue'] = $onqueue;
						$data['name'] = $name;
						$data['TicketNumber'] = $prefix . $ticketNumber;
						$data['served'] = $served;
						echo json_encode($data);	
					}else{
						$data['status'] = 'error';
						echo json_encode($data);
					}
				}
				//
			}else{
				$data['status'] = 'error';
				echo json_encode($data);	
			}
		}
	}
?>	