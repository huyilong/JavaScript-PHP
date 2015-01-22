<!DOCTYPE html>
<html>
<body>

<!--
  
  there are different sorting methods with regard to different array types:
  1. sequential normal arrays with int as index
  2. associative arrays which is actually a map with string as index
  
  1.for sequential normal arrays
  sort() - sort arrays in ascending order
  rsort() - sort arrays in descending order
  
  2.for associative map arrays
  asort() - sort associative arrays in ascending order, according to the value
  arsort() - sort associative arrays in descending order, according to the value
  
  ksort() - sort associative arrays in ascending order, according to the key
  krsort() - sort associative arrays in descending order, according to the key


<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
$clength = count($cars);

for($x = 0; $x <  $clength; $x++) {
     echo $cars[$x];
     echo "<br>";
}


$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

$arrlength = count($numbers);
for($x = 0; $x <  $arrlength; $x++) {
     echo $numbers[$x];
     echo "<br>";
}


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

foreach($age as $x => $x_value) {
     echo "Key=" . $x . ", Value=" . $x_value;
     echo "<br>";
}

$map = array("peter" => "35", "ben" => "37", "joe" =>"45");
ksort($map);

foreach($map as $map_key => $map_value){
	echo "Key=" . $map_key . ", Value=" . $map_value;
	echo "<br>";
}

//descending order

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

foreach($age as $x => $x_value) {
     echo "Key=" . $x . ", Value=" . $x_value;
     echo "<br>";
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);

foreach($age as $x => $x_value) {
     echo "Key=" . $x . ", Value=" . $x_value;
     echo "<br>";
}

?>

</body>
</html>