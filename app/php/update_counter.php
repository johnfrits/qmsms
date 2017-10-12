<?php require_once 'db_connection/connection.php'; ?>
<?php 

	$data = array();
 	$counterName = isset($_GET['counterName']) ? $_GET['counterName'] : 0;
 	$counterId = $_GET['counterId'];
 	$serviceId;

	if($counterName != 'Active'){

		$sql = "SELECT *
        FROM services
        WHERE Name = '$counterName'";

	    $result = $con->query($sql);

	    while ($row = $result->fetch_assoc()) {
	      $serviceId = $row['ServiceID'];
	    }

		$sql = "UPDATE Counters
		SET AssignedService = $serviceId
		WHERE CountersID=$counterId";

		if ($con->query($sql) === TRUE)
		    $data['success'] = true;
		else 
		    $data['success'] = false;
	}
	else{
		
		$sql = "UPDATE Counters
		SET status = 'Not Active'
		WHERE CountersID='$counterId' ";

		if ($con->query($sql) === TRUE)
		    $data['success'] = true;
		else 
		    $data['success'] = false;
	}


	echo json_encode($data);
?>