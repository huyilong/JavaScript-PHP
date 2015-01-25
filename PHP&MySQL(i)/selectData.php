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

require "database.php";
//remember to substitute all the "conn" with "mysqli"

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    //here we are using fetch_assoc()
    //we actually could use result binding to finish this instead of getting 
    //a array of results (associative array of result" --- $row["firstname"]
    
    //the result could be directly binded into the param names and printed out
    //refer to the ppt
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$mysqli->close();
?>