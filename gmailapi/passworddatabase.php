
<?php include 'con.php';?>
<?php


 session_start();

$p1=$_POST['email'];
$p2=$_POST['n1'];
$p3=$_POST['n2'];
$_SESSION['room']=$p1; 

//Execute the query

//mysqli_query($conn,"INSERT INTO test1(name,phone,email,password)VALUES('$first','$phone','$email','$pass')");
mysqli_query($conn,"update profile set password='$p2' where email='".$p1."'");

header("Location:profile.php");
?>

