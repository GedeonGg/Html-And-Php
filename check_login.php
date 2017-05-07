<?php
require_once 'conn.php';
if(!empty($_POST['mailID']))
{	
	$query = "SELECT * FROM data where EmailID = '$_POST[mailID]' AND PASSWRD = '$_POST[PASSWRD]'";
	$result = mysqli_query($con, $query);
	
	if($result) {
	while($row = mysqli_fetch_assoc($result)) 
	{
		echo $row['EmailID'] . '<br>';	
	}
	}
	else 
	{ 
		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
	}	 
}
mysqli_close($con);
?>