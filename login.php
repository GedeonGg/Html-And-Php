<?php
include 'conn.php';
if(!empty($_POST['mailID']))
{	
	$query = "SELECT * FROM data where EmailID = '$_POST[mailID]' AND PASSWRD = '$_POST[PASSWRD]'";
	$result = mysqli_query($con, $query);
	
	if($result) {
	while($row = mysqli_fetch_assoc($result)) 
	{ $_SESSION['username']=$row['EmailID'];
?>
		<html>
		<head>
		<style>	
				body {
				background-image: url("image2.jpg");
					}	
		table
			{
				background-image: url("bg.png");
				height: 400px;
				width: 600px;
			}
			div#message 	
			{
				height: 60px;
				width: 600px;
				border: 1px solid black;
				margin-left: auto ;
				margin-right: auto ;
				text-align: center;
				background-image: url("bg.png");
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
			body#body_block
			{
				align: center;
			}
		</style>
		</head>
		<body >
					<div id="body_block">
						<div id="message">You have successfuly been logged. You can access to your member area<br/>
						and then purchase or edit your profile.<br/>
						<span style="color:blue">we welcome you.</span>
						</div></br>
						
						<div id="home">
								<a href="index.php"> Go to Home</a>
						</div>
					</div>
		</body>
		
</html>
<?php
		
	}
	}
	else 
	{ 
		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
	}	 
}
mysqli_close($con);
if(empty($_POST['mailID']))
{
?>
<html>
		<head>
		<style>
body {
				background-image: url("image2.jpg");
					}	
		table
			{
				background-image: url("bg.png");
				height: 400px;
				width: 600px;
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
		</style>
		</head>
		<body >
				<form  method="POST" action="login.php">
						<table style="1px solid black; border-collapse : collapse" align="center">
						<caption align="center">Login</caption>
						<tfoot>
								<tr>
									<td></td>
									<td rowspan="2">
										<a href="AccountCreation.php">Sign Up</a>
									</td>
								</tr>
						</tfoot>
						<tbody>
						<tbody>
								<tr>
									<td>
										Email_Id :
									</td>
									<td>
										<input type="text" name="mailID" required/>
									</td>
								</tr>
								<tr>
									<td>
										PASSWRD	:
									</td>
									<td>
										<input type="password" name="PASSWRD" required/>
									</td>
								</tr>
								<tr>
									<td align=right>
										<input type="submit" value="login" name="login" onclick="alert('you are actually being logged in')"/>
									</td>
									<td>
										<input type="reset"/>
									</td>
								</tr>
						
						</tbody><br/>
						</table>
						</form>
						<div id="home">
								<a href="index.php"> Go to Home</a>
						</div>
		
		</body>
		
</html>
<?php }
 ?>
