<?php require_once 'db_connection/connection.php'; ?>
<?php 
	$data = array();
	$usersId = $_GET['usersId'];

	
	$sql = "SELECT u.UserId as UserID
			, u.Name as Name
			, u.Username as Username
			, u.Email as Email
			, u.Role as Role
			, c.Name as AssignedCounter
			FROM  users u
			LEFT JOIN counters c ON c.CountersID = u.AssignedCounterID
			WHERE userID = $usersId";

	$result = $con->query($sql);

	while ($row = $result->fetch_assoc()) {

		$data['name'] = $row['Name'];
		$data['username'] = $row['Username'];
		$data['email'] = $row['Email'];
		$data['role'] = $row['Role'];
		$data['assignedCounter'] = $row['AssignedCounter'];
		$data['success'] = true;

		echo json_encode($data);
	}
	
?>