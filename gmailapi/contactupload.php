<?php include 'con.php';?>
<?php



// create a variable
$p1=$_POST['n1'];
$p2=$_POST['n2'];
$p3=$_POST['n3'];
$sql = "SELECT CURRENT_DATE() as date ";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
 {
        $date=$row["date"];
      

 }

}

//Execute the query

mysqli_query($conn,"INSERT INTO contact(name,email,message,date)
				VALUES('$p1','$p2','$p3','$date')");
header("Location:index.php");
?>
