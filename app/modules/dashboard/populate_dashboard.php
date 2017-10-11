<?php require_once '../../php/db_connection/connection.php'; ?>
<?php 

	function today_queue(){

		global $counterId, $serviceId, $con, $count;

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

    		$sql = "SELECT COUNT(ServiceID)
    				FROM  queues
    				WHERE ServiceID = $serviceId
    				AND CreatedDateTime > CURRENT_DATE";

    		$result = $con->query($sql);

        	while ($row = $result->fetch_assoc()) {
           		$count = $row['COUNT(ServiceID)'];
           	}
    		echo '<h2 class="text-success">'.$count.'</h2>';
	}

	function today_missed(){

		global $counterId, $serviceId, $con, $count;

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

    		$sql = "SELECT COUNT(ServiceID)
    				FROM  queues
    				WHERE ServiceID = $serviceId
    				AND Missed = 1
    				AND CreatedDateTime > CURRENT_DATE";

    		$result = $con->query($sql);

        	while ($row = $result->fetch_assoc()) {
           		$count = $row['COUNT(ServiceID)'];
           	}
    		echo '<h2 class="text-warning">'.$count.'</h2>';
	}

	function today_served(){

		global $counterId, $serviceId, $con, $count;

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

		$sql = "SELECT COUNT(ServiceID)
				FROM  queues
				WHERE ServiceID = $serviceId
				AND Missed = 0
        AND Called = 1
				AND CreatedDateTime > CURRENT_DATE";

		$result = $con->query($sql);

    	while ($row = $result->fetch_assoc()) {
       		$count = $row['COUNT(ServiceID)'];
       	}
		echo '<h2 class="text-danger">'.$count.'</h2>';

	}

	function total_served(){

		global $counterId, $serviceId, $con, $count;

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

		$sql = "SELECT COUNT(ServiceID)
				FROM  queues
				WHERE ServiceID = $serviceId
        AND Missed = 0
        AND Called = 1";

		$result = $con->query($sql);

    	while ($row = $result->fetch_assoc()) {
       		$count = $row['COUNT(ServiceID)'];
       	}
		echo '<h2 class="text-info">'.$count.'</h2>';
	}
?>