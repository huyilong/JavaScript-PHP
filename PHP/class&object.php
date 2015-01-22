<!DOCTYPE html>
<html>
<body>

<?php
class Car {

	//here is the constructor of the function
     function Car() {
     
     
     //this and self is used in several programming languages
     
     //we do not need to declare the variable because the type is automatically
     //we just need to directly use $this->model = "vm"
     
     
         $this->model = "VW";
     }
}



// create an object
// we call the constructor and again we do not need to declare the type of anything 
//we just directly use it with name and $
$herbie = new Car();

// show object properties
echo $herbie->model;
?>

</body>
</html>