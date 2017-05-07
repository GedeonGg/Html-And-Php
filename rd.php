
<html>
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
					background-repeat:;
					background-image: url("bg.png");
				}
			</style>
	</head>
	<body style="background-image:url:("backg.jpg)">
				<form>
						<table table style="border: 1px solid black" align="center">
							<caption>Dogs informarions</caption>
							<thead>
										<tr>
											<th>id</th>
											<th>Types</th>
											<th>Images</th>
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
include 'conn.php';
$req1 = mysqli_query($con,'select id, Type, IMAGES, IMAGES2 from dogs') or die("could not be excuted");
while($dn1 = mysqli_fetch_array($req1))
{ 
?>
								<tr>
									<th class="left"><?php echo $dn1['id']; ?></th>
									<th><?php echo $dn1['Type']; ?></th>
									<th><img src="Image/dogs/<?php echo $dn1['IMAGES']; ?>" width= "200px" height="200px"/></th>
									<th><img src="Image/dogs/<?php echo $dn1['IMAGES2']; ?>" width= "200px" height="200px"/></th>
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