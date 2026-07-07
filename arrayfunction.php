<?php

// Index Arrays
// Single Dimension Array
$array_One = array("One","TWO","Three");
$array_two = array("Four","Five",6,3,2);

echo "<pre>";
print_r($array_One);
echo "</pre>";

//array functions
echo "<pre>";
print_r(array_push($array_One,"four"));
echo "</pre>";

echo "<pre>";
print_r($array_One);
echo "</pre>";

echo "<pre>";
print_r(array_pop($array_One));
echo "</pre>";

?>