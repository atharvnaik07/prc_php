<?php
// Define a class called "Person"
Class Person {
 // Properties (attributes)
 public $firstName;
 public $lastName;
 public $age;
 // Constructor method
 public function __construct($firstName, $lastName, $age) {
 $this->firstName = $firstName;
 $this->lastName = $lastName;
 $this->age = $age;
 }
 // Method to display the person's information
 public function displayInfo() {
 echo "Name: " . $this->firstName . " " . $this->lastName . "\n";
 echo "Age: " . $this->age . " years old\n";
 }
}
// Create objects of the "Person" class
$person1 = new Person("Vaishnavi", "suryavanshi", 25);
$person2 = new Person("Jane", "Smith", 25);
// Display information for each person
echo "Person 1:\n";
$person1->displayInfo();
echo "Person 2:\n";
$person2->displayInfo();
?>