
<?php include 'con.php';?>
<?php


 session_start();
$user_check=$_SESSION['room']; 
if (!isset($_SESSION['room'])) {
        /// your code here
header("Location:login.php");
    }
// create a variable
$key=$_POST['kddsfwefwcwefvwvefwe'];
echo $key;
$p1=$_POST['sm1'];
$p2=$_POST['sm2'];
$p3=$_POST['sm3'];
$p4=$_POST['sm4'];
$p5=$_POST['sm5'];
$p6=$_POST['sm6'];
$p7=$_POST['sm7'];
$p8=$_POST['sm8'];
$p9=$_POST['sm9'];
$p10=$_POST['sm10'];
//Execute the query

//mysqli_query($conn,"INSERT INTO test1(name,phone,email,password)VALUES('$first','$phone','$email','$pass')");
mysqli_query($conn,"update post set ptype='$p2',gender='$p3',properties='$p4',bedrooms='$p5',furnish='$p6',title='$p7',address='$p8',price='$p10' where postid='$key'");
header("Location:profile.php");
?>









