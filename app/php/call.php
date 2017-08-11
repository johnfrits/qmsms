<?php require_once 'db_connection/connection.php'; ?>
<?php 
	
	$data = array();
	$TicketNumber = '';
	$CallID = '';
	$QueueID = '';
	$CountersID = '';
	
	$sql = 'SELECT * 
	FROM calls 
	WHERE CalledDateTime 
	= (	SELECT MAX(	CalledDateTime ) as CalledDateTime 
		FROM calls )';

	$result = $con->query($sql);

	while ($row = $result->fetch_assoc()) {
		$CallID = $row['CallID'];
		$QueueID = $row['QueueID'];
		$CountersID = $row['CountersID'];
	}

 	$sql = "SELECT *
			FROM  queues
			WHERE QueueID = '$QueueID'";

	$result = $con->query($sql);

	while ($row = $result->fetch_assoc()) {
		$TicketNumber = $row['TicketNumber'];
	}

	$data['CallID']  = $CallID;
	$data['TicketNumber'] = $TicketNumber;
	$data['CountersID'] = $CountersID;
	echo json_encode($data);

?>