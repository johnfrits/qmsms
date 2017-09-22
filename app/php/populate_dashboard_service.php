
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

		$sql = 'SELECT *
				FROM  Services';

		$result = $con->query($sql);

		
		while ($row = $result->fetch_assoc()) {

			echo '<tbody>
	            <tr>
	                <td>'. $row['ServiceID'] .'</td>
	                <td>'. $row['Name'] .'</td>
	                <td>'. $row['DefaultNumber'] .'</td>
	            </tr>
	        </tbody>';

		}
	}
?>