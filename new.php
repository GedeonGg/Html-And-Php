<?php 
require_once 'conn.php';
$req1 = mysqli_query($con,'select id, Type, IMAGES from dogs') or die("could not be excuted");
while($dn1 = mysqli_fetch_array($req1))
{
	//echo "<img src='".$dn1['IMAGES']."'";
	?>
	<img src="Image/dogs/<?php echo $dn1['IMAGES']; ?>" width= "100px" height="100px"/>
	<?php
}

?>