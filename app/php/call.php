<?php require_once 'db_connection/connection.php'; ?>
<?php 
	
	$data = array();
	$TicketNumber = '';
	$CallID = '';
	$QueueID = '';
	$CountersID = '';
	$serviceName = '';
	$prefix = '';
	$AssignedService = '';
	$CounterName 	= '';
	$count = 0;
	//get last call
	$sql = 'SELECT * 
	FROM calls 
	WHERE CalledDateTime 
	= (	SELECT MAX(	CalledDateTime ) as CalledDateTime 
		FROM calls
		WHERE CalledDateTime > CURRENT_DATE )';

	$result = $con->query($sql);

	while ($row = $result->fetch_assoc()) {
		$CallID = $row['CallID'];
		$QueueID = $row['QueueID'];
		$CountersID = $row['CountersID'];
	}
	// get ticket number
 	$sql = "SELECT *
			FROM  queues
			WHERE QueueID = '$QueueID'";

	$result = $con->query($sql);

	while ($row = $result->fetch_assoc()) {
		$TicketNumber = $row['TicketNumber'];
	}
	//count how many counters
	$sql = "SELECT *
			FROM  counters";

	$result = $con->query($sql);

	while ($row = $result->fetch_assoc()) {
		$count += 1;
	}
	// get counter assigned service 
	$sql = "SELECT *
			FROM  counters
			WHERE CountersID = '$CountersID'";

	$result = $con->query($sql);

	while ($row = $result->fetch_assoc()) {
		$AssignedService = $row['AssignedService'];
		$CounterName = $row['Name'];
	}

	// get name service
	$sql = "SELECT *
			FROM  services
			WHERE ServiceID = '$AssignedService'";

	$result = $con->query($sql);

	while ($row = $result->fetch_assoc()) {
		$serviceName = $row['Name'];
		$prefix = $row['Prefix'];
	}



	$data['CallID']  = $CallID;
	$data['CounterName'] = $CounterName;
	$data['TicketNumber'] = $TicketNumber;
	$data['ServiceName'] = $serviceName;
	$data['Prefix'] = $prefix;
	$data['Count'] = $count;
	echo json_encode($data);

?>