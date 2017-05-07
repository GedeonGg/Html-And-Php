<html>
<?php 
require_once 'conn.php';
$req1 = mysqli_query($con,'select id, Type, IMAGES, IMAGES2 from dogs') or die("could not be excuted");
while($dn1 = mysqli_fetch_array($req1))
{
?>
	<head>
			<style>
					table
				{
					height:400px;
					width:400px;
					border-radius:15px;
				}
					div#home
			{
				height: 40px;
				width: 500px;
				border: 1px solid black;
				margin-left: auto ;
				margin-right: auto ;
				text-align: center;
				background-image: url("bg.png");
				border-radius:15px;
			}
				table
				{
					height:400px;
					width:400px;
					background-image: url("bg.png");
					padding:20px;
				}
				body
				{
					background-repeat: no-repeat;
					background-image: url(".jpg");
				}
			</style>
	</head>
	<body style="background-image:url:(".jpg)">
				<form style="border: 1px solid black" align="center">
							<caption>Dogs informarions</caption>
							<tr>
											<table align="center" style="border: 1px solid black" align="center">

												
										
													<tr>
														<td>
															<p align="center">id</p><br/>
															<td class="left"><?php echo $dn1['id']; ?>
															</td>
															<p align="center">Type</p><br/>
															<td class="left"><?php echo $dn1['Type']; ?>
															</td>
														<td>	
															<p align="center">Images</p><br/>
															<img src="Image/dogs/<?php echo $dn1['IMAGES']; ?>" width= "200px" height="200px"/>
														</td>
														<td>	
															<p align="center">Images</p><br/>
															<img src="Image/dogs/<?php echo $dn1['IMAGES2']; ?>" width= "200px" height="200px"/>
														</td>
													</tr>
											
								
											</table>
										</tr>
				</form>
	</body>
	
				<div id="home">
								<a href="index.php"> Go to Home</a>
						</div>

	</html>
	<?php
}

?>		