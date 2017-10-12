<?php require_once '../../php/db_connection/connection.php'; ?>
<?php 

    $data = array();
    $oldpassword = $_GET['oldpassword'];
    $userid = $_GET['userid'];

    $sql = "SELECT * FROM  users WHERE UserID = $userid AND Password  = '$oldpassword'";

    $result = $con->query($sql);

    if($result->num_rows == 1)
        $data['success'] = true;
    else
        $data['success'] = false;

    echo json_encode($data);
?>