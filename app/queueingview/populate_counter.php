<?php require_once '../php/db_connection/connection.php'; ?>
<?php 

	$sql = "SELECT *
			FROM counters";

	$result = $con->query($sql);
  $counterCount = 0;
	
	while ($row = $result->fetch_assoc()) {

        $counterCount++;

       	echo 
       		'<tr>
          <td>
            <h2 id="Counter'.$counterCount.'">
            '.$row['Name'] .'
            </h2>
          </td>
          <td >
            <h2 id="Service'.$counterCount.'">
        
            </h2>
          </td>
          <td>
            <h2 id="Prionumber'.$counterCount.'">
            
            </h2>
          </td>
          </tr>';
		
	}
	
?>