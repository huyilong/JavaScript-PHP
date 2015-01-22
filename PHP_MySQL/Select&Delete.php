<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	//if the connection is failed 
	//we die the connection and print out the error message
     die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
     // output data of each row
     //the row will continuously read until the last line stored in db
     while($row = $result->fetch_assoc()) {
     
     	//read and output the html directly to print the data in db on screen
         echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
     }
     
} else {
     echo "0 results";
}


//delete operation
// sql to delete a record
// we have to make sure that our db named with sql
//and then we typed in statements into the name of db
//and then transferred to the conn->query
$sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>  

</body>
</html>