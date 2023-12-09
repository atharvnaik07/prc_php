<?php
class Person {
 public $name;
 public $age;
 // Constructor
 public function __construct($name, $age) {
 $this->name = $name;
 $this->age = $age;
 echo "A new person object has been created. Name: $this->name,
Age: $this->age\n";
 }
 public function sayHello() {
 echo "Hello, my name is $this->name, and I am $this->age years old.\n";
 }
}
// Create a Person object
$person1 = new Person("John", 30);
// Call a method of the object
$person1->sayHello();
// Create another Person object
$person2 = new Person("Alice", 25);
// Call a method of the second object
$person2->sayHello();
?>