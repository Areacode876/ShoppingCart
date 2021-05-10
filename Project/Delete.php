<?php
$servername = "localhost";
$username = "kdouglas15";
$password = "kdouglas15";
$dbname = "kdouglas15";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
 $sql = "DELETE FROM Foods WHERE Food_id = 8";
if ($conn->query($sql) === TRUE) {
echo "record deleted successfully.";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>