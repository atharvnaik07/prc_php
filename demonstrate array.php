<?php
// Indexed Array
$class = array("fybca", "sybca", "tybca");
print_r($class);
Page No.
echo "<br> Show me a {$class[1]}<br>"; 
// Use curly braces to access the array element.

// Adding a new element to the array
$class[] = "abc";
print_r($class);
echo "<br>";
// Associative Array
$ages = array("ram" => 25, "gita" => 45, "sham" => 56); // Use => to define
key-value pairs
print_r($ages);
echo "<br>";
?>
