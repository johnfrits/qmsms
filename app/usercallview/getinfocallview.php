<?php require_once '../php/db_connection/connection.php'; ?>
<?php 
  
  $userID = $_GET['usersID'];
  $data = array();
	$sql = 
  "SELECT c.Name AS Counter, s.Name AS Service
  FROM users u
  LEFT JOIN counters c ON c.CountersID = U.AssignedCounterID
  LEFT JOIN services S ON s.ServiceID = c.AssignedService
  WHERE u.UserID = $userID";

	$result = $con->query($sql);

	while ($row = $result->fetch_assoc()) {

        $data['Counter'] = $row['Counter'];
        $data['Service'] = $row['Service'];
        echo json_encode($data);
	}
	
?>