<?php require_once 'db_connection/connection.php'; ?>
<?php 

	$sql = "SELECT *
			FROM department";

	$result = $con->query($sql);

	
	while ($row = $result->fetch_assoc()) {

       	echo 
       		'<a href="services.php?departmentid='. $row['departmentId'] .'">
                <div class="col-sm-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-body"> 
                          '. $row['name']  .'
                        </div>
                    </div>
                </div>
            </a>';
		
	}
	echo '</select>';
	
?>