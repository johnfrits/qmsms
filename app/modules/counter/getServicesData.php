<?php require_once '../../php/db_connection/connection.php'; ?>
<?php 

	function populate_combobox_service(){
        global $con;

    $sql = "SELECT *
            FROM services s
            WHERE status = 'Active'
            AND NOT EXISTS (SELECT * FROM counters c WHERE c.AssignedService = s.ServiceID AND status = 'Active')";

    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
      echo '<option>'.$row['Name'].'</option>';
    }

  }

  function get_default_counter_name(){

    global $con, $count;

    $sql = "SELECT COUNT(CountersID)
            FROM counters";

    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
        $count = $row['COUNT(CountersID)'];

        $count++;
        $count = "Counter " . $count;
        echo '<input type="text" class="form-control" id="couterName" value = "'.$count. '" placeholder="Default Number" readonly="readonly">';
    }

  }

?>