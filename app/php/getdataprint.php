<?php require_once 'db_connection/connection.php'; ?>
<?php 

 	$customerInput = 'printed';
 	$serviceId = $_GET['serviceid'];
	$ticketNumber = "";
	$waiting = "";
	$serviceName = "";
	$departName = "";
	$data = array();

 	$sql = "SELECT *
 			FROM   queues  
			WHERE  ServiceID  = '$serviceId'";

	$result = $con->query($sql);


	if($result->num_rows >= 1){

		$sql = "SELECT MAX(TicketNumber) as TicketNumber
				FROM queues 
				WHERE ServiceID = '$serviceId'";

		$result = $con->query($sql);

		while ($row = $result->fetch_assoc()) {
			$ticketNumber = $row['TicketNumber'];
		}

		$ticketNumber++;

		$data['ticketNumber'] = $ticketNumber;
		
	}else{
		// do this when theres no first queue
		$sql = "SELECT DefaultNumber 
			FROM services 
			WHERE ServiceID = '$serviceId'";

		$result = $con->query($sql);

		while ($row = $result->fetch_assoc()) {
			$ticketNumber = $row['DefaultNumber'];
		}

		$ticketNumber++;

		$data['ticketNumber'] = $ticketNumber;
	}

	$sql = "SELECT s.Name AS ServiceName, d.name AS DepartmentName
			FROM services s
			LEFT JOIN department d ON d.departmentId = s.departmentId
			WHERE ServiceID = $serviceId";

			$result = $con->query($sql);

			while ($row = $result->fetch_assoc()) {
				$serviceName = $row['ServiceName'];
				$departName = $row['DepartmentName'];
			}

			$data['ServiceName'] = $serviceName;
		 	$data['DepartmentName'] = $departName;


    $sql = "INSERT INTO customers (PhoneNumber) 
    		VALUES ('$customerInput')";

	if($con->query($sql) == TRUE ){
		
		$customerId = $con->insert_id;
		
		$sql = "SELECT *
		FROM   queues  
		WHERE  Called  = 0
		AND ServiceID = $serviceId";

		$result = $con->query($sql);

		$waiting = $result->num_rows;
		$data['waiting'] = $waiting;

	   	$sql = "INSERT INTO queues (serviceId, CustomerID, TicketNumber) 
		  		VALUES ('$serviceId', '$customerId' ,'$ticketNumber')";

		if($con->query($sql) == TRUE){

			$data['status'] = 'success';
			echo json_encode($data);	
		}else{

			$data['status'] = 'error';
			echo json_encode($data);
		}
	}
?>