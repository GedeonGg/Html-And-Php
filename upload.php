<?php
require_once 'conn.php';
if(isset($_POST['Pet_Type']))
//$_POST['Breed'], $_POST['Age'], $_POST['Price'],$_POST['Owner_Name'],$_POST['Your Contact Number'],$_POST['Photos'], $_POST['Video']))
{
//$Pet_Type=$_POST['type'];
$Breed=$_POST['breed'];
//$Age=$_POST['Age'];
//$Price=$_POST['cost'];
//$Owner_Name=$_POST['owner'];
//$Your_Contact_Number=$_POST['contact'];
//$Photos=$_POST['img1'];
//$Video=$_POST['vid'];
$query ='insert into upload(type) values ("'.$breed.'")';
mysqli_query($con,$query) or die ("go and fuck yourself");
?>
<html>
<?php
} 
else
{
?>
<head>
<title>
Upload Ad
</title>
<style>
table{
font-size:15;
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
</style>
<link href="css/bootshape.css" rel="stylesheet">
</head>
<body>
<form method="post" action="upload.php">
<table cellspacing=20 cellpadding=20 align="center" border=1>
<caption><h1>Upload</h1></caption>
<tr>
<td>Pet_Type:</td>
<td colspan=3><select name="type" required>
<option value="">--choose--</option>
<option value="dog">Dog</option>
<option value="cat">Cat</option>
<option value="bird">Bird</option>
<option value="rabbit">Rabbit</option>
</select></td>
</tr>
<tr>
<td>Breed</td>
<td colspan=3><input type="text" size=50 name="breed" /><br/></td>
</tr>
<tr>
<td>Age</td>
<td colspan=3><input type="text" size=2 name="Age" /><br/></td>
</tr>
<tr>
<td>Price</td>
<td colspan=3><input type="text" size=15 name="cost" /><br/></td>
</tr>
<tr><td>Description</td>
<td colspan=3><textarea rows=10 cols=50 /></textarea></td></tr>
<tr><td>Owner_Name</td>
<td colspan=3><input type="text" size=50 name="owner" /></td></tr>
<tr><td>Your_Contact_Number</td>
<td colspan=3><input type="number" size=10 name="contact" width=50 /></td></tr>
<tr><td rowspan=2>Photos:</td>
<td><input type="file" title="add photo" name="img1"></td>
<td><input type="file" title="add photo" name="img2"></td>
</tr>
<tr>
<td><input type="file" title="add photo" name="img3"></td>
<td><input type="file" title="add photo" name="img4"></td>
</tr>
<tr><td>Video</td>
<td><input type="file" title="add video" name="vid" ><br></td></tr>
<tr>
<td colspan=3 align="center">
<input type="submit" name="submit" value="upload" align="center" onclick="alert('you are actually trying to upload some informations')"></td></tr>
</table>
</form>
</body>
<div id="home"><a href="index.php"> Go to Home</a></div></div>
</html>
<?php
}
?>