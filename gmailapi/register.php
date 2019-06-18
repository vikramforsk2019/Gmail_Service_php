<?php include 'con.php';?>
<?
session_start();
$m1=$_POST['otp'];
$m2=$_POST['verify'];
$m3=$_POST['fname'];
$m4=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$pic="user-thumb.jpg";
if($m1==$m2)
{

//Execute the query

mysqli_query($conn,"INSERT INTO profile(name,lname,email,password,pic)
				VALUES('$m3','$m4','$email','$pass','$pic')");
$_SESSION['room'] = $email;
header("Location:profile.php");

}
else
{
header("Location:login.php");

//echo "wrong send in login page using location";
}



?>
