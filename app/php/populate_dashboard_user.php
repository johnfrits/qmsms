
<?php require_once 'db_connection/connection.php'; ?>
<?php 
	

	function populate_table(){

		global $con;

		$sql = "SELECT u.UserId as UserID, u.Name as Name, u.Email as Email, u.Role as Role, c.Name as AssignedCounter
				FROM  users u
				LEFT JOIN counters c ON c.CountersID = u.AssignedCounterID
				WHERE u.status = 'Active'";

		$result = $con->query($sql);

		
		while ($row = $result->fetch_assoc()) {

			echo "<tbody>
	            <tr>
	                <td>". $row['UserID'] 			."</td>
	                <td>". $row['Name'] 			."</td>
	                <td>". $row['Email'] 			."</td>
	                <td>". $row['Role'] 			."</td>
	                <td>". $row['AssignedCounter'] 	."</td>
                 	<td>
                    <a href='../app/modules/users/editusers.php?userId=".$row['UserID']."' target='_blank' type='button' class='btn btn-warning'>
                    <span class='fa fa-pencil-square' aria-hidden='true'></span>
                    </a>
               	 	</td>
	            </tr>
	        </tbody>";

		}
	}
?>