<?php
// Start the session
session_start();
?>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set." ."<br>"."faviourte colors are:".$_SESSION["favcolor"];
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "vik";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}
if($con->multi_query($sql)==true)
{
	echo "create successfully";
}
else
{
	echo "alreay create database  same name";
}
?>