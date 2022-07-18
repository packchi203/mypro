<?php
require "Studient.php";
$objStudient = new Studient();
//set
$objStudient->id = 1;
$objStudient->studientName = "minh";

//get
echo $objStudient->id;
echo $objStudient->studientName;

echo $objStudient->getStudienInfo();

?>
