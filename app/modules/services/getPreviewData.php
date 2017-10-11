<?php require_once '../../php/db_connection/connection.php'; ?>
<?php 

	function populate_combobox_department(){
        global $con;

    $sql = "SELECT *
            FROM department
            WHERE status = 'Active'";

    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
      echo '<option>'.$row['name'].'</option>';
    }

  }

  function get_default_number(){

    global $con, $count;

    $sql = "SELECT COUNT(ServiceID)
            FROM services";

    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
        $count = $row['COUNT(ServiceID)'];

        $count++;
        $count = $count . "000";
        echo '<input type="text" class="form-control" id="defaultNumber" value = "'.$count. '" placeholder="Default Number" readonly="readonly">';
    }

  }

?>