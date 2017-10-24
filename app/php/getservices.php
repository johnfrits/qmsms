<?php require_once 'db_connection/connection.php'; ?>
<?php 
	$data = array();
	$serviceId = $_GET['serviceId'];

	$sql = 'SELECT 
		 s.ServiceID 		as ServiceID
		,d.name 			as Department
		,s.Name 			as ServiceName 
		,s.Prefix 			as Prefix
		,s.DefaultNumber	as DefaultNumber
		FROM  Services s
		LEFT JOIN department d 
		ON d.departmentId = s.departmentId
		WHERE s.ServiceID = '.$serviceId.'';

	$result = $con->query($sql);

	
	while ($row = $result->fetch_assoc()) {

		$data['name'] = $row['ServiceName'];
		$data['deptName'] = $row['Department'];
		$data['prefix'] = $row['Prefix'];
		$data['defaultNumber'] = $row['DefaultNumber'];
		$data['success'] = true;
		echo json_encode($data);
	}
	
?>