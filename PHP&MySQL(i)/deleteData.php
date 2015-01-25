<?php
/*
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
*/


//we use external package to check the connection and create the connection named mysqli
require("database.php");



// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

if ($mysqli->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $mysqli->error;
}

$mysqli->close();
?>
