<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//$conn = new mysqli("myServer", "myUser", "myPassword", "Northwind");
$conn = new mysqli("hu.yilong", "hu.yilong", "hylwustl2014", "first_database");


$result = $conn->query("SELECT CompanyName, City, Country FROM Customers");

$outp = "[";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"Name":"'  . $rs["CompanyName"] . '",';
    $outp .= '"City":"'   . $rs["City"]        . '",';
    $outp .= '"Country":"'. $rs["Country"]     . '"}'; 
}
$outp .="]";

$conn->close();

echo($outp);
?>