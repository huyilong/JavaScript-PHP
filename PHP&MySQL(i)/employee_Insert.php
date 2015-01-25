<?php
require 'database.php';
 
$first = $_POST['first'];
$last = $_POST['last'];
$dept = $_POST['dept'];
 
$stmt = $mysqli->prepare("insert into employees (first_name, last_name, department) values (?, ?, ?)");

if(!$stmt){
	printf("Query Prep Failed: %s\n", $mysqli->error);
	exit;
}
 
$stmt->bind_param('sss', $first, $last, $dept);
 
 
 
$stmt->execute();
 
$stmt->close();
 
 
 
//INSERT INTO employees (first_name, last_name, department) VALUES ('John', 'Deere', 'EECE')
/*
When you want to INSERT or UPDATE an entry in your database, you probably need to supply some value from PHP for MySQL to interpret. This section discusses parameter binding, which is how you can do this sort of thing.


bind_param()
The most tricky line in the above example is the $stmt->bind_param() line. Here's how it works.
The first parameter defines the data types of data to be inserted into the query. It is a string with one character per data type. The possible data types are:
i - Integer
d - Decimal
s - String
b - Blob
Note that data types in queries are not the same as data types in schemas. For instance, when saving a date into MySQL, you need to use a string representation of the data (except for timestamp, which uses an integer), so you would use the s option.
The remaining parameters define values associated with each of the question marks in your query.
In the example code in the previous section, there are three question marks in the query, all of which are strings, and so the first argument to $stmt->bind_param() is 'sss'. The remaining three parameters is the information itself to be "injected" into the query.
*/

?>