<?php require_once 'db_connection/connection.php'; ?>
<?php 
	$data = array();
 	$Name = $_GET['name'];
 	$DefaultNumber = $_GET['defaultNumber'];


    $sql = "INSERT INTO Services (Name, DefaultNumber ) 
    		VALUES ('$Name' , '$DefaultNumber')";

	if($con->query($sql) == TRUE ){
		$data['status'] = 'success';
		echo json_encode($data);
	}
	else{
		$data['status'] = 'error';
		echo json_encode($data);
	}
?>