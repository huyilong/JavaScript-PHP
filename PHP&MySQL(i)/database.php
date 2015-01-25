<?php


//we are using MySQLi Object-oriented to create DB in server's mySQL
$servername = "localhost";
$username = "hu.yilong" ;
$password = "hylwustl2014" ; 
$database = "home" ;
// Content of database.php
 
$mysqli = new mysqli($servername, $username, $password, $database);
 
if($mysqli->connect_errno) {
	printf("Connection Failed: %s\n", $mysqli->connect_error);
	exit;
}

/*
this file needs always be called in the first place for connecting to the database
<?php
require 'database.php';

...
>
*/

//You need to run this code before you can perform any other query on your database. 
//Many PHP web developers put this code in a separate file and require it into other 
//files that require database access.
//You should create a new MySQL user with minimal privileges just for PHP to use.
?>