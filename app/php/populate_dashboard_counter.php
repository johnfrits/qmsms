
<?php require_once 'db_connection/connection.php'; ?>
<?php 
	

	function populate_table(){

		global $con;

		$sql = "SELECT c.CountersID, c.Name as CounterName, s.Name as AssignedService
				FROM  Counters c 
				LEFT JOIN Services s ON s.ServiceID = C.AssignedService
				WHERE c.status = 'Active'";

		$result = $con->query($sql);

		
		while ($row = $result->fetch_assoc()) {

			echo "<tbody>
	            <tr>
	                <td>". $row['CountersID'] ."</td>
	                <td>". $row['CounterName'] ."</td>
	                <td>". $row['AssignedService'] ."</td>
	                  <td>
                    <a href='../app/modules/counter/edit_counter.php?counterId=".$row['CountersID']."' target='_blank' type='button' class='btn btn-warning'>
                    <span class='fa fa-pencil-square' aria-hidden='true'></span>
                    </a>
               	 	</td>
	            </tr>
	        </tbody>";

		}
	}
?>