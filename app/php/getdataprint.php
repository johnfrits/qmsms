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
			WHERE  ServiceID  = $serviceId";

	$result = $con->query($sql);


	if($result->num_rows >= 1){ 

	$sql = "SELECT MAX(TicketNumber) as TicketNumber, CreatedDateTime
				FROM queues 
				WHERE ServiceID = '$serviceId'
				AND CreatedDateTime > CURRENT_DATE";

		$result = $con->query($sql);

		while ($row = $result->fetch_assoc()) {
			$ticketNumber = $row['TicketNumber'];
			$getDate = $row['CreatedDateTime'];
		}

		$today = date("Y-m-d H:i:s");	

		if($today > $getDate){

			$sql = "SELECT DefaultNumber 
			FROM services 
			WHERE ServiceID = '$serviceId'";

			$result = $con->query($sql);

			while ($row = $result->fetch_assoc()) {
				$ticketNumber = $row['DefaultNumber'];
			}

			$ticketNumber++;
			$data['ticketNumber'] = $ticketNumber;
			$data['newticket'] = true;

		} else{

			$ticketNumber++;
			$data['ticketNumber'] = $ticketNumber;
			$data['newticket'] = false;
		}

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

	$sql = "SELECT s.Name AS ServiceName, d.name AS DepartmentName, s.Prefix AS Prefix
			FROM services s
			LEFT JOIN department d ON d.departmentId = s.departmentId
			WHERE ServiceID = $serviceId";

			$result = $con->query($sql);

			while ($row = $result->fetch_assoc()) {
				$serviceName = $row['ServiceName'];
				$departName = $row['DepartmentName'];
				$prefix = $row['Prefix'];
			}
			$data['Prefix'] = $prefix;
			$data['ServiceName'] = $serviceName;
		 	$data['DepartmentName'] = $departName;


    $sql = "INSERT INTO customers (PhoneNumber) 
    		VALUES ('$customerInput')";

	if($con->query($sql) == TRUE ){
		
		$customerId = $con->insert_id;
		
		$sql = "SELECT *
		FROM   queues  
		WHERE  Called  = 0
		AND ServiceID = $serviceId
		AND CreatedDateTime > CURRENT_DATE";

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