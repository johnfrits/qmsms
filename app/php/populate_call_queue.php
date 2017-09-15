
<?php require_once 'db_connection/connection.php'; ?>
<?php 
	

	function populate_table(){

		global $counterId, $serviceId, $con;

		if(isset($_SESSION['AssignedCounterID'])) {
         	$counterId = $_SESSION['AssignedCounterID'];
       	} 

       	$sql = "SELECT *
       			FROM Counters
       			WHERE CountersID = '$counterId'";

       	$result = $con->query($sql);

       	while ($row = $result->fetch_assoc()) {
       		$serviceId = $row['AssignedService'];
       	}

		$sql = "SELECT Customers.PhoneNumber, 
					   Services.Name, 
					   Queues.TicketNumber,
					   Queues.Called,
					   Queues.CreatedDateTime
				FROM   Queues, Customers, Services
				WHERE  Queues.ServiceID = Services.ServiceID
				AND    Queues.CustomerID = Customers.CustomerID
				AND    Queues.ServiceID = $serviceId";

		$result = $con->query($sql);

		
		while ($row = $result->fetch_assoc()) {

			echo '<tbody>
	            <tr>
	                <td>'. $row['Name'] .'</td>
	                <td>'. $row['PhoneNumber'] .'</td>
	                <td>'. $row['TicketNumber'] .'</td>
	                <td>'. ($row['Called'] == 1 ? 'Called' : 'Not Called') .'</td>
	                <td>'. $row['CreatedDateTime'] .'</td>
	            </tr>
	        </tbody>';

		}
	}
?>