<?php require_once 'db_connection/connection.php'; ?>
<?php 
	$data = array();
	$counterId = $_GET['counterId'];

	$sql = "SELECT c.CountersID, c.Name as CounterName, s.Name as AssignedService
			FROM  Counters c 
			LEFT JOIN Services s ON s.ServiceID = C.AssignedService
			WHERE c.status = 'Active'
			AND CountersID = $counterId";

	$result = $con->query($sql);

	
	while ($row = $result->fetch_assoc()) {
		$data['name'] = $row['CounterName'];
		$data['assignedService'] = $row['AssignedService'];
		$data['success'] = true;
		echo json_encode($data);
	}
	
?>