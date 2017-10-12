<?php require_once '../../php/db_connection/connection.php'; ?>
<?php 

	function populate_combobox_counter(){
        global $con;

    $sql = "SELECT *
            FROM counters c
            WHERE status = 'Active'
            AND NOT EXISTS (SELECT * FROM users u WHERE u.AssignedCounterID = c.CountersID AND status = 'Active')";

    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
      echo '<option>'.$row['Name'].'</option>';
    }

  }

?>