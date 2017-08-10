<?php require_once 'db_connection/connection.php'; ?>
<?php 
	

	function populate_table(){

		global $con;

		$sql = "SELECT Customers.PhoneNumber, 
					   Services.Name, 
					   Queues.TicketNumber,
					   Queues.Called,
					   Queues.CreatedDateTime
				FROM   Queues, Customers, Services
				WHERE  Queues.ServiceID = Services.ServiceID
				AND    Queues.CustomerID = Customers.CustomerID";

		$result = $con->query($sql);

		
		while ($row = $result->fetch_assoc()) {

			echo '<tbody>
	            <tr>
	                <td>'. $row['Name'] .'</td>
	                <td>'. $row['PhoneNumber'] .'</td>
	                <td>'. $row['TicketNumber'] .'</td>
	                <td>'. $row['Called'] .'</td>
	                <td>'. $row['CreatedDateTime'] .'</td>
	            </tr>
	        </tbody>';

		}
	}
?>