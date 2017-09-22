<?php require_once 'db_connection/connection.php'; ?>
<?php 
	$data = array();
 	$Name = $_GET['name'];
 	$AssignedService = $_GET['assignedService'];


    $sql = "INSERT INTO Counters (Name, AssignedService ) 
    		VALUES ('$Name' , '$AssignedService')";

	if($con->query($sql) == TRUE ){
		$data['status'] = 'success';
		echo json_encode($data);
	}
	else{
		$data['status'] = 'error';
		echo json_encode($data);
	}
?>