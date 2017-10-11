<?php require_once 'db_connection/connection.php'; ?>
<?php 
	$data = array();
 	$Name = $_GET['name'];
 	$DefaultNumber = $_GET['defaultNumber'];
 	$deptNameSelected = $_GET['deptName'];
 	$deptId;

	$sql = "SELECT *
            FROM department
            WHERE name = '$deptNameSelected'";

    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
      $deptId = $row['departmentId'];
    }

    $sql = "INSERT INTO Services (departmentId, Name, DefaultNumber) 
    		VALUES ('$deptId' , '$Name' , '$DefaultNumber')";

	if($con->query($sql) == TRUE ){
		$data['status'] = 'success';
		echo json_encode($data);
	}
	else{
		$data['status'] = 'error';
		echo json_encode($data);
	}
?>	