<?php 		
require_once 'conn.php';


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
			}					
		</style>
		</head>
		<body >
				<form  method="POST" action="homeEXTRA.php">
						<table style="1px solid black; border-collapse : collapse" align="center">
						<caption align="center">login</caption>
						<tfoot>
								<tr>
									<td></td>
									<td rowspan="2">
										<a href="AccountCreation.html">do you wish to be member?</a>
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
										<input type="text" name="mailID"/>
									</td>
								</tr>
								<tr>
									<td>
										PASSWRD	:
									</td>
									<td>
										<input type="password" name="PASSWRD"/>
									</td>
								</tr>
								<tr>
									<td>
										<input type="submit" value="login" name="login" />
									</td>
									<td>
										<input type="reset"/>
									</td>
								</tr>
						
						</tbody>
						</table>
						</form>
		
		</body>
		
</html>
<?php

include 'check_login.php';
?>
