<?php require_once 'db_connection/connection.php'; ?>
<?php 

	$data = array();
 	$Name = $_GET['name'];
 	$DefaultNumber = isset($_GET['defaultNumber']) ? $_GET['defaultNumber'] : 0;
 	$deptNameSelected = isset($_GET['deptName']) ? $_GET['deptName'] : 0;
 	$serviceId = $_GET['serviceId'];
 	$deptId;

	$sql = "SELECT *
            FROM department
            WHERE name = '$deptNameSelected'";

    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
      $deptId = $row['departmentId'];
    }


	if($Name != 'Active'){
		$sql = "UPDATE Services
		SET name = '$Name' , departmentId = '$deptId'
		WHERE ServiceID='$serviceId' ";

		if ($con->query($sql) === TRUE)
		    $data['success'] = true;
		else 
		    $data['success'] = false;
	}
	else{
		$sql = "UPDATE Services
		SET status = 'Not Active'
		WHERE ServiceID='$serviceId' ";

		if ($con->query($sql) === TRUE)
		    $data['success'] = true;
		else 
		    $data['success'] = false;
	}


	echo json_encode($data);
?>