<?php
// Define a user-defined function to calculate the factorial of a number
function calculateFactorial($number) {
 if ($number == 0) {
 return 1; // Factorial of 0 is 1
 } else {
 $factorial = 1;
 for ($i = 1; $i <= $number; $i++) {
 $factorial = $factorial * $i;
 }
 return $factorial;
 }
}
// Usage of the user-defined function
$number = 2; // Change this to calculate the factorial of a different number
$result = calculateFactorial($number);
echo "The factorial of $number is $result";
?>
