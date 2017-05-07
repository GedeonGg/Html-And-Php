<?php

//We start sessions
session_start();


$servername = "localhost";
$username = "";
$password = "";
$dbname = "test";
$con=mysqli_connect($servername,$username,$password,$dbname); //or die("Failed to connect to MySQL: " . mysqli_error())

?>