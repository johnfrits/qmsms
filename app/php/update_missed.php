<?php require_once 'db_connection/connection.php'; ?>
<?php 

	$data = array();
	$queueId = $_GET['queueid'];
	$missed = $_GET['missed'];

	if($missed == TRUE){
		$sql = "UPDATE queues
		SET Missed = 1
		WHERE QueueID=$queueId ";

		if ($con->query($sql) === TRUE)
		    $data['success'] = true;
		else 
		    $data['success'] = false;
	}
	echo json_encode($data);
?>