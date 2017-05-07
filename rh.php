</html>
<html>
	<head>
			<style>
					table
				{
					height:400px;
					width:400px;
				}
					div#home
			{
				height: 20px;
				width: 600px;
				border: 1px solid black;
				margin-left: auto ;
				margin-right: auto ;
				text-align: center;
				background-image: url("bg.png");
			}
				table
				{
					height:400px;
					width:400px;
				}
				body
				{
					background-repeat:;
					background-image: url("bg.png");
				}
				
			</style>
	</head>
	<body>
				<form>
						<table table style="border: 1px solid black" align="center">
							<caption>Dogs informarions</caption>
							<thead>
										<tr>
											<th>id</th>
											<th>Types</th>
											<th>Image</th>
											<th>Images</th>
										</tr>
							</thead>
							<tfoot>
									<tr>
										<td rowspan="1">
											<th >the final table</th>
										</td>
									</tr>
								</tfoot>
							<tbody>
<?php 
require_once 'conn.php';
$req1 = mysqli_query($con,'select id, Type, Image, IMAGES from horses') or die("could not be excuted");
while($dn1 = mysqli_fetch_array($req1))
{
?>
								<tr>
									<th class="left"><?php echo $dn1['id']; ?></th>
									<th><?php echo $dn1['Type']; ?></th>
									<th><img src="Image/horses/<?php echo $dn1['Image']; ?>" width= "50px" height="50px"/></th>
									<th><img src="Image/horses/<?php echo $dn1['IMAGES']; ?>" width= "50px" height="50px"/></th>
								</tr>
							
<?php
}

?>
</tbody>
						</table>
				</form>
				<div id="home">
								<a href="index.php"> Go to Home</a>
						</div>

	</html>