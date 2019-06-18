<?
$servername = "142.54.176.178";
$username = "roomseek_rahul";
$password = "Pandit15@";
$dbname = "roomseek_user1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
