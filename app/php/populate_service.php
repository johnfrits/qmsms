<?php require_once 'db_connection/connection.php'; ?>
<?php 

	$sql = "SELECT *
			FROM services";

	$result = $con->query($sql);

	
	while ($row = $result->fetch_assoc()) {

       	echo '<a href="addnumber.php?serviceid='. $row['ServiceID'] .'">
                <div class="col-sm-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-body"> 
                          '. $row['Name']  .'
                        </div>
                    </div>
                </div>
       	</a>';
		
	}
	echo '</select>';
	
?>