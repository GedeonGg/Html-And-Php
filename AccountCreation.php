account_creation.php
<?php
require_once 'conn.php';
if(isset($_POST['FirstName'], $_POST['LastName'], $_POST['password'], $_POST['Age'],$_POST['EmailID'],$_POST['DOB'],$_POST['Address']))
{
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$password=$_POST['password'];
$Age=$_POST['Age'];
$EmailID=$_POST['EmailID'];
$DOB=$_POST['DOB'];
$Address=$_POST['Address'];
$query ='insert into signup(Firstname, Lastname, Password, Age, Email_id, DOB, Address) values ("'.$FirstName.'", "'.$LastName.'", "'.$password.'", '.$Age.', "'.$EmailID.'", "'.$DOB.'", "'.$Address.'")';
mysqli_query($con,$query) or die ("go and fuck yourself");
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
<div id="message">You have successfuly signed up. You can access to your member area<br/>
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
else
{
?>
<html>
<head>
<style>
body
{
background-image: url("image3.jpg");
}
table
{
background-image: url("bg.png");
width: 600px;
height:200px;
}
</style>
</head>
<body>
<form method="post" action="AccountCreation.php">
<table style="1px solid black; border-collapse : collapse" align="center">
<caption align="center">Account Creation</caption>
<tr>
<td>
FirstName :
</td>
<td>
<input type="text" name="FirstName" required/>
</td>
</tr>
<tr>
<td>
LastName :
</td>
<td>
<input type="text" name="LastName"/>
</td>
</tr>
<tr>
<td>
password :
</td>
<td>
<input type="password" name="password"/>
</td>
</tr>
<tr>
<td>
Confirm password :
</td>
<td>
<input type="password" name="password"/>
</td>
</tr>
<tr>
<td>
Age :
</td>
<td>
<input type="number" name="Age"/>
</td>
</tr>
<tr>
<td>
Gender :
</td>
<td>
<input type="radio" name="sex" value="MALE"/>MALE<br>
<input type="radio" name="sex" value="FEMALE"/>FEMALE
</td>
</tr>
<tr>
<td>
Email_id :
</td>
<td>
<input type="mail" name="EmailID"/>
</td>
</tr>
<tr>
<td>
DOB:
</td>
<td>
<input type="date" name="DOB"/>
</td>
</tr>
<tr>
<td>
Address:
</td>
<td>
<input type="text" name="Address"/>
</td>
</tr>
<tr>
<td align=right>
<input type="submit" onclick="alert('you are actually being Sign Up	')"/>
</td>
<td>
<input type="reset" name=""/>
</td>
</tr>
</table>
</form>
</html>
<?php
}
?>