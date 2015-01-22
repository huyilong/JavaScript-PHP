<!DOCTYPE html>
<html>
<body>

<?php
// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
#this is same with the declaration in c++
#define GREETING 100



function myTest() {
     echo GREETING;
}

echo GREETING , "<br>";
//cannot use + in the concatnence 
//but we could use comma "," or period "."


myTest();
//apart from the def of function method 
//we also need to call the function to use it

?> 


<!--

	in php
	
	===	Identical	$x === $y	Returns true if $x is equal to $y, 
									and they are of the same type 
									
									
	!==	Not identical	$x !== $y	Returns true if $x is not equal to $y, 
									or they are not of the same type

-->
</body>
</html>