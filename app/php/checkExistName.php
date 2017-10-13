<?php require_once 'db_connection/connection.php'; ?>
<?php 
    
    function checkUserNameExist($username){
        global $con, $username;

        $sql = "SELECT * FROM users WHERE Username = '$username' AND status = 'Active'";

        $result = $con->query($sql);

        if($result->num_rows == 1)
            return "true";
        else
            return "false";
    }

   function checkServiceNameExist($Name){
        global $con, $Name;

        $sql = "SELECT * FROM services WHERE Name = '$Name' AND status = 'Active'";

        $result = $con->query($sql);

        if($result->num_rows == 1)
            return "true";
        else
            return "false";
    }

    function checkDepartmentNameExist($Name){
        global $con, $Name;

        $sql = "SELECT * FROM department WHERE Name = '$Name' AND status = 'Active'";

        $result = $con->query($sql);

        if($result->num_rows == 1)
            return "true";
        else
            return "false";
    }
 
?>