
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

		$sql = 'SELECT 
				 s.ServiceID 		as ServiceID
				,d.name 			as Department
				,s.Name 			as ServiceName 
				,s.DefaultNumber	as DefaultNumber
				FROM  Services s
				LEFT JOIN department d 
				ON d.departmentId = s.departmentId';

		$result = $con->query($sql);

		
		while ($row = $result->fetch_assoc()) {

			echo "<tbody>
	            <tr>
	                <td>". $row['ServiceID'] ."</td>
	                <td>". $row['Department'] ."</td>
                    <td>". $row['ServiceName'] ."</td>
	                <td>". $row['DefaultNumber'] ."</td>
	                <td>
                    <a href='../app/modules/services/edit_services.php?serviceId=".$row['ServiceID']."' target='_blank' type='button' class='btn btn-warning'>
                    <span class='fa fa-pencil-square' aria-hidden='true'></span>
                    </a>
               	 	</td>
	            </tr>
	        </tbody>";

		}
	}
?>