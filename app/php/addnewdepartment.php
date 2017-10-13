<?php require_once 'db_connection/connection.php'; ?>
<?php require_once 'checkExistName.php'; ?>
<?php 
	$data = array();
 	$Name = $_GET['name'];

   if(checkDepartmentNameExist($Name) == "true"){

		$data['departmentnametaken'] = 'taken';
		echo json_encode($data);

    }else{

	    $sql = "INSERT INTO Department (Name, status ) 
		VALUES ('$Name' , 'Active')";

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