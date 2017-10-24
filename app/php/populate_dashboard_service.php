
<?php require_once 'db_connection/connection.php'; ?>
<?php 
	

	function populate_table(){

		global $con;

		$sql = "SELECT 
				 s.ServiceID 		as ServiceID
				,d.name 			as Department
				,s.Name 			as ServiceName 
				,s.DefaultNumber	as DefaultNumber
				,s.Prefix			as Prefix
				FROM  Services s
				LEFT JOIN department d 
				ON d.departmentId = s.departmentId
				WHERE s.status = 'Active'";

		$result = $con->query($sql);

		
		while ($row = $result->fetch_assoc()) {

			echo "<tbody>
	            <tr>
	                <td>". $row['ServiceID'] ."</td>
	                <td>". $row['Department'] ."</td>
                    <td>". $row['ServiceName'] ."</td>
                 	<td>". $row['Prefix'] ."</td>
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