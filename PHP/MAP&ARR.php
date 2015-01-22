<!DOCTYPE html>
<html>
<body>

<?php


//array has two types
//1. sequential array which uses integer as their default index
//2. associative array which uses string as their index and needs new operation =>

$cars = array("Volvo", "BMW", "Toyota");

$arrlength = count($cars);
//count($arr_name) will return a number for the length of the array



for($x = 0; $x <  $arrlength; $x++) {
     echo $cars[$x];
     //pay attention to this usage 
     //whenever we use the variable we need to use $ to access them
     
     #echo $cars[$x]
     
     
     echo "<br>";
}


//usage of map:: the associative array
//i.e. the key of the array is no longer integers but strings

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
//we need this unique symbol :: small arrow => to indicate the array is 
//using string as index

echo "Peter is " . $age['Peter'] . " years old.";



foreach($age as $x => $x_value) {
     echo "Key=" . $x . ", Value=" . $x_value;
     echo "<br>";
}


?>

</body>
</html>