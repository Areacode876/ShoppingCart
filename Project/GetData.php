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
$sql = "SELECT Food_id, Description, Ingredients FROM Foods";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "id: " . $row["Food_id"]. "  " . $row["Description"]. " = " . $row["Ingredients"]. 
"<br>";
}
} else {
echo "0 results";
}
$conn->close();
?>