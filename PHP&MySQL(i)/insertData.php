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

//the commands above is always needed whenver we use the database 
//and MySQLi OOP in PHP

//therefore we have already saved this as a individual file named "database.php"
//and we could import it to establish the connection whenever we need it

require 'database.php';

//attention!!!!! 
//the conn variable defined in w3school is used as "mysqli" in our ppt


$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>