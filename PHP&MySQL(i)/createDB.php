<?php

//we are using MySQLi Object-oriented to create DB in server's mySQL
$servername = "localhost";
$username = "hu.yilong" ;
$password = "hylwustl2014" ; 

//create connection
$conn = new mysqli($servername, $username, $password);

//check connection
if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

//create database here
$sql = "CREATE DATABASE home";

//actually we do not need to create a new database 
//because there is already a database named mySQL in server
//there are mutiple database in it
//and we could log in with mysql -u hu.yilong -p "database_name"

/*
The schema of your database refers to the way that your 
data is structured and to how bits of data relate to each other. 
Every database in your MySQL server has a separate schema,
 and separate databases should not typically interact with one another.
*/

if($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
//all php file needs to be transferred into the server and use URL in the browser to 
//run instead of use ./ or just click over it
?>