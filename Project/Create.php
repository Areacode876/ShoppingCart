<?php
/*** Create a table through PHP Script ***/
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
// sql to create table
$sql = "CREATE TABLE AddressBook ( 
AddressID INTEGER,
F_NAME VARCHAR(50),
L_NAME VARCHAR(50) NOT NULL,
ADDRESS_LINE_1 VARCHAR(50),
ADDRESS_LINE_2 VARCHAR(50),
ADDRESS_LINE_3 VARCHAR(50),
Stage_Code Varchar(2) NOT NULL,
Phone_number VARCHAR(12) ,
email_id varchar(50),
alt_phone_number varchar(12)
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
echo "Table AddressBook created successfully";
} else {
echo "Error creating table: " . $conn->error;
}
$conn->close();
?>