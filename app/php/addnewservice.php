<?php require_once 'db_connection/connection.php'; ?>
<?php require_once 'checkExistName.php'; ?>
<?php 
	$data = array();
 	$Name = $_GET['name'];
 	$DefaultNumber = $_GET['defaultNumber'];
 	$deptNameSelected = $_GET['deptName'];
 	$prefix = $_GET['prefix'];
 	$deptId;

	$sql = "SELECT *
            FROM department
            WHERE name = '$deptNameSelected'";

    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
      $deptId = $row['departmentId'];
    }


    if(checkServiceNameExist($Name) == "true"){

		$data['servicenametaken'] = 'taken';
		echo json_encode($data);

    }else{
	  	$sql = "INSERT INTO Services (departmentId, Name, DefaultNumber, Prefix) 
		VALUES ('$deptId' , '$Name' , '$DefaultNumber', '$prefix')";

		if($con->query($sql) == TRUE ){
			$data['status'] = 'success';
			echo json_encode($data);
		}
		else{
			$data['status'] = 'error';
			echo json_encode($data);
		}
    }
?>	