<?php require_once 'db_connection/connection.php'; ?>
<?php 
	
	$data = array();

 	$sql = "SELECT *
 			FROM  calls";

	$result = $con->query($sql);

	while ($row = $result->fetch_assoc()) {
		$CallID = $row['CallID'];
	}
	$data['CallID']  = $CallID;

	echo json_encode($data);

?>