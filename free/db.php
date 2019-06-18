<?php

$servername = "localhost";
$username = "root";
$password = "";
//$db = "ecom";

// Create connection
$con = mysqli_connect($servername, $username, $password);

// Check connection
if (!$con) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$sql="create database vik";
if($con->query($sql)==true)
{
	echo "create successfully";
}
else
{
	echo "alreay create database  same name";
}
?>