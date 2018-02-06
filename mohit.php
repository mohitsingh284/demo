<?php
//echo "hi m here";


if(isset($_POST['mobile_number']))
{
	
include("connection.php");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


		if ($result = $mysqli->query("DELETE FROM set_appointment WHERE Unique_Mobile_Number='".$_POST['mobile_number']."'") or die(mysqli_error($mysqli))) 
		 {
				$res['status'] ="true";
				echo json_encode($res);		
		 }

		else
		 {
				$res['status'] ="false";
				echo json_encode($res);	
		 }

 
			


}

else
{
	$res['status'] = "error";
	echo json_encode($res);
}
	
?>