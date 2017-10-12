<?php require_once 'text_ticket.php'; ?>
<?php 


	function getnthqueue($serviceid){

		global $con, $serviceid;

		$sql = "
				SELECT MAX(B.TicketNumber) AS 'TicketNumber', A.PhoneNumber as 'PhoneNumber'
 				FROM customers A 
			 	LEFT JOIN
			 	(
			     	SELECT * FROM queues 
			     	WHERE CreatedDateTime > CURRENT_DATE
			     	AND Called = 0
			     	AND ServiceID = $serviceid
			     	LIMIT 5
			 	) B
 				ON A.CustomerID = B.CustomerID
 				GROUP BY B.TicketNumber DESC
 				LIMIT 1 ";

		$result = $con->query($sql);

		while ($row = $result->fetch_assoc()) {
			$PhoneNumber = $row['PhoneNumber'];
			$TicketNumber = $row['TicketNumber'];
			if($PhoneNumber != "" && $TicketNumber != "" && $PhoneNumber != "printed"){
				if(textTicket($PhoneNumber, $TicketNumber)){
					return true;
				}
			}
		}
	}
?>