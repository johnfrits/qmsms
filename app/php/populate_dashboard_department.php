<?php require_once 'db_connection/connection.php'; ?>
<?php 
	

	function populate_table(){

		global $con;

		$sql = "SELECT *
				FROM  Department
				WHERE status = 'Active'";

		$result = $con->query($sql);

		
		while ($row = $result->fetch_assoc()) {

			echo "<tbody>
	            <tr>
	                <td>". $row['departmentId'] 	."</td>
	                <td>". $row['name'] 			."</td>
	                <td>". $row['datecreated'] 		."</td>
	                <td>
                    <a href='../app/modules/department/edit_department.php?departmentId=".$row['departmentId']."' target='_blank' type='button' class='btn btn-warning'>
                    <span class='fa fa-pencil-square' aria-hidden='true'></span>
                    </a>
               	 	</td>
	            </tr>
	        </tbody>";

		}
	}
?>