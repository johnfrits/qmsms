<?php require_once 'db_connection/connection.php'; ?>
<?php 
	$data = array();
	$deptId = $_GET['departmentId'];

	$sql = "SELECT *
			FROM  Department
			WHERE departmentId='$deptId'";

	$result = $con->query($sql);

	
	while ($row = $result->fetch_assoc()) {

		$data['name'] = $row['name'];
		$data['success'] = true;
		echo json_encode($data);
	}
	
?>