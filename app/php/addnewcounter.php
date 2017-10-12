<?php require_once 'db_connection/connection.php'; ?>
<?php 
	$data = array();
 	$Name = $_GET['name'];
 	$AssignedService = $_GET['assignedService'];
 	$serviceId;

	$sql = "SELECT *
            FROM services
            WHERE Name = '$AssignedService'";

    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
      $serviceId = $row['ServiceID'];
    }

    $sql = "INSERT INTO Counters (Name, AssignedService ) 
    		VALUES ('$Name' , '$serviceId')";

	if($con->query($sql) == TRUE ){
		$data['status'] = 'success';
		echo json_encode($data);
	}
	else{
		$data['status'] = 'error';
		echo json_encode($data);
	}
?>