<?php require_once 'db_connection/connection.php'; ?>
<?php include 'text_ticket.php' ?>
<?php 

 	$customerInput = $_GET['customerInput'];
 	$serviceId = $_GET['serviceid'];
	$ticketNumber = "";
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

	   	$sql = "INSERT INTO queues (ServiceID, CustomerID, TicketNumber) 
		  		VALUES ('$serviceId', '$customerId' ,'$ticketNumber')";

		if(textTicket($customerInput, $ticketNumber, $waiting) && $con->query($sql) == TRUE){

			$data['status'] = 'success';
			echo json_encode($data);	
		}else{

			$data['status'] = 'error';
			echo json_encode($data);
		}
	}
?>