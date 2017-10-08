<?php require_once 'db_connection/connection.php'; ?>
<?php 

	$data = array();
	$deptId = $_GET['departmentId'];
	$newName = $_GET['name'];

	if($newName != 'Active'){
		$sql = "UPDATE Department
		SET name = '$newName'
		WHERE departmentId='$deptId' ";

		if ($con->query($sql) === TRUE)
		    $data['success'] = true;
		else 
		    $data['success'] = false;
	}
	else{
		$sql = "UPDATE Department
		SET status = 'Not Active'
		WHERE departmentId='$deptId' ";

		if ($con->query($sql) === TRUE)
		    $data['success'] = true;
		else 
		    $data['success'] = false;
	}


	echo json_encode($data);
?>